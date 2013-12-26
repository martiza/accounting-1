<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class invoice_taxes extends \module\accounting\model\invoice_taxes_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__invoice_taxes';
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
  'tax_code_amount' => 
  array (
    'column' => 'tax_code_amount',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_account_id' => 
  array (
    'column' => 'tax_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'sequence' => 
  array (
    'column' => 'sequence',
    'ntype' => 'int',
    'length' => '19',
  ),
  'invoice_line_id' => 
  array (
    'column' => 'invoice_line_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'manual' => 
  array (
    'column' => 'manual',
    'ntype' => 'int',
    'length' => '1',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'base_code_amount' => 
  array (
    'column' => 'base_code_amount',
    'ntype' => 'int',
    'length' => '19',
  ),
  'amount' => 
  array (
    'column' => 'amount',
    'ntype' => 'int',
    'length' => '19',
  ),
  'base' => 
  array (
    'column' => 'base',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_code_id' => 
  array (
    'column' => 'tax_code_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'analytic_account' => 
  array (
    'column' => 'analytic_account',
    'ntype' => 'int',
    'length' => '19',
  ),
  'base_code_id' => 
  array (
    'column' => 'base_code_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '64',
  ),
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'invoice_id' => 
  array (
    'column' => 'invoice_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
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
  'taxes' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\taxes',
    'associationAlias' => 'taxes',
    'foreignKey' => 'tax_code_id',
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
  'tax_account_id' => 
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