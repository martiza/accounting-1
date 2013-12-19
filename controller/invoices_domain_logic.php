<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\controller;

class invoices_domain_logic extends \data_controller{

    public function create_customer_invoice($request) {
        $return = $this->add($request);
        $data = $request->response('data');
        $modelObj = $this->modelObj();
        if (!is_array($data)) {
            $data = array();
        }
        if (!isset($data[$modelObj->alias])) {
            $data[$modelObj->alias] = array();
        }
        $invoiceType = \select("*")
                        ->from($modelObj->{'invoice_types'})
                        ->inserted()->where('business_key', 'Customer Invoice')
                        ->execute()->fetch(\PDO::FETCH_ASSOC);
        $data[$modelObj->alias]['invoice_type_id'] = $invoiceType['name'];
        $data[$modelObj->alias]['invoice_type_id_business_key'] = $invoiceType['business_key'];
        $request->set('data', $data);
        return $return;
    }

    public function create_supplier_invoice($request) {
        $return = $this->add($request);
        $data = $request->response('data');
        $modelObj = $this->modelObj();
        if (!is_array($data)) {
            $data = array();
        }
        if (!isset($data[$modelObj->alias])) {
            $data[$modelObj->alias] = array();
        }
        $invoiceType = \select("*")
                        ->from($modelObj->{'invoice_types'})
                        ->inserted()->where('business_key', 'Supplier Invoice')
                        ->execute()->fetch(\PDO::FETCH_ASSOC);
        $data[$modelObj->alias]['invoice_type_id'] = $invoiceType['name'];
        $data[$modelObj->alias]['invoice_type_id_business_key'] = $invoiceType['business_key'];
        $request->set('data', $data);
        return $return;
    }

}