<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\controller;

class journal_entry_lines_domain_logic extends \tushar\controller{

    public function index($request, $query = array()) {
        \module\accounting\controller\accounts_domain_logic::filter($request);
        return parent::index($request, $query);
    }

    protected function indexQuery($request, &$query) {
        $where = array();
        $modelObj = $this->modelObj();

        if ($request->get('related_to') != false
                &&
                        \select("id")->from($modelObj->{'journal_entries'})
                        ->inserted()->where("id", $request->get('related_to'))
                        ->execute()->fetch(\PDO::FETCH_COLUMN, 0) == false
        ) {
            
        } else {

            $companyID = $request->session('company_id');
            $fiscalYearID = $request->session('fiscal_year_id');
            $periodID = $request->session('period_id');
            $query['COMPANY_ID'] = $companyID;
            $query['FISCAL_YEAR_ID'] = $fiscalYearID;
            $query['PERIOD_ID'] = $periodID;


            if (!empty($companyID)) {
                $where["{$modelObj->alias}.journal_entries.journals.company_id"] = $companyID;
            }
            if (!empty($fiscalYearID)) {
                $where["{$modelObj->alias}.journal_entries.periods.fiscal_year_id"] = $fiscalYearID;
            }
            if (!empty($periodID)) {
                $where["{$modelObj->alias}.journal_entries.period_id"] = $periodID;
            }
            if (!empty($where)) {
                if (isset($query['where'])) {
                    $query['where'] = array($where, $query['where']);
                } else {
                    $query['where'] = $where;
                }
            }
        }
    }

}