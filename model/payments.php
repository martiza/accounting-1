<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class payments extends \module\accounting\model\payments_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__payments';
       public $parentClass = '\\data_model';
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $softDeleteColumn = 'deleted';
       public $sequenceColumnName = 'seq';
       public $isSequentialData = '0';
       public $isConfig = '0';
       public $overrideCallToParent = '0';
       public $fields = array (
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '45',
  ),
  'created_by' => 
  array (
    'column' => 'created_by',
    'ntype' => 'int',
    'length' => '11',
  ),
  'modified_by' => 
  array (
    'column' => 'modified_by',
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
  'deleted' => 
  array (
    'column' => 'deleted',
    'ntype' => 'int',
    'length' => '1',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'revision' => 
  array (
    'column' => 'revision',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'flags' => 
  array (
    'column' => 'flags',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'owned_by' => 
  array (
    'column' => 'owned_by',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'source_document' => 
  array (
    'column' => 'source_document',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'due_date' => 
  array (
    'column' => 'due_date',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'verification_total' => 
  array (
    'column' => 'verification_total',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'invoice_reference' => 
  array (
    'column' => 'invoice_reference',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'supplier_invoice_number' => 
  array (
    'column' => 'supplier_invoice_number',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'number' => 
  array (
    'column' => 'number',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'account_id' => 
  array (
    'column' => 'account_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'currency_id' => 
  array (
    'column' => 'currency_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'partner_id' => 
  array (
    'column' => 'partner_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'fiscal_position_id' => 
  array (
    'column' => 'fiscal_position_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'partner_bank_id' => 
  array (
    'column' => 'partner_bank_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'payment_term_id' => 
  array (
    'column' => 'payment_term_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'payment_reference' => 
  array (
    'column' => 'payment_reference',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'journal_id' => 
  array (
    'column' => 'journal_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'tax' => 
  array (
    'column' => 'tax',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'type' => 
  array (
    'column' => 'type',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'invoice_number' => 
  array (
    'column' => 'invoice_number',
    'ntype' => 'string',
    'length' => '32',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'is_reconciled' => 
  array (
    'column' => 'is_reconciled',
    'ntype' => 'int',
    'length' => '1',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'balance' => 
  array (
    'column' => 'balance',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'journal_entry' => 
  array (
    'column' => 'journal_entry',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'invoice_date' => 
  array (
    'column' => 'invoice_date',
    'ntype' => 'date',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'force_period_id' => 
  array (
    'column' => 'force_period_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'subtotal' => 
  array (
    'column' => 'subtotal',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'journal_entry_id' => 
  array (
    'column' => 'journal_entry_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'total' => 
  array (
    'column' => 'total',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'title' => 
  array (
    'column' => 'title',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'comment' => 
  array (
    'column' => 'comment',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'is_sent' => 
  array (
    'column' => 'is_sent',
    'ntype' => 'int',
    'length' => '1',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'primary_acl_group' => 
  array (
    'column' => 'primary_acl_group',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'invoice_tax_id' => 
  array (
    'column' => 'invoice_tax_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'billing_address_line_1' => 
  array (
    'column' => 'billing_address_line_1',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'billing_address_line_2' => 
  array (
    'column' => 'billing_address_line_2',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'billing_city' => 
  array (
    'column' => 'billing_city',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'billing_state' => 
  array (
    'column' => 'billing_state',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'billing_country' => 
  array (
    'column' => 'billing_country',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'billing_zip' => 
  array (
    'column' => 'billing_zip',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'shipping_address_line_1' => 
  array (
    'column' => 'shipping_address_line_1',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'shipping_address_line_2' => 
  array (
    'column' => 'shipping_address_line_2',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'shipping_city' => 
  array (
    'column' => 'shipping_city',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'shipping_state' => 
  array (
    'column' => 'shipping_state',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'shipping_country' => 
  array (
    'column' => 'shipping_country',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'shipping_zip' => 
  array (
    'column' => 'shipping_zip',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  '_acl' => 
  array (
    'column' => '_acl',
    'ntype' => 'string',
    'length' => '255',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  '_acl_tmp' => 
  array (
    'column' => '_acl_tmp',
    'ntype' => 'string',
    'length' => '255',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  '_acl_tmp_edit' => 
  array (
    'column' => '_acl_tmp_edit',
    'ntype' => 'string',
    'length' => '255',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  '_acl_tmp_delete' => 
  array (
    'column' => '_acl_tmp_delete',
    'ntype' => 'string',
    'length' => '255',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'invoice_type_id' => 
  array (
    'column' => 'invoice_type_id',
    'ntype' => 'int',
    'length' => '19',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'Customer' => 
  array (
    'column' => 'Customer',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'Paid Amount' => 
  array (
    'column' => 'Paid Amount',
    'ntype' => 'float',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'Payment method' => 
  array (
    'column' => 'Payment method',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'Date' => 
  array (
    'column' => 'Date',
    'ntype' => 'date',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'metatype_id' => 
  array (
    'column' => 'metatype_id',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'metatype' => 
  array (
    'column' => 'metatype',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'Memo' => 
  array (
    'column' => 'Memo',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
);
       public $behaviours = array (
  '\\module\\access_controls\\behaviour\\acl' => 
  array (
    'cacheClass' => '1',
    'name' => '\\module\\access_controls\\behaviour\\acl',
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
  'configurations' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\masters\\model\\currencies',
    'associationAlias' => 'configurations',
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
  'invoice_lines' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\invoice_lines',
    'associationAlias' => 'invoice_lines',
    'foreignKey' => 'invoice_reference',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'payment_terms' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\payment_terms',
    'associationAlias' => 'payment_terms',
    'foreignKey' => 'payment_term_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journals' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\journals',
    'associationAlias' => 'journals',
    'foreignKey' => 'journal_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'periods' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\periods',
    'associationAlias' => 'periods',
    'foreignKey' => 'force_period_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
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
  'billing_countries' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\masters\\model\\countries',
    'associationAlias' => 'billing_countries',
    'foreignKey' => 'billing_country',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'shipping countries' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\masters\\model\\countries',
    'associationAlias' => 'shipping countries',
    'foreignKey' => 'shipping_country',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'invoice_taxes' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\invoice_taxes',
    'associationAlias' => 'invoice_taxes',
    'foreignKey' => 'invoice_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'invoice_types' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\invoice_types',
    'associationAlias' => 'invoice_types',
    'foreignKey' => 'invoice_type_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
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
);
  }