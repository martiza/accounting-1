<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class product_accounts extends \module\accounting\model\product_accounts_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__product_accounts';
       public $parentClass = '\\tushar\\model';
       public $displayField = 'product_id';
       public $primaryKey = 'id';
       public $softDeleteColumn = 'deleted';
       public $sequenceColumnName = 'seq';
       public $isSequentialData = '0';
       public $isConfig = '0';
       public $overrideCallToParent = '0';
       public $fields = array (
  'product_id' => 
  array (
    'column' => 'product_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'income_account_id' => 
  array (
    'column' => 'income_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'expense_account_id' => 
  array (
    'column' => 'expense_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'price_difference_account_id' => 
  array (
    'column' => 'price_difference_account_id',
    'ntype' => 'int',
    'length' => '19',
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
  'income_account' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'income_account',
    'foreignKey' => 'income_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'expense_account' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'expense_account',
    'foreignKey' => 'expense_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'price_difference_account' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'price_difference_account',
    'foreignKey' => 'price_difference_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
);
  }