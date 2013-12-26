<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */
//    
// 

namespace module\accounting\model;

class journal_entries_domain_logic extends \data_model{

    public function beforeSave() {
        parent::beforeSave();
        $data = array();
        if (isset($this->data[$this->primaryKey]) && !empty($this->data[$this->primaryKey])) {
            $data = current($this->read($this->data[$this->primaryKey], false));
        }

        if (isset($this->data['reference']) && $this->data['reference'] == false) {
            unset($this->data['reference']);
        }

        if (isset($this->data['reference_model']) && (!isset($this->data['reference']) || empty($this->data['reference']))) {
            unset($this->data['reference_model']);
        }

        if (empty($data)) {
            $this->data['status_id'] = $this->{'journal_entry_status'}->readBusinessKey('draft');
        } elseif (isset($data['status_id']) && $data['status_id'] == $this->{'journal_entry_status'}->readBusinessKey('posted')) {
            throw new \Exception(__("This journal entry is already posted"));
        }


        if (isset($this->data['action']) && isset($this->data['action']['post'])) {
            $date = \tushar\locale::systemDate();
            $journalEntryLines = array();
            $journalEntryLines = \select('journal_entry_lines.*')
                    ->from($this->{'journal_entry_lines'})
                    ->inserted()
                    ->where('journal_entry_id', $this->data[$this->primaryKey])->limit(0)
                    ->execute()
                    ->fetchAll(\PDO::FETCH_ASSOC);

            $periodInfo = \current($this->{'periods'}->read($data['period_id'], false));

            if (strtotime($date) < strtotime($periodInfo['start_of_period']) || strtotime($date) > strtotime($periodInfo['end_of_period'])) {
                throw new \Exception(sprintf(__("The selected period is from  %s to %s date. You cant post entry against this period", 'module'), $periodInfo['start_of_period'], $periodInfo['end_of_period']));
            }

            $debit = 0;
            $credit = 0;
            if (is_array($journalEntryLines)) {
                foreach ($journalEntryLines as $info) {
                    $debit +=$info['debit'];
                    $credit +=$info['credit'];
                }
            }
            if ($debit != $credit) {
                throw new \Exception(sprintf(__("Journal entry lines are not balanced since debit(%s) and credit(%s) amount are different", "module"), $debit, $credit));
            } else if ($debit == $credit && $credit == 0) {
                throw new \Exception(sprintf(__("Provide journal entry lines with debit and credit amount greater then zero", "module")));
            } else {
                $balanceEntry = $this->{'journal_entry_lines'}->{'journal_entry_line_status'}->readBusinessKey('balanced');
                $accountObj = $this->{'journal_entry_lines'}->{'accounts'};
                //pr($journalEntryLines);
                if (is_array($journalEntryLines)) {
                    foreach ($journalEntryLines as $info) {
                        $dt = array('id' => $info['id'], 'status_id' => $balanceEntry);
                        $this->{'journal_entry_lines'}->saveModel($dt, array('atomic' => true, 'type' => 'update'));
                    }
                }
            }
            $this->data['status_id'] = $this->{'journal_entry_status'}->readBusinessKey('posted');
        }
    }

}