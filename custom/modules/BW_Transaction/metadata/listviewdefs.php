<?php
$module_name = 'BW_Transaction';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'BW_TRANSACTION_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BW_TRANSACTION_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'BW_TRANSACTION_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'RTTGS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RTTGS',
    'width' => '10%',
    'default' => true,
  ),
  'CASH' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CASH',
    'width' => '10%',
    'default' => true,
  ),
  'CHEQUE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CHEQUE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
