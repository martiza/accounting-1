<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\model;

class journal_entry_lines_domain_logic extends \tushar\model{

    public function beforeSave() {
        parent::beforeSave();

        $debit = isset($this->data['debit']) ? $this->data['debit'] : 0;
        $credit = isset($this->data['credit']) ? $this->data['credit'] : 0;
        if (($debit == 0 && $credit == 0) || ($debit != 0 && $credit != 0)) {
            throw new \Exception(__("Enter either debit or credit amount."));
        }
        if (!isset($this->data[$this->primaryKey]) || empty($this->data[$this->primaryKey])) {
            if (!isset($this->data['status_id']) || empty($this->data['status_id'])) {
                $this->data['status_id'] = $this->{'journal_entry_line_status'}->readBusinessKey('unbalanced');
            }
        }

        if (isset($this->data['journal_entry_id']) && !empty($this->data['journal_entry_id'])) {
            $isSet = \select(array('status_id'))->from($this->{'journal_entries'})
                    ->inserted()
                    ->where('id', $this->data['journal_entry_id'])->limit(1)
                    ->execute()
                    ->fetch(\PDO::FETCH_COLUMN, 0);
            if ($isSet == $this->{'journal_entries'}->{'journal_entry_status'}->readBusinessKey('posted')) {
                throw new \Exception(__("The selected journal entry is already posted"));
            }
        }
    }

}