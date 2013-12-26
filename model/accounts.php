<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class accounts extends \module\accounting\model\accounts_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__accounts';
       public $parentClass = '\\design_model';
       public $displayField = 'full_name';
       public $primaryKey = 'id';
       public $softDeleteColumn = 'deleted';
       public $sequenceColumnName = 'seq';
       public $description = '<span style="font-family: sans-serif; line-height: 19.1875px; background-color: rgb(255, 255, 255);">Accounting model deals with the production of financial records about an <span class="GINGER_SOFATWARE_correct" ginger_sofatware_uiphraseguid="01b76f3f-fc60-49ba-bcdd-30ed5ad38a7d" grcontextid="organisation:0" ginger_sofatware_markguid="2aba871f-7126-4d8e-a079-3dfc16702db8">organisation</span></span><span style="font-family: sans-serif; line-height: 19.1875px; background-color: rgb(255, 255, 255);">&nbsp;and produces financial statements</span><span style="font-family: sans-serif; line-height: 19.1875px; background-color: rgb(255, 255, 255);">&nbsp;that show in money terms the economic resources&nbsp;</span><span style="font-family: sans-serif; line-height: 19.1875px; background-color: rgb(255, 255, 255);">&nbsp;under the control of management.</span>';
       public $drilldownField = 'name';
       public $isSequentialData = '0';
       public $isConfig = '0';
       public $overrideCallToParent = '0';
       public $fields = array (
  'parent_id' => 
  array (
    'column' => 'parent_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'lft' => 
  array (
    'column' => 'lft',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'rgt' => 
  array (
    'column' => 'rgt',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'business_key' => 
  array (
    'column' => 'business_key',
    'ntype' => 'string',
    'length' => '255',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'reconcile' => 
  array (
    'column' => 'reconcile',
    'ntype' => 'int',
    'length' => '1',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'secondary_currency_id' => 
  array (
    'column' => 'secondary_currency_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'account_type_id' => 
  array (
    'column' => 'account_type_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'is_active' => 
  array (
    'column' => 'is_active',
    'ntype' => 'int',
    'length' => '1',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'description' => 
  array (
    'column' => 'description',
    'ntype' => 'string',
    'length' => '1000',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'outgoing_currencies_rate' => 
  array (
    'column' => 'outgoing_currencies_rate',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'internal_type_id' => 
  array (
    'column' => 'internal_type_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
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
  'level' => 
  array (
    'column' => 'level',
    'ntype' => 'int',
    'length' => '11',
  ),
  'shortcut' => 
  array (
    'column' => 'shortcut',
    'ntype' => 'string',
    'length' => '12',
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
  'primary_acl_group' => 
  array (
    'column' => 'primary_acl_group',
    'ntype' => 'int',
    'length' => '11',
  ),
  'full_name' => 
  array (
    'column' => 'full_name',
    'ntype' => 'string',
    'length' => '200',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'balance' => 
  array (
    'column' => 'balance',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'metatype' => 
  array (
    'column' => 'metatype',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'metatype_id' => 
  array (
    'column' => 'metatype_id',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'customer_reference' => 
  array (
    'column' => 'customer_reference',
    'ntype' => 'string',
    'length' => '255',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
);
       public $associations = array (
  'parent_account' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'parent_account',
    'foreignKey' => 'parent_id',
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
    'foreignKey' => 'secondary_currency_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'account_types' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\account_types',
    'associationAlias' => 'account_types',
    'foreignKey' => 'account_type_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'internal_types' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\internal_types',
    'associationAlias' => 'internal_types',
    'foreignKey' => 'internal_type_id',
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
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'outgoing_currencies_rates' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\outgoing_currencies_rates',
    'associationAlias' => 'outgoing_currencies_rates',
    'foreignKey' => 'outgoing_currencies_rate',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
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
  'journal_entry_lines' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\journal_entry_lines',
    'associationAlias' => 'journal_entry_lines',
    'foreignKey' => 'account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
);
       public $behaviours = array (
  '\\module\\brules\\behaviour\\business_rules' => 
  array (
    'name' => '\\module\\brules\\behaviour\\business_rules',
  ),
  '\\module\\access_controls\\behaviour\\acl' => 
  array (
    'name' => '\\module\\access_controls\\behaviour\\acl',
    'readAccess' => '4',
    'editAccess' => '4',
    'deleteAccess' => '4',
    'cacheClass' => '1',
    'ownAcl' => '1',
    'lazyAclCheck' => '1',
  ),
  '\\module\\core\\behaviour\\revision_log' => 
  array (
    'name' => '\\module\\core\\behaviour\\revision_log',
  ),
);
       public $filters = array (
  'name' => 
  array (
    0 => 
    array (
      'rule' => '1024',
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
  'business_key' => 
  array (
    0 => 
    array (
      'rule' => '1024',
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
  'account_type_id' => 
  array (
    0 => 
    array (
      'rule' => '1024',
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
  'internal_type_id' => 
  array (
    0 => 
    array (
      'rule' => '1024',
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
      'rule' => '1024',
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
  'balance' => 
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