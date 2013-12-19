<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class invoices extends \module\accounting\model\invoices_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__invoices';
       public $parentClass = '\\data_model';
       public $displayField = 'number';
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
    'length' => '64',
  ),
  'due_date' => 
  array (
    'column' => 'due_date',
    'ntype' => 'date',
  ),
  'verification_total' => 
  array (
    'column' => 'verification_total',
    'ntype' => 'int',
    'length' => '19',
  ),
  'invoice_reference' => 
  array (
    'column' => 'invoice_reference',
    'ntype' => 'string',
    'length' => '64',
  ),
  'supplier_invoice_number' => 
  array (
    'column' => 'supplier_invoice_number',
    'ntype' => 'string',
    'length' => '64',
  ),
  'number' => 
  array (
    'column' => 'number',
    'ntype' => 'string',
    'length' => '64',
  ),
  'account_id' => 
  array (
    'column' => 'account_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'currency_id' => 
  array (
    'column' => 'currency_id',
    'ntype' => 'int',
    'length' => '19',
  ),
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
  'owned_by' => 
  array (
    'column' => 'owned_by',
    'ntype' => 'int',
    'length' => '19',
  ),
  'partner_bank_id' => 
  array (
    'column' => 'partner_bank_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'payment_term_id' => 
  array (
    'column' => 'payment_term_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'payment_reference' => 
  array (
    'column' => 'payment_reference',
    'ntype' => 'string',
    'length' => '64',
  ),
  'journal_id' => 
  array (
    'column' => 'journal_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'tax' => 
  array (
    'column' => 'tax',
    'ntype' => 'int',
    'length' => '19',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '64',
  ),
  'type' => 
  array (
    'column' => 'type',
    'ntype' => 'string',
    'length' => '64',
  ),
  'invoice_number' => 
  array (
    'column' => 'invoice_number',
    'ntype' => 'string',
    'length' => '32',
  ),
  'is_reconciled' => 
  array (
    'column' => 'is_reconciled',
    'ntype' => 'int',
    'length' => '1',
  ),
  'balance' => 
  array (
    'column' => 'balance',
    'ntype' => 'int',
    'length' => '19',
  ),
  'journal_entry' => 
  array (
    'column' => 'journal_entry',
    'ntype' => 'string',
    'length' => '64',
  ),
  'invoice_date' => 
  array (
    'column' => 'invoice_date',
    'ntype' => 'date',
  ),
  'force_period_id' => 
  array (
    'column' => 'force_period_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'subtotal' => 
  array (
    'column' => 'subtotal',
    'ntype' => 'int',
    'length' => '19',
  ),
  'journal_entry_id' => 
  array (
    'column' => 'journal_entry_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'total' => 
  array (
    'column' => 'total',
    'ntype' => 'int',
    'length' => '19',
  ),
  'title' => 
  array (
    'column' => 'title',
    'ntype' => 'string',
    'length' => '64',
  ),
  'comment' => 
  array (
    'column' => 'comment',
    'ntype' => 'string',
  ),
  'is_sent' => 
  array (
    'column' => 'is_sent',
    'ntype' => 'int',
    'length' => '1',
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
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
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
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'billing_address_line_2' => 
  array (
    'column' => 'billing_address_line_2',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'billing_city' => 
  array (
    'column' => 'billing_city',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'billing_state' => 
  array (
    'column' => 'billing_state',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'billing_country' => 
  array (
    'column' => 'billing_country',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'billing_zip' => 
  array (
    'column' => 'billing_zip',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'shipping_address_line_1' => 
  array (
    'column' => 'shipping_address_line_1',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'shipping_address_line_2' => 
  array (
    'column' => 'shipping_address_line_2',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'shipping_city' => 
  array (
    'column' => 'shipping_city',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'shipping_state' => 
  array (
    'column' => 'shipping_state',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'shipping_country' => 
  array (
    'column' => 'shipping_country',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'shipping_zip' => 
  array (
    'column' => 'shipping_zip',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
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
  'invoice_type_id' => 
  array (
    'column' => 'invoice_type_id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'metatype_id' => 
  array (
    'column' => 'metatype_id',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'metatype' => 
  array (
    'column' => 'metatype',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'length' => '100',
  ),
  'pricelist_id' => 
  array (
    'column' => 'pricelist_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'opportunity_id' => 
  array (
    'column' => 'opportunity_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'sales_shop_id' => 
  array (
    'column' => 'sales_shop_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'sales_team_id' => 
  array (
    'column' => 'sales_team_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'shipping_method_id' => 
  array (
    'column' => 'shipping_method_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'payment_terms_id' => 
  array (
    'column' => 'payment_terms_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'payment_method' => 
  array (
    'column' => 'payment_method',
    'ntype' => 'string',
    'length' => '255',
  ),
  'frieght_terms_id' => 
  array (
    'column' => 'frieght_terms_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'contact_person_id' => 
  array (
    'column' => 'contact_person_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'effective_from' => 
  array (
    'column' => 'effective_from',
    'ntype' => 'datetime',
  ),
  'effective_to' => 
  array (
    'column' => 'effective_to',
    'ntype' => 'datetime',
  ),
  'incoterm_id' => 
  array (
    'column' => 'incoterm_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'product_category_id' => 
  array (
    'column' => 'product_category_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'shipping_policy' => 
  array (
    'column' => 'shipping_policy',
    'ntype' => 'string',
    'length' => '255',
  ),
  'total_amount' => 
  array (
    'column' => 'total_amount',
    'ntype' => 'float',
    'length' => '10,0',
  ),
  'discount_percent' => 
  array (
    'column' => 'discount_percent',
    'ntype' => 'float',
    'length' => '10,0',
  ),
  'discount_amount' => 
  array (
    'column' => 'discount_amount',
    'ntype' => 'float',
    'length' => '10,0',
  ),
  'total_before_discount' => 
  array (
    'column' => 'total_before_discount',
    'ntype' => 'float',
    'length' => '10,0',
  ),
  'total_after_discount' => 
  array (
    'column' => 'total_after_discount',
    'ntype' => 'float',
    'length' => '10,0',
  ),
  'tax_id' => 
  array (
    'column' => 'tax_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'frieght_amount' => 
  array (
    'column' => 'frieght_amount',
    'ntype' => 'string',
    'length' => '45',
  ),
  'primary_address_line_1' => 
  array (
    'column' => 'primary_address_line_1',
    'ntype' => 'string',
    'length' => '255',
  ),
  'primary_address_line_2' => 
  array (
    'column' => 'primary_address_line_2',
    'ntype' => 'string',
    'length' => '255',
  ),
  'primary_city' => 
  array (
    'column' => 'primary_city',
    'ntype' => 'string',
    'length' => '255',
  ),
  'primary_state' => 
  array (
    'column' => 'primary_state',
    'ntype' => 'string',
    'length' => '255',
  ),
  'primary_country' => 
  array (
    'column' => 'primary_country',
    'ntype' => 'int',
    'length' => '11',
  ),
  'primary_zip' => 
  array (
    'column' => 'primary_zip',
    'ntype' => 'string',
    'length' => '255',
  ),
  'attachment_id' => 
  array (
    'column' => 'attachment_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'addresstype' => 
  array (
    'column' => 'addresstype',
    'ntype' => 'string',
    'length' => '45',
  ),
  'allow_partial_delivery' => 
  array (
    'column' => 'allow_partial_delivery',
    'ntype' => 'int',
    'length' => '1',
  ),
  'approved' => 
  array (
    'column' => 'approved',
    'ntype' => 'int',
    'length' => '1',
  ),
  'request_delivery' => 
  array (
    'column' => 'request_delivery',
    'ntype' => 'datetime',
  ),
  'cancellation_date' => 
  array (
    'column' => 'cancellation_date',
    'ntype' => 'datetime',
  ),
  'sale_order_id' => 
  array (
    'column' => 'sale_order_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'address_type' => 
  array (
    'column' => 'address_type',
    'ntype' => 'int',
    'length' => '11',
  ),
  'description' => 
  array (
    'column' => 'description',
    'ntype' => 'string',
    'length' => '255',
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
  'invoice_description' => 
  array (
    'column' => 'invoice_description',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'shipping_cost' => 
  array (
    'column' => 'shipping_cost',
    'ntype' => 'float',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'tax_percent' => 
  array (
    'column' => 'tax_percent',
    'ntype' => 'float',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'rounding' => 
  array (
    'column' => 'rounding',
    'ntype' => 'string',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'rounding_value' => 
  array (
    'column' => 'rounding_value',
    'ntype' => 'float',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
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
    'recursion' => '1',
    'userClass' => '\\module\\access_controls\\model\\users',
    'groupClass' => '\\module\\access_controls\\model\\groups',
    'groupUserClass' => '\\module\\access_controls\\model\\groups_users',
    'containGroupsClass' => '\\module\\access_controls\\model\\group_contain_groups',
  ),
  '\\module\\core\\behaviour\\revision_log' => 
  array (
    'name' => '\\module\\core\\behaviour\\revision_log',
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
  'invoice_lines' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\invoice_lines',
    'associationAlias' => 'invoice_lines',
    'foreignKey' => 'invoice_reference',
    'show_link' => '1',
    'isSubModel' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
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
  'shipping_countries' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\masters\\model\\countries',
    'associationAlias' => 'shipping_countries',
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
    'isSubModel' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
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
  'currency_id' => 
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
  'partner_id' => 
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
  'payment_reference' => 
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
  'journal_id' => 
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