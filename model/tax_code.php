<?php
 /**
  *
  * Dont write any custom code in this class, build operation will overwrite this class;
  */
  namespace module\accounting\model;
  class tax_code extends \module\accounting\model\tax_code_domain_logic
  {
       public $source = 'default';
       public $table = 'accounting__tax_code';
       public $parentClass = '\\design_model';
       public $displayField = 'name';
       public $primaryKey = 'id';
       public $softDeleteColumn = 'deleted';
       public $sequenceColumnName = 'seq';
       public $isSequentialData = '0';
       public $isConfig = '0';
       public $overrideCallToParent = '0';
       public $fields = array (
  'parent_id' => 
  array (
    'column' => 'parent_id',
    'ntype' => 'int',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
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
  'name' => 
  array (
    'column' => 'name',
    'ntype' => 'string',
    'is_sortable' => '1',
    'is_searchable' => '1',
    'is_exportable' => '1',
  ),
  'created_by' => 
  array (
    'column' => 'created_by',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'owned_by' => 
  array (
    'column' => 'owned_by',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'modified_by' => 
  array (
    'column' => 'modified_by',
    'ntype' => 'int',
    'is_sortable' => '0',
    'is_searchable' => '0',
    'is_exportable' => '0',
  ),
  'id' => 
  array (
    'column' => 'id',
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
);
       public $associations = array (
  'created_by_users' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\access_controls\\model\\users',
    'associationAlias' => 'created_by_users',
    'foreignKey' => 'created_by',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'owned_by_users' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\access_controls\\model\\users',
    'associationAlias' => 'owned_by_users',
    'foreignKey' => 'owned_by',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'modified_by_users' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\access_controls\\model\\users',
    'associationAlias' => 'modified_by_users',
    'foreignKey' => 'modified_by',
    'show_link' => '1',
    'isAclParent' => '0',
    'isAclChild' => '0',
    'isSubModel' => '0',
  ),
  'parent_tax_code' => 
  array (
    'assocType' => 'belongsTo',
    'className' => '\\module\\accounting\\model\\tax_code',
    'associationAlias' => 'parent_tax_code',
    'foreignKey' => 'parent_id',
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
);
  }