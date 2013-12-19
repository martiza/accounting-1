<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class journal_entries extends \module\accounting\model\journal_entries_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__journal_entries';
       public $parentClass = '\\data_model';
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
  'memo' => 
  array (
    'column' => 'memo',
    'ntype' => 'string',
    'length' => '64',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'status' => 
  array (
    'column' => 'status',
    'ntype' => 'string',
    'length' => '64',
  ),
  'reference' => 
  array (
    'column' => 'reference',
    'ntype' => 'string',
    'length' => '64',
  ),
  'journal_id' => 
  array (
    'column' => 'journal_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'period_id' => 
  array (
    'column' => 'period_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'description' => 
  array (
    'column' => 'description',
    'ntype' => 'string',
    'length' => '255',
  ),
  'date' => 
  array (
    'column' => 'date',
    'ntype' => 'date',
  ),
  'balance' => 
  array (
    'column' => 'balance',
    'ntype' => 'float',
    'length' => '10,2',
  ),
  'to_review' => 
  array (
    'column' => 'to_review',
    'ntype' => 'int',
    'length' => '4',
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
  'status_id' => 
  array (
    'column' => 'status_id',
    'ntype' => 'int',
    'length' => '11',
  ),
  'id' => 
  array (
    'column' => 'id',
    'ntype' => 'int',
    'length' => '19',
  ),
  'reference_model' => 
  array (
    'column' => 'reference_model',
    'ntype' => 'string',
    'length' => '50',
  ),
  '__reference' => 
  array (
    'column' => '__reference',
    'ntype' => 'string',
    'length' => '50',
  ),
  'reference_model_class_name' => 
  array (
    'column' => 'reference_model_class_name',
    'ntype' => 'string',
    'length' => '100',
  ),
  'related_to' => 
  array (
    'column' => 'related_to',
    'ntype' => 'int',
    'length' => '19',
  ),
  'related_to_model' => 
  array (
    'column' => 'related_to_model',
    'ntype' => 'string',
    'length' => '50',
  ),
  '__related_to' => 
  array (
    'column' => '__related_to',
    'ntype' => 'string',
    'length' => '50',
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
    'foreignKey' => 'period_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journal_entry_status' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\journal_entry_status',
    'associationAlias' => 'journal_entry_status',
    'foreignKey' => 'status_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'journal_entry_lines' => 
  array (
    'assocType' => 'hasMany',
    'className' => '\\module\\accounting\\model\\journal_entry_lines',
    'associationAlias' => 'journal_entry_lines',
    'foreignKey' => 'journal_entry_id',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'invoices' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\invoices',
    'associationAlias' => 'invoices',
    'foreignKey' => 'reference',
    'on' => 
    array (
      0 => '{{PRIMARY}}.{{FOREIGN_KEY}}={{FOREIGN}}.{{FOREIGN_PRIMARY_KEY}}',
      1 => '{{PRIMARY}}.{{FOREIGN_KEY}}_model=\'{{FOREIGN}}\'',
    ),
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
);
       public $filters = array (
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
  'journal_id' => 
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
  'period_id' => 
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
  'date' => 
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