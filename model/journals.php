<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class journals extends \module\accounting\model\journals_domain_logic
  {
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__journals';
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
  'default_debit_account_id' => 
  array (
    'column' => 'default_debit_account_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'code' => 
  array (
    'column' => 'code',
    'ntype' => 'string',
    'length' => '5',
  ),
  'default_credit_account_id' => 
  array (
    'column' => 'default_credit_account_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'loss_account_id' => 
  array (
    'column' => 'loss_account_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'currency' => 
  array (
    'column' => 'currency',
    'ntype' => 'int',
    'length' => '11',
  ),
  'internal_transfers_account_id' => 
  array (
    'column' => 'internal_transfers_account_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'check_date_in_period' => 
  array (
    'column' => 'check_date_in_period',
    'ntype' => 'int',
    'length' => '1',
  ),
  'sequence_id' => 
  array (
    'column' => 'sequence_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'allow_cancelling_entries' => 
  array (
    'column' => 'allow_cancelling_entries',
    'ntype' => 'int',
    'length' => '1',
  ),
  'user_id' => 
  array (
    'column' => 'user_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '64',
  ),
  'cash_control' => 
  array (
    'column' => 'cash_control',
    'ntype' => 'int',
    'length' => '1',
  ),
  'centralized_counterpart' => 
  array (
    'column' => 'centralized_counterpart',
    'ntype' => 'int',
    'length' => '1',
  ),
  'group_invoice_lines' => 
  array (
    'column' => 'group_invoice_lines',
    'ntype' => 'int',
    'length' => '1',
  ),
  'opening_with_last_closing_balance' => 
  array (
    'column' => 'opening_with_last_closing_balance',
    'ntype' => 'int',
    'length' => '1',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'analytic_journal_id' => 
  array (
    'column' => 'analytic_journal_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'profit_account_id' => 
  array (
    'column' => 'profit_account_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'entry_posted' => 
  array (
    'column' => 'entry_posted',
    'ntype' => 'int',
    'length' => '1',
  ),
  'use_preprint_check' => 
  array (
    'column' => 'use_preprint_check',
    'ntype' => 'int',
    'length' => '1',
  ),
  'allow_check_writing' => 
  array (
    'column' => 'allow_check_writing',
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
  'type_id' => 
  array (
    'column' => 'type_id',
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
  'debit_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'debit_accounts',
    'foreignKey' => 'default_debit_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'credit_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'credit_accounts',
    'foreignKey' => 'default_credit_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'transfer_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'transfer_accounts',
    'foreignKey' => 'internal_transfers_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'loss_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'loss_accounts',
    'foreignKey' => 'loss_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'profit_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'profit_accounts',
    'foreignKey' => 'profit_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'analytic_journals' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\analytic_journals',
    'associationAlias' => 'analytic_journals',
    'foreignKey' => 'analytic_journal_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journal_types' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\journal_types',
    'associationAlias' => 'journal_types',
    'foreignKey' => 'type_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'users' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\access_controls\\model\\users',
    'associationAlias' => 'users',
    'foreignKey' => 'user_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journal_allowed_account_types' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\journal_allowed_account_types',
    'associationAlias' => 'journal_allowed_account_types',
    'foreignKey' => 'journal_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journal_allowed_accounts' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\journal_allowed_accounts',
    'associationAlias' => 'journal_allowed_accounts',
    'foreignKey' => 'journal_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journal_entries' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\journal_entries',
    'associationAlias' => 'journal_entries',
    'foreignKey' => 'id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
);
       public $filters = array (
  'code' => 
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
  'type_id' => 
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
);
  }