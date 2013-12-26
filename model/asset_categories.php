<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class asset_categories extends \module\accounting\model\asset_categories_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__asset_categories';
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
  'number_of_depreciations' => 
  array (
    'column' => 'number_of_depreciations',
    'ntype' => 'int',
    'length' => '19',
  ),
  'ending_date' => 
  array (
    'column' => 'ending_date',
    'ntype' => 'date',
  ),
  'asset_account' => 
  array (
    'column' => 'asset_account',
    'ntype' => 'int',
    'length' => '19',
  ),
  'depreciation_account' => 
  array (
    'column' => 'depreciation_account',
    'ntype' => 'int',
    'length' => '19',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'time_method' => 
  array (
    'column' => 'time_method',
    'ntype' => 'string',
    'length' => '64',
  ),
  'degressive_factor' => 
  array (
    'column' => 'degressive_factor',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'depr_expense_account' => 
  array (
    'column' => 'depr_expense_account',
    'ntype' => 'int',
    'length' => '19',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '64',
  ),
  'journal_id' => 
  array (
    'column' => 'journal_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'note' => 
  array (
    'column' => 'note',
    'ntype' => 'string',
  ),
  'prorata_temporis' => 
  array (
    'column' => 'prorata_temporis',
    'ntype' => 'int',
    'length' => '1',
  ),
  'skip_draft_state' => 
  array (
    'column' => 'skip_draft_state',
    'ntype' => 'int',
    'length' => '1',
  ),
  'period_length' => 
  array (
    'column' => 'period_length',
    'ntype' => 'int',
    'length' => '19',
  ),
  'analytic_account' => 
  array (
    'column' => 'analytic_account',
    'ntype' => 'int',
    'length' => '19',
  ),
  'computation_method' => 
  array (
    'column' => 'computation_method',
    'ntype' => 'string',
    'length' => '64',
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
  'asset_account' => 
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
  'depreciation_account' => 
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
  'time_method' => 
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
  'depr_expense_account' => 
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
  'period_length' => 
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
  'computation_method' => 
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