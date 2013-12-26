<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class taxes extends \module\accounting\model\taxes_domain_logic
  {
       public $displayField = 'tax_name';
       public $primaryKey = 'id';
       public $parentClass = '\\tushar\\model';
       public $source = 'default';
       public $table = 'accounting__taxes';
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
  'refund_base_code' => 
  array (
    'column' => 'refund_base_code',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'domain' => 
  array (
    'column' => 'domain',
    'ntype' => 'string',
    'length' => '64',
  ),
  'tax_code' => 
  array (
    'column' => 'tax_code',
    'ntype' => 'string',
    'length' => '64',
  ),
  'refund_tax_code_id' => 
  array (
    'column' => 'refund_tax_code_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'sequence' => 
  array (
    'column' => 'sequence',
    'ntype' => 'int',
    'length' => '19',
  ),
  'refund_tax_account_id' => 
  array (
    'column' => 'refund_tax_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'ref_base_sign' => 
  array (
    'column' => 'ref_base_sign',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'tax_application' => 
  array (
    'column' => 'tax_application',
    'ntype' => 'string',
    'length' => '64',
  ),
  'account_base_code' => 
  array (
    'column' => 'account_base_code',
    'ntype' => 'int',
    'length' => '19',
  ),
  'base_code_sign' => 
  array (
    'column' => 'base_code_sign',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'tax_on_children' => 
  array (
    'column' => 'tax_on_children',
    'ntype' => 'int',
    'length' => '1',
  ),
  'included_in_base_amount' => 
  array (
    'column' => 'included_in_base_amount',
    'ntype' => 'int',
    'length' => '1',
  ),
  'invoice_tax_analytic_account_id' => 
  array (
    'column' => 'invoice_tax_analytic_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'refund_tax_analytic_account_id' => 
  array (
    'column' => 'refund_tax_analytic_account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'active' => 
  array (
    'column' => 'active',
    'ntype' => 'int',
    'length' => '1',
  ),
  'ref_tax_sign' => 
  array (
    'column' => 'ref_tax_sign',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'applicability' => 
  array (
    'column' => 'applicability',
    'ntype' => 'string',
    'length' => '64',
  ),
  'invoice_tax_account' => 
  array (
    'column' => 'invoice_tax_account',
    'ntype' => 'int',
    'length' => '19',
  ),
  'company_id' => 
  array (
    'column' => 'company_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_name' => 
  array (
    'column' => 'tax_name',
    'ntype' => 'string',
    'length' => '64',
  ),
  'account_tax_code' => 
  array (
    'column' => 'account_tax_code',
    'ntype' => 'int',
    'length' => '19',
  ),
  'parent_id' => 
  array (
    'column' => 'parent_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'amount' => 
  array (
    'column' => 'amount',
    'ntype' => 'float',
    'length' => '10,0',
  ),
  'python_compute' => 
  array (
    'column' => 'python_compute',
    'ntype' => 'string',
  ),
  'tax_code_sign' => 
  array (
    'column' => 'tax_code_sign',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'python_compute_inv' => 
  array (
    'column' => 'python_compute_inv',
    'ntype' => 'string',
  ),
  'python_applicable' => 
  array (
    'column' => 'python_applicable',
    'ntype' => 'string',
  ),
  'tax_type' => 
  array (
    'column' => 'tax_type',
    'ntype' => 'string',
    'length' => '64',
  ),
  'tax_included_in_price' => 
  array (
    'column' => 'tax_included_in_price',
    'ntype' => 'int',
    'length' => '1',
  ),
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'lft' => 
  array (
    'column' => 'lft',
    'ntype' => 'int',
    'length' => '19',
  ),
  'rgt' => 
  array (
    'column' => 'rgt',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax_application_id' => 
  array (
    'column' => 'tax_application_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'tax_type_id' => 
  array (
    'column' => 'tax_type_id',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
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
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '255',
  ),
  'type' => 
  array (
    'column' => 'type',
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
  'parent_taxe' => 
  array (
    'className' => '\\module\\accounting\\model\\taxes',
    'assocType' => 'belongsTo',
    'foreignKey' => 'parent_id',
    'associationAlias' => 'parent_taxe',
  ),
  'tax_application' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\tax_application',
    'associationAlias' => 'tax_application',
    'foreignKey' => 'tax_application_id',
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
  'tax_types' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\tax_types',
    'associationAlias' => 'tax_types',
    'foreignKey' => 'tax_type_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'account_tax_code' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\tax_code',
    'associationAlias' => 'account_tax_code',
    'foreignKey' => 'account_tax_code',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'invoice_tax_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'invoice_tax_accounts',
    'foreignKey' => 'invoice_tax_account',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'refund_tax_accounts' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\accounts',
    'associationAlias' => 'refund_tax_accounts',
    'foreignKey' => 'refund_tax_account_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'refund_tax_code' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\tax_code',
    'associationAlias' => 'refund_tax_code',
    'foreignKey' => 'refund_tax_code_id',
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
  'sequence' => 
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
  'tax_application' => 
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
  'applicability' => 
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
  'company_id' => 
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
  'tax_name' => 
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
  'amount' => 
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
  'tax_type' => 
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