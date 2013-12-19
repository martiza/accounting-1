<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\model;

class accounts_domain_logic extends \design_model{

    public function beforeSave() {
        parent::beforeSave();
        if (isset($this->data[$this->primaryKey]) && !empty($this->data[$this->primaryKey])) {
            $date = \tushar\locale::systemDate();
            $data = current($this->read($this->data[$this->primaryKey], false));
            if (isset($this->data['is_active']) && $data['is_active'] == 1 && $this->data['is_active'] == 0) {
                //account of same company
                //find room account....
                //find company
                $companyID = \select("{$this->alias}.company_id")->from($this)
                        ->where(array("lft" <= $data['lft'], "rgt" >= $data["rgt"]))
                        ->inserted()
                        ->order("lft ASC")->limit(1)
                        ->execute()
                        ->fetch(\PDO::FETCH_COLUMN, 0);
                if ($companyID == false) {
                    $companyID = $data['company_id'];
                }
                if ($companyID == false) {
                    throw new \Exception(sprintf(__("Could not locate company for account \"%s\"", "module"), $data['name']));
                }
                //period of same company
                $entryLines = \select(array('COUNT(1) AS count', 'fiscal_years.start_date', 'fiscal_years.end_date'))
                        ->from('\\module\\accounting\\model\\journal_entry_lines')
                        ->joinInner('journal_entries')
                        ->joinInner('periods')
                        ->joinInner('fiscal_years')
                        ->inserted()
                        ->where(array(
                            'journal_entry_lines.account_id' => $this->data[$this->primaryKey],
                            'fiscal_years.start_date <=' => $date,
                            'fiscal_years.end_date >=' => $date,
                            'fiscal_years.company_id ' => $companyID
                        ))
                        ->execute()
                        ->fetch(\PDO::FETCH_ASSOC);
                if (isset($entryLines['count']) && $entryLines['count'] > 0) {
                    throw new \Exception(sprintf(__("Cannot disable account as it has %s journal entry lines for year %s to %s"), $entryLines['count'], $entryLines['start_date'], $entryLines['end_date']));
                }
            }
        }
    }
    
    

}