<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class periods extends \module\accounting\model\periods_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__periods';
       public $fields = array (
  'created_by' => 
  array (
    'column' => 'created_by',
    'ntype' => 'int',
    'length' => '11',
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
    'length' => '11',
  ),
  'end_of_period' => 
  array (
    'column' => 'end_of_period',
    'ntype' => 'date',
  ),
  'business_key' => 
  array (
    'column' => 'business_key',
    'ntype' => 'string',
    'length' => '12',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '64',
  ),
  'start_of_period' => 
  array (
    'column' => 'start_of_period',
    'ntype' => 'date',
  ),
  'fiscal_year_id' => 
  array (
    'column' => 'fiscal_year_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '50',
  ),
  'special' => 
  array (
    'column' => 'special',
    'ntype' => 'int',
    'length' => '1',
  ),
  'deleted' => 
  array (
    'column' => 'deleted',
    'ntype' => 'int',
    'length' => '4',
  ),
  'revision' => 
  array (
    'column' => 'revision',
    'ntype' => 'int',
    'length' => '11',
  ),
  'flags' => 
  array (
    'column' => 'flags',
    'ntype' => 'int',
    'length' => '11',
  ),
  'owned_by' => 
  array (
    'column' => 'owned_by',
    'ntype' => 'int',
    'length' => '19',
  ),
  'id' => 
  array (
    'column' => 'id',
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
  'fiscal_years' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\fiscal_years',
    'associationAlias' => 'fiscal_years',
    'foreignKey' => 'fiscal_year_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
);
       public $filters = array (
  'end_of_period' => 
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
  'start_of_period' => 
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
  'fiscal_year_id' => 
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