<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class invoice_lines extends \module\accounting\model\invoice_lines_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__invoice_lines';
       public $parentClass = '\\tushar\\model';
       public $displayField = 'description';
       public $primaryKey = 'id';
       public $softDeleteColumn = 'deleted';
       public $sequenceColumnName = 'seq';
       public $isSequentialData = '0';
       public $isConfig = '0';
       public $overrideCallToParent = '0';
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
  'source_document' => 
  array (
    'column' => 'source_document',
    'ntype' => 'string',
    'length' => '256',
  ),
  'unit_of_measure' => 
  array (
    'column' => 'unit_of_measure',
    'ntype' => 'int',
    'length' => '19',
  ),
  'account_id' => 
  array (
    'column' => 'account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'description' => 
  array (
    'column' => 'description',
    'ntype' => 'string',
    'length' => '255',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'sequence' => 
  array (
    'column' => 'sequence',
    'ntype' => 'int',
    'length' => '19',
  ),
  'invoice_id' => 
  array (
    'column' => 'invoice_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'unit_price' => 
  array (
    'column' => 'unit_price',
    'ntype' => 'float',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'amount' => 
  array (
    'column' => 'amount',
    'ntype' => 'float',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'analytic_account_id' => 
  array (
    'column' => 'analytic_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'quantity' => 
  array (
    'column' => 'quantity',
    'ntype' => 'int',
    'length' => '19',
  ),
  'partner_id' => 
  array (
    'column' => 'partner_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'product_id' => 
  array (
    'column' => 'product_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'asset_category_id' => 
  array (
    'column' => 'asset_category_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'invoice_reference' => 
  array (
    'column' => 'invoice_reference',
    'ntype' => 'int',
    'length' => '19',
  ),
  'discount' => 
  array (
    'column' => 'discount',
    'ntype' => 'float',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
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
  'accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'accounts',
    'foreignKey' => 'account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'analytic_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\analytic_accounts',
    'associationAlias' => 'analytic_accounts',
    'foreignKey' => 'analytic_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'partners' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\crm\\model\\accounts',
    'associationAlias' => 'partners',
    'foreignKey' => 'partner_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'products' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\crm\\model\\products',
    'associationAlias' => 'products',
    'foreignKey' => 'product_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'config_unit_of_measures' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\masters\\model\\config_unit_of_measures',
    'associationAlias' => 'config_unit_of_measures',
    'foreignKey' => 'unit_of_measure',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'invoice_line_taxes' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\invoice_line_taxes',
    'associationAlias' => 'invoice_line_taxes',
    'foreignKey' => 'invoice_line_id',
    'show_link' => '1',
    'isSubModel' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
  ),
  'owned_by_user' => 
  array (
    'className' => '\\module\\access_controls\\model\\users',
    'assocType' => 'belongsTo',
    'foreignKey' => 'owned_by',
    'associationAlias' => 'owned_by_user',
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
    'ownAcl' => '0',
    'lazyAclCheck' => '1',
    'recursion' => '1',
    'userClass' => '\\module\\access_controls\\model\\users',
    'groupClass' => '\\module\\access_controls\\model\\groups',
    'groupUserClass' => '\\module\\access_controls\\model\\groups_users',
    'containGroupsClass' => '\\module\\access_controls\\model\\group_contain_groups',
  ),
);
       public $filters = array (
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
  'unit_price' => 
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
  'quantity' => 
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
  'product_id' => 
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
  'description' => 
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