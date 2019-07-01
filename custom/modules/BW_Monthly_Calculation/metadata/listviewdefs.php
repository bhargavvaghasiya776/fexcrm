<?php
$module_name = 'BW_Monthly_Calculation';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'BW_MONTHLY_CALCULATION_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BW_MONTHLY_CALCULATION_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'BW_MONTHLY_CALCULATION_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PREVIOUS_AMOUNT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PREVIOUS_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'RECEIVED_AMOUNT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RECEIVED_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'RETURNED_AMOUNT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RETURNED_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_AMOUNT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TOTAL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'OWNER_COMMISSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OWNER_COMMISSION',
    'width' => '10%',
    'default' => true,
  ),
  'GROUP_COMMISSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GROUP_COMMISSION',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_COMMISSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TOTAL_COMMISSION',
    'width' => '10%',
    'default' => true,
  ),
  'PENDING_COMMISSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PENDING_COMMISSION',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_BY_CHEQUE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_BY_CHEQUE',
    'width' => '10%',
    'default' => true,
  ),
  'ALL_RTGS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALL_RTGS',
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
  'TOTAL_PAID_AMOUNT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TOTAL_PAID_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TOTAL',
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
