<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class voucher_lines extends \module\accounting\model\voucher_lines_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__voucher_lines';
       public $fields = array (
  'created_by' => 
  array (
    'column' => 'created_by',
    'ntype' => 'int',
    'length' => '19',
  ),
  'created' => 
  array (
    'column' => 'created',
    'ntype' => 'datetime',
  ),
  'modified' => 
  array (
    'column' => 'modified',
    'ntype' => 'datetime',
  ),
  'modified_by' => 
  array (
    'column' => 'modified_by',
    'ntype' => 'int',
    'length' => '19',
  ),
  'full_reconcile' => 
  array (
    'column' => 'full_reconcile',
    'ntype' => 'int',
    'length' => '1',
  ),
  'voucher_id' => 
  array (
    'column' => 'voucher_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'open_balance' => 
  array (
    'column' => 'open_balance',
    'ntype' => 'int',
    'length' => '19',
  ),
  'account_id' => 
  array (
    'column' => 'account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '256',
  ),
  'journal_item_id' => 
  array (
    'column' => 'journal_item_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'untax_amount' => 
  array (
    'column' => 'untax_amount',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'original_amount' => 
  array (
    'column' => 'original_amount',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'amount' => 
  array (
    'column' => 'amount',
    'ntype' => 'int',
    'length' => '19',
  ),
  'account_analytic_id' => 
  array (
    'column' => 'account_analytic_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'type' => 
  array (
    'column' => 'type',
    'ntype' => 'string',
    'length' => '256',
  ),
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'owned_by' => 
  array (
    'column' => 'owned_by',
    'ntype' => 'int',
    'length' => '19',
  ),
  'deleted' => 
  array (
    'column' => 'deleted',
    'ntype' => 'int',
    'length' => '1',
  ),
  'revision' => 
  array (
    'column' => 'revision',
    'ntype' => 'int',
    'length' => '19',
  ),
  'flags' => 
  array (
    'column' => 'flags',
    'ntype' => 'int',
    'length' => '19',
  ),
);
       public $associations = array (
  'created_by_user' => 
  array (
    'className' => '\\module\\access_controls\\model\\users',
    'assocType' => 'belongsTo',
    'foreignKey' => 'created_by',
    'associationAlias' => 'created_by_user',
  ),
  'modified_by_user' => 
  array (
    'className' => '\\module\\access_controls\\model\\users',
    'assocType' => 'belongsTo',
    'foreignKey' => 'modified_by',
    'associationAlias' => 'modified_by_user',
  ),
  'owned_by_user' => 
  array (
    'className' => '\\module\\access_controls\\model\\users',
    'assocType' => 'belongsTo',
    'foreignKey' => 'owned_by',
    'associationAlias' => 'owned_by_user',
  ),
);
       public $filters = array (
  'voucher_id' => 
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
  'account_id' => 
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