<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\controller;

class accounts_domain_logic extends \design_controller{

    public function index($request, $query = array()) {
        static::filter($request);
        return parent::index($request, $query);
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
            $where["{$modelObj->alias}.company_id"] = $companyID;
            if (isset($query['where'])) {
                $query['where'] = array($where, $query['where']);
            }
        }
    }

    public static function filter($request) {
        $companyName = $fiscalYearName = $periodName = "";
        $systemDate = \tushar\locale::systemDate();
        $companyID = $request->param('company_id', $request->session('company_id', false));
        $fiscalYearID = $request->param('fiscal_year_id', $request->session('fiscal_year_id', false));
        $periodID = $request->param('period_id', $request->session('period_id', false));
        if ($companyID === false) {
            $companyID = \tushar\user::read('company_id');
        }
        $obj = \module\crm_base\model\companies::getInstance();
        $con = array();
        if (!empty($companyID)) {
            $con = array("$obj->alias.{$obj->primaryKey}" => $companyID);
            $info = \select(array("$obj->alias.{$obj->primaryKey}", "{$obj->alias}.{$obj->displayField}"))
                    ->from($obj)
                    ->where($con)
                    ->limit(1)
                    ->execute()
                    ->fetch(\PDO::FETCH_ASSOC);
            $companyName = $info[$obj->displayField];
        }


        $obj = \module\accounting\model\fiscal_years::getInstance();
        $con = array();
        if (!empty($fiscalYearID)) {
            $con["fiscal_years.{$obj->primaryKey}"] = $fiscalYearID;
        } else if ($fiscalYearID === false) {
            $con["fiscal_years.start_date <= "] = $systemDate;
            $con["fiscal_years.end_date >="] = $systemDate;
        }
        if (!empty($con)) {
            $con["company_fiscal_years.company_id"] = $companyID;
            $info = \select(array("$obj->alias.{$obj->primaryKey}", "{$obj->alias}.{$obj->displayField}"))
                    ->from($obj)
                    ->join("company_fiscal_years")->inserted()
                    ->where($con)
                    ->limit(1)
                    ->execute()
                    ->fetch(\PDO::FETCH_ASSOC);
            $fiscalYearName = $info[$obj->displayField];
            $fiscalYearID = $info[$obj->primaryKey];
        }


        $con = array();
        if (!empty($periodID)) {
            $con["periods.{$obj->primaryKey}"] = $periodID;
        } else if ($periodID === false) {
            $con["periods.start_of_period <= "] = $systemDate;
            $con["periods.end_of_period >="] = $systemDate;
        }
        if (!empty($con)) {
            $con["periods.fiscal_year_id"] = $fiscalYearID;
            $obj = \module\accounting\model\periods::getInstance();
            $info = \select(array("$obj->alias.{$obj->primaryKey}", "{$obj->alias}.{$obj->displayField}"))
                    ->from($obj)
                    ->where($con)
                    ->limit(1)
                    ->execute()
                    ->fetch(\PDO::FETCH_ASSOC);
            $periodName = $info[$obj->displayField];
            $periodID = $info[$obj->primaryKey];
        }

        $request->sessionWrite('company_id', $companyID);
        $request->sessionWrite('fiscal_year_id', $fiscalYearID);
        $request->sessionWrite('period_id', $periodID);
        $request->sessionWrite('company_name', $companyName);
        $request->sessionWrite('fiscal_year_name', $fiscalYearName);
        $request->sessionWrite('period_name', $periodName);
    }

}