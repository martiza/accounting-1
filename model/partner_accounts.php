<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class partner_accounts extends \module\accounting\model\partner_accounts_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__partner_accounts';
       public $parentClass = '\\tushar\\model';
       public $displayField = 'partner_id';
       public $primaryKey = 'id';
       public $softDeleteColumn = 'deleted';
       public $sequenceColumnName = 'seq';
       public $isSequentialData = '0';
       public $isConfig = '0';
       public $overrideCallToParent = '0';
       public $fields = array (
  'partner_id' => 
  array (
    'column' => 'partner_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'fiscal_position_id' => 
  array (
    'column' => 'fiscal_position_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tin' => 
  array (
    'column' => 'tin',
    'ntype' => 'string',
    'length' => '20',
  ),
  'account_receivable_id' => 
  array (
    'column' => 'account_receivable_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'account_payable_id' => 
  array (
    'column' => 'account_payable_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'customer_payment_term_id' => 
  array (
    'column' => 'customer_payment_term_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'supplier_payment_term_id' => 
  array (
    'column' => 'supplier_payment_term_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'total_receivable' => 
  array (
    'column' => 'total_receivable',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'total_payable' => 
  array (
    'column' => 'total_payable',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'credit_limit' => 
  array (
    'column' => 'credit_limit',
    'ntype' => 'float',
    'length' => '10,2',
  ),
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
  'fiscal_positions' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\fiscal_positions',
    'associationAlias' => 'fiscal_positions',
    'foreignKey' => 'fiscal_position_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'account_receivable' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'account_receivable',
    'foreignKey' => 'account_receivable_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'account_payable' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'account_payable',
    'foreignKey' => 'account_payable_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'customer_payment_terms' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\payment_terms',
    'associationAlias' => 'customer_payment_terms',
    'foreignKey' => 'customer_payment_term_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'supplier_payment_terms' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\payment_terms',
    'associationAlias' => 'supplier_payment_terms',
    'foreignKey' => 'supplier_payment_term_id',
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
    'foreignKey' => 'partner_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
);
  }