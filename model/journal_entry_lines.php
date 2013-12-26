<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class journal_entry_lines extends \module\accounting\model\journal_entry_lines_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__journal_entry_lines';
       public $parentClass = '\\tushar\\model';
       public $displayField = 'memo';
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
  'statement_id' => 
  array (
    'column' => 'statement_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'currency_id' => 
  array (
    'column' => 'currency_id',
    'ntype' => 'int',
    'length' => '11',
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
    'length' => '11',
  ),
  'partial_reconcile_id' => 
  array (
    'column' => 'partial_reconcile_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'analytic_account_id' => 
  array (
    'column' => 'analytic_account_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'credit' => 
  array (
    'column' => 'credit',
    'ntype' => 'float',
    'length' => '10,2',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'centralisation' => 
  array (
    'column' => 'centralisation',
    'ntype' => 'string',
    'length' => '8',
  ),
  'tax_account' => 
  array (
    'column' => 'tax_account',
    'ntype' => 'int',
    'length' => '11',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '50',
  ),
  'debit' => 
  array (
    'column' => 'debit',
    'ntype' => 'float',
    'length' => '10,2',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'no_follow_up' => 
  array (
    'column' => 'no_follow_up',
    'ntype' => 'int',
    'length' => '4',
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
    'length' => '11',
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
  'memo' => 
  array (
    'column' => 'memo',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'reconcile_id' => 
  array (
    'column' => 'reconcile_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'tax_amount' => 
  array (
    'column' => 'tax_amount',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'product_id' => 
  array (
    'column' => 'product_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'account_tax_id' => 
  array (
    'column' => 'account_tax_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'product_uom_id' => 
  array (
    'column' => 'product_uom_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'amount_currency' => 
  array (
    'column' => 'amount_currency',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'quantity' => 
  array (
    'column' => 'quantity',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'asset_id' => 
  array (
    'column' => 'asset_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'latest_follow_up_date' => 
  array (
    'column' => 'latest_follow_up_date',
    'ntype' => 'date',
  ),
  'follow_up_level' => 
  array (
    'column' => 'follow_up_level',
    'ntype' => 'int',
    'length' => '11',
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
  'owned_by' => 
  array (
    'column' => 'owned_by',
    'ntype' => 'int',
    'length' => '19',
  ),
  'status_id' => 
  array (
    'column' => 'status_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'journal_entry_id' => 
  array (
    'column' => 'journal_entry_id',
    'ntype' => 'int',
    'length' => '11',
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
  '_acl' => 
  array (
    'column' => '_acl',
    'ntype' => 'string',
    'length' => '255',
  ),
  '_acl_edit' => 
  array (
    'column' => '_acl_edit',
    'ntype' => 'string',
    'length' => '255',
  ),
  '_acl_delete' => 
  array (
    'column' => '_acl_delete',
    'ntype' => 'string',
    'length' => '255',
  ),
  '_acl_tmp' => 
  array (
    'column' => '_acl_tmp',
    'ntype' => 'string',
    'length' => '255',
  ),
  '_acl_tmp_edit' => 
  array (
    'column' => '_acl_tmp_edit',
    'ntype' => 'string',
    'length' => '255',
  ),
  '_acl_tmp_delete' => 
  array (
    'column' => '_acl_tmp_delete',
    'ntype' => 'string',
    'length' => '255',
  ),
  'primary_acl_group' => 
  array (
    'column' => 'primary_acl_group',
    'ntype' => 'int',
    'length' => '11',
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
  'bank_statements' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\bank_statements',
    'associationAlias' => 'bank_statements',
    'foreignKey' => 'statement_id',
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
  'journal_entry_line_status' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\journal_entry_line_status',
    'associationAlias' => 'journal_entry_line_status',
    'foreignKey' => 'status_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journal_entries' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\journal_entries',
    'associationAlias' => 'journal_entries',
    'foreignKey' => 'journal_entry_id',
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
    'cacheClass' => '0',
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
  'effective_date' => 
  array (
    0 => 'required',
    1 => 
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
  'journal_entry_id' => 
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
  'memo' => 
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
  'account_id' => 
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