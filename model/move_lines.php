<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class move_lines extends \module\accounting\model\move_lines_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__move_lines';
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
  'statement_id' => 
  array (
    'column' => 'statement_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'journal_id' => 
  array (
    'column' => 'journal_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'currency_id' => 
  array (
    'column' => 'currency_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'due_date' => 
  array (
    'column' => 'due_date',
    'ntype' => 'date',
  ),
  'partner_id' => 
  array (
    'column' => 'partner_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'partial_reconcile_id' => 
  array (
    'column' => 'partial_reconcile_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'analytic_account_id' => 
  array (
    'column' => 'analytic_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'credit' => 
  array (
    'column' => 'credit',
    'ntype' => 'int',
    'length' => '19',
  ),
  'centralisation' => 
  array (
    'column' => 'centralisation',
    'ntype' => 'string',
    'length' => '64',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_account_id' => 
  array (
    'column' => 'tax_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '64',
  ),
  'debit' => 
  array (
    'column' => 'debit',
    'ntype' => 'int',
    'length' => '19',
  ),
  'no_follow_up' => 
  array (
    'column' => 'no_follow_up',
    'ntype' => 'int',
    'length' => '1',
  ),
  'reference' => 
  array (
    'column' => 'reference',
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
  'creation_date' => 
  array (
    'column' => 'creation_date',
    'ntype' => 'date',
  ),
  'effective_date' => 
  array (
    'column' => 'effective_date',
    'ntype' => 'date',
  ),
  'journal_entry_id' => 
  array (
    'column' => 'journal_entry_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '64',
  ),
  'reconcile_id' => 
  array (
    'column' => 'reconcile_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_amount' => 
  array (
    'column' => 'tax_amount',
    'ntype' => 'int',
    'length' => '19',
  ),
  'product_id' => 
  array (
    'column' => 'product_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_id' => 
  array (
    'column' => 'tax_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'unit_of_measure_id' => 
  array (
    'column' => 'unit_of_measure_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'amount_currency_id' => 
  array (
    'column' => 'amount_currency_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'quantity' => 
  array (
    'column' => 'quantity',
    'ntype' => 'int',
    'length' => '19',
  ),
  'asset_id' => 
  array (
    'column' => 'asset_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'latest_follow_up' => 
  array (
    'column' => 'latest_follow_up',
    'ntype' => 'date',
  ),
  'follow_up_level' => 
  array (
    'column' => 'follow_up_level',
    'ntype' => 'int',
    'length' => '19',
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
  'effective_date' => 
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
  'journal_entry_id' => 
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
  'name' => 
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