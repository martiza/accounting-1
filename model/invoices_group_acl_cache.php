<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class invoices_group_acl_cache extends \module\accounting\model\invoices_group_acl_cache_domain_logic
  {
       public $displayField = 'id';
       public $primaryKey = 'id';
       public $parentClass = '\\acl_model';
       public $source = 'acl';
       public $table = 'accounting__invoices_group_acl_cache';
       public $fields = array (
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'group_id' => 
  array (
    'column' => 'group_id',
    'ntype' => 'int',
    'length' => '19',
  ),
);
       public $filters = array (
  'group_id' => 
  array (
    0 => 
    array (
      'rule' => 1024,
      'params' => 
      array (
        'options' => 
        array (
          0 => '\\tushar\\validation',
          1 => 'notEmpty',
        ),
      ),
    ),
  ),
);
  }