<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\controller;

class journal_entries_domain_logic extends \data_controller{

    public function index($request, $query = array()) {
        \module\accounting\controller\accounts_domain_logic::filter($request);
        $return = parent::index($request, $query);
        return $return;
    }

    protected function indexQuery($request, &$query) {
        $where = array();
        $companyID = $request->session('company_id');
        $fiscalYearID = $request->session('fiscal_year_id');
        $periodID = $request->session('period_id');
        $query['COMPANY_ID'] = $companyID;
        $query['FISCAL_YEAR_ID'] = $fiscalYearID;
        $query['PERIOD_ID'] = $periodID;

        $modelObj = $this->modelObj();
        if (!empty($companyID)) {
            $where["{$modelObj->alias}.journals.company_id"] = $companyID;
        }
        if (!empty($fiscalYearID)) {
            $where["{$modelObj->alias}.periods.fiscal_year_id"] = $fiscalYearID;
        }
        if (!empty($periodID)) {
            $where["{$modelObj->alias}.period_id"] = $periodID;
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