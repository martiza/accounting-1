<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class analytic_accounts extends \module\accounting\model\analytic_accounts_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__analytic_accounts';
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
  'reference' => 
  array (
    'column' => 'reference',
    'ntype' => 'string',
    'length' => '64',
  ),
  'description' => 
  array (
    'column' => 'description',
    'ntype' => 'string',
  ),
  'prepaid_service_units' => 
  array (
    'column' => 'prepaid_service_units',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'currency_id' => 
  array (
    'column' => 'currency_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'date_end' => 
  array (
    'column' => 'date_end',
    'ntype' => 'date',
  ),
  'customer_id' => 
  array (
    'column' => 'customer_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'project_manager_id' => 
  array (
    'column' => 'project_manager_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '64',
  ),
  'parent_id' => 
  array (
    'column' => 'parent_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'start_date' => 
  array (
    'column' => 'start_date',
    'ntype' => 'date',
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
    'length' => '64',
  ),
  'account_manager_id' => 
  array (
    'column' => 'account_manager_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'type_of_account_id' => 
  array (
    'column' => 'type_of_account_id',
    'ntype' => 'string',
    'length' => '64',
  ),
  'template_of_contract_id' => 
  array (
    'column' => 'template_of_contract_id',
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
  'parent_analytic_account' => 
  array (
    'className' => '\\module\\accounting\\model\\analytic_accounts',
    'assocType' => 'belongsTo',
    'foreignKey' => 'parent_id',
    'associationAlias' => 'parent_analytic_account',
  ),
  'companies' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\crm_base\\model\\companies',
    'associationAlias' => 'companies',
    'foreignKey' => 'company_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'currencies' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\masters\\model\\currencies',
    'associationAlias' => 'currencies',
    'foreignKey' => 'currency_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\crm\\model\\accounts',
    'associationAlias' => 'accounts',
    'foreignKey' => 'customer_id',
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
  'type_of_account_id' => 
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