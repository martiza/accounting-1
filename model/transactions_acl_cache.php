<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class transactions_acl_cache extends \module\accounting\model\transactions_acl_cache_domain_logic
  {
       public $displayField = 'id';
       public $primaryKey = 'id';
       public $parentClass = '\\acl_model';
       public $source = 'acl';
       public $table = 'accounting__transactions_acl_cache';
       public $alias = 'transactions_acl_cache';
       public $fields = array (
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'user_id' => 
  array (
    'column' => 'user_id',
    'ntype' => 'int',
    'length' => '19',
  ),
);
       public $filters = array (
  'user_id' => 
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