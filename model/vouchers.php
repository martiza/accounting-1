<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class vouchers extends \module\accounting\model\vouchers_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__vouchers';
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
  'counterpart_comment' => 
  array (
    'column' => 'counterpart_comment',
    'ntype' => 'string',
    'length' => '255',
  ),
  'date_due' => 
  array (
    'column' => 'date_due',
    'ntype' => 'date',
  ),
  'is_multi_currency_voucher' => 
  array (
    'column' => 'is_multi_currency_voucher',
    'ntype' => 'int',
    'length' => '1',
  ),
  'reference' => 
  array (
    'column' => 'reference',
    'ntype' => 'string',
    'length' => '64',
  ),
  'number' => 
  array (
    'column' => 'number',
    'ntype' => 'string',
    'length' => '32',
  ),
  'counterpart_account_id' => 
  array (
    'column' => 'counterpart_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'date' => 
  array (
    'column' => 'date',
    'ntype' => 'date',
  ),
  'notes' => 
  array (
    'column' => 'notes',
    'ntype' => 'string',
  ),
  'partner_id' => 
  array (
    'column' => 'partner_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'payment_rate_currency_id' => 
  array (
    'column' => 'payment_rate_currency_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'payment' => 
  array (
    'column' => 'payment',
    'ntype' => 'string',
    'length' => '64',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '32',
  ),
  'is_previous_payment' => 
  array (
    'column' => 'is_previous_payment',
    'ntype' => 'int',
    'length' => '1',
  ),
  'exchange_rate' => 
  array (
    'column' => 'exchange_rate',
    'ntype' => 'int',
    'length' => '19',
  ),
  'default_type' => 
  array (
    'column' => 'default_type',
    'ntype' => 'string',
    'length' => '64',
  ),
  'payment_difference' => 
  array (
    'column' => 'payment_difference',
    'ntype' => 'string',
    'length' => '64',
  ),
  'account_id' => 
  array (
    'column' => 'account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'period_id' => 
  array (
    'column' => 'period_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'is_active' => 
  array (
    'column' => 'is_active',
    'ntype' => 'int',
    'length' => '1',
  ),
  'account_entry_id' => 
  array (
    'column' => 'account_entry_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_id' => 
  array (
    'column' => 'tax_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_amount' => 
  array (
    'column' => 'tax_amount',
    'ntype' => 'int',
    'length' => '19',
  ),
  'memo' => 
  array (
    'column' => 'memo',
    'ntype' => 'string',
    'length' => '256',
  ),
  'write_off_analytic_account_id' => 
  array (
    'column' => 'write_off_analytic_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'journal_id' => 
  array (
    'column' => 'journal_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'total' => 
  array (
    'column' => 'total',
    'ntype' => 'int',
    'length' => '19',
  ),
  'amount_in_word' => 
  array (
    'column' => 'amount_in_word',
    'ntype' => 'string',
    'length' => '128',
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
  'payment_rate_currency_id' => 
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
  'company_id' => 
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
  'exchange_rate' => 
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
  'payment_difference' => 
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
  'period_id' => 
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
  'journal_id' => 
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
  'total' => 
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