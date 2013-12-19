<?php

/**
 *
 * write any custom code in this class, build operation wont overwrite this class once generated;
 */

namespace module\accounting\model;

class taxes_domain_logic extends \tushar\model{

    public function computeTaxAmount($taxID, $amount) {
        $tax = \current($this->read($taxID, array()));
        $taxAmount = 0;
        if (isset($tax['tax_type_id_business_key']) && !empty($tax['tax_type_id_business_key'])) {
            $type = $tax['tax_type_id_business_key'];
        } elseif (isset($tax['tax_type'])) {
            $type = $tax['tax_type'];
        }
        switch ($type) {
            case 'Percent':
            case 'percent':
                $taxAmount = $amount * $tax['amount'];
                break;
            case 'Amount':
            case 'amount':
                $taxAmount = $tax['amount'];
                break;
        }
        return $taxAmount;
    }

}