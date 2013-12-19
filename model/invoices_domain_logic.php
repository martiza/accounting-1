<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\model;

class invoices_domain_logic extends \data_model{

    public function beforeSave() {
        $invoiceTaxes = array();
        if (isset($this->data[$this->primaryKey])) {
            foreach (\select(array('id', 'tax_code_id', 'tax_code_amount'))->from($this->invoice_taxes)
                    ->inserted()
                    ->where('invoice_id', $this->data[$this->primaryKey])
                    ->execute()
                    ->fetchAll(\PDO::FETCH_ASSOC) as $info) {
                $invoiceTaxes[$info['tax_code_id']] = $info;
            }
        }
        if (!empty($invoiceTaxes)) {
            foreach ($this->data['invoice_taxes'] as $row => $info) {
                if (isset($invoiceTaxes[$info['tax_code_id']])) {
                    $this->data['invoice_taxes'][$row] = array_merge($invoiceTaxes[$info['tax_code_id']], $this->data['invoice_taxes'][$row]);
                    unset($invoiceTaxes[$info['tax_code_id']]);
                }
            }
        }
        if (!empty($invoiceTaxes)) {
            foreach ($invoiceTaxes as $info) {
                $info['deleted'] = 1;
                $this->data['invoice_taxes'][] = $info;
            }
        }
        parent::beforeSave();
    }

    public function afterSave($created) {
        if ($created) {
            $object = $this;
            $object->data["number"] = \module\crm_base\model\sequences::getInstance()
                    ->nextNumber("accounting-invoice");
            $object->saveModel(array("number" => $object->data["number"], "id" => $object->data["id"]), array("atomic" => true, "type" => "update"));
        }
        //  compute Journal entries...
        $journalEntryObj = \module\accounting\model\journal_entries::getInstance(array(), true);
        $accountObj = \module\accounting\model\accounts::getInstance(array(), true);
        if (isset($this->data['action']) && isset($this->data['action']['confirm'])) {
            $partnerAccountObj = \module\accounting\model\partner_accounts::getInstance(array(), true);
            $partnerAccountINFO = \select("*")
                    ->from($partnerAccountObj)
                    ->inserted()
                    ->where("partner_id", $this->data['partner_id'])
                    ->execute()
                    ->fetch(\PDO::FETCH_ASSOC);
            $entryLines = array();
            $amountSum = 0;
            $i = 0;
            $productSaleInvoiceLines = array();
            if (is_array($this->data['invoice_lines'])) {
                $productAccountObj = \module\accounting\model\product_accounts::getInstance(array(), true);
                $productObj = \module\crm\model\products::getInstance(array(), true);
                foreach ($this->data['invoice_lines'] as $invoiceLine) {
                    $entryLines[($i++)] = array();
                    $productAccountINFO = \select("*")
                            ->from($productAccountObj)
                            ->inserted()
                            ->where("product_id", $invoiceLine['product_id'])
                            ->execute()
                            ->fetch(\PDO::FETCH_ASSOC);
                    $productINFO = current($productObj->read($invoiceLine['product_id'], array()));
                    $invoiceLine['product_name'] = $productINFO['product_name'];

                    $entryLines[$i]['product_id'] = $invoiceLine['product_id'];
                    $entryLines[$i]['product_uom_id'] = $invoiceLine['unit_of_measure'];
                    $entryLines[$i]['effective_date'] = \tushar\locale::systemDate();
                    if ($data["type"] == "sales") {
                        if (empty($productAccountINFO['income_account_id'])) {
                            throw new \Exception(sprintf(__('Please configure income account for product "%s"', 'module'), $invoiceLine['product_name']));
                        }
                        $entryLines[$i]['account_id'] = $productAccountINFO['income_account_id'];
                        $entryLines[$i]['memo'] = "Sale of product {$invoiceLine['product_name']}";
                        // on sales credit sales account
                        $entryLines[$i]['credit'] = $invoiceLine['amount'];
                    } else if ($data["type"] == "purchase") {
                        if (empty($productAccountINFO['income_account_id'])) {
                            throw new \Exception(sprintf(__('Please configure expense account for product "%s"', 'module'), $invoiceLine['product_name']));
                        }
                        $entryLines[$i]['account_id'] = $productAccountINFO['expense_account_id'];
                        $entryLines[$i]['memo'] = "Purchase of product {$invoiceLine['product_name']}";
                        $entryLines[$i]['debit'] = $invoiceLine['amount'];
                    }
                    $amountSum += $invoiceLine['amount'];
                    if (isset($productINFO['is_service']) && $productINFO['is_service'] == 1) {
                        $productSaleInvoiceLines[] = $invoiceLine;
                    }
                }
            }

            //todo: use default if not specified. configuration
            //ACCOUNTS RECEIVABLES
            //ACCOUNTS PAYABLES
            //Sales Income
            //Sales tax liability
            //COST OF GOODS SOLD
            //INVENTORY

            if (is_array($this->data['invoice_taxes'])) {
                $taxObj = $this->{'invoice_taxes'}->{'taxes'};
                foreach ($this->data['invoice_taxes'] as $invoiceTax) {
                    $taxINFO = current($taxObj->read($invoiceTax['tax_code_id'], array()));
                    $entryLines[($i++)] = array();
                    $entryLines[$i]['effective_date'] = \tushar\locale::systemDate();
                    if (empty($taxINFO['invoice_tax_account_id'])) {
                        throw new \Exception(\sprintf(__("Please configure invoice tax account for tax \"%s\"", 'module'), $taxINFO['tax_name']));
                    }
                    $entryLines[$i]['account_id'] = $taxINFO['invoice_tax_account_id'];
                    // on sales credit tax account
                    $amountSum += $entryLines[$i]['credit'] == $invoiceTax['tax_code_amount'];
                }
            }
            $entryLines[($i++)] = array();
            $entryLines[$i]['effective_date'] = \tushar\locale::systemDate();
            $entryLines[$i]['partner_id'] = $this->data['partner_id'];
            $journalObj = \module\accounting\model\journals::getInstance(array(), true);
            $partnerINFO = current($this->{'partners'}->read($this->data['partner_id']));
            $journalName = '';
            if ($data["type"] == "sales") {
                // on sales debit account_receivable_id
                if (empty($partnerAccountINFO['account_receivable_id'])) {
                    throw new \Exception(\sprintf(__("Please configure account receivable account for tax \"%s\"", 'module'), $partnerINFO['account_name']));
                }
                $entryLines[$i]['account_id'] = $partnerAccountINFO['account_receivable_id'];
                $entryLines[$i]['debit'] = $amountSum;
                $journalName = 'Sales Journal';
            } else if ($data["type"] == "purchase") {
                if (empty($partnerAccountINFO['account_payable_id'])) {
                    throw new \Exception(\sprintf(__("Please configure account payable account for tax \"%s\"", 'module'), $partnerINFO['account_name']));
                }
                $entryLines[$i]['account_id'] = $partnerAccountINFO['account_payable_id'];
                $entryLines[$i]['credit'] = $amountSum;
                $journalName = 'Purchase Journal';
            }
            $companyID = \tushar\user::read('company_id');
            $journalID = \select("id")
                            ->from($journalObj)
                            ->inserted()
                            ->where("name", $journalName)
                            ->where("currency_id", $this->data['currency_id'])
                            ->where("company_id", $companyID)
                            ->limit(1)
                            ->execute()->fetch(\PDO::FETCH_COLUMN, 0);
            if (empty($journalID)) {
                if (empty($partnerAccountINFO['account_payable_id'])) {
                    throw new \Exception(\sprintf(__("Please configure \"%s\" journal for company", 'module'), $journalName));
                }
            }
            $con["company_fiscal_years.company_id"] = $companyID;
            $con["fiscal_years.start_date <= "] = $systemDate;
            $con["fiscal_years.end_date >="] = $systemDate;
            $con["periods.start_of_period <= "] = $systemDate;
            $con["periods.end_of_period >="] = $systemDate;
            $periodID = \select(array("periods.id"))
                    ->from($obj)
                    ->join("company_fiscal_years")
                    ->join('periods')
                    ->inserted()
                    ->where($con)
                    ->limit(1)
                    ->execute()
                    ->fetch(\PDO::FETCH_COLUMN, 0);
            $journalEntryObj->save(
                    array(
                'memo' => "Journal Entry for invoice {$this->data['invoice_number']}",
                'journal_id' => $journalID,
                'period_id' => $periodID,
                'date' => \tushar\locale::systemDate(),
                'primary_acl_group' => $this->data['primary_acl_group'],
                'reference' => $this->data[$this->primaryKey],
                'reference_model' => 'invoices',
                '__reference' => $this->data['invoice_number'],
                'reference_model_class_name' => '\\module\\accounting\\model\\invoices',
                'journal_entry_lines' => $entryLines
                    ), array('atomic' => true)
            );

            /**
             * Need actual cost product to implement following.
             */
            /*
              $costOfGoddSold = \select("*")->from($accountObj)
              ->inserted()->where("name", "COST OF GOODS SOLD")->limit(1)
              ->execute()->fetch(\PDO::FETCH_ASSOC);
              $inventory = \select("*")->from($accountObj)
              ->inserted()->where("name", "INVENTORY")->limit(1)
              ->execute()->fetch(\PDO::FETCH_ASSOC);

              if (!empty($productSaleInvoiceLines)) {
              $entryLines = array();
              $i = 0;
              foreach ($productSaleInvoiceLines as $invoiceLine) {
              if ($data["type"] == "sales") {
              $entryLines[$i]['product_id'] = $invoiceLine['product_id'];
              $entryLines[$i]['product_uom_id'] = $invoiceLine['unit_of_measure'];
              $entryLines[$i]['effective_date'] = \tushar\locale::systemDate();
              $entryLines[$i]['account_id'] = $costOfGoddSold['id'];
              $entryLines[$i]['memo'] = "Sale of product {$invoiceLine['product_name']}";
              $entryLines[$i]['debit'] = $invoiceLine['amount'];


              $i++;
              $entryLines[$i] = array();
              $entryLines[$i]['product_id'] = $invoiceLine['product_id'];
              $entryLines[$i]['product_uom_id'] = $invoiceLine['unit_of_measure'];
              $entryLines[$i]['effective_date'] = \tushar\locale::systemDate();
              $entryLines[$i]['account_id'] = $inventory['id'];
              $entryLines[$i]['memo'] = "Sale of product {$invoiceLine['product_name']}";
              $entryLines[$i]['credit'] = $invoiceLine['amount'];
              } else if ($data["type"] == "purchase") {

              }
              }
              }
             */
        }
    }

}