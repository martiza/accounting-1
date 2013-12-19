<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class bank_statements extends \module\accounting\model\bank_statements_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__bank_statements';
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
  'starting_balance' => 
  array (
    'column' => 'starting_balance',
    'ntype' => 'int',
    'length' => '19',
  ),
  'journal_id' => 
  array (
    'column' => 'journal_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'period_id' => 
  array (
    'column' => 'period_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'total_transactions' => 
  array (
    'column' => 'total_transactions',
    'ntype' => 'int',
    'length' => '19',
  ),
  'date' => 
  array (
    'column' => 'date',
    'ntype' => 'date',
  ),
  'responsible' => 
  array (
    'column' => 'responsible',
    'ntype' => 'int',
    'length' => '19',
  ),
  'reference' => 
  array (
    'column' => 'reference',
    'ntype' => 'string',
    'length' => '64',
  ),
  'closed_on' => 
  array (
    'column' => 'closed_on',
    'ntype' => 'datetime',
  ),
  'computed_balance' => 
  array (
    'column' => 'computed_balance',
    'ntype' => 'int',
    'length' => '19',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '64',
  ),
  'ending_balance' => 
  array (
    'column' => 'ending_balance',
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
  'journals' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\journals',
    'associationAlias' => 'journals',
    'foreignKey' => 'journal_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'periods' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\periods',
    'associationAlias' => 'periods',
    'foreignKey' => 'period_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'companies' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\crm_base\\model\\companies',
    'associationAlias' => 'companies',
    'foreignKey' => 'company_id',
    'show_link' => '1',
    'isSubModel' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
  ),
  'bank_statement_lines' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\bank_statement_lines',
    'associationAlias' => 'bank_statement_lines',
    'foreignKey' => 'statement_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
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
  'date' => 
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
  'reference' => 
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
  'status' => 
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