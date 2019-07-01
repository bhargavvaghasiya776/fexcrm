<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'first_name' => 'contacts.first_name',
  'last_name' => 'contacts.last_name',
  'default_interest_c' => 'contacts_cstm.default_interest_c',
  'current_interest_c' => 'contacts_cstm.current_interest_c',
  'email' => 'contacts.email',
  'phone_mobile' => 'contacts.phone_mobile',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  3 => 'email',
  4 => 'default_interest_c',
  5 => 'current_interest_c',
  6 => 'phone_mobile',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'name' => 'phone_mobile',
  ),
  'default_interest_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DEFAULT_INTEREST',
    'width' => '10%',
    'name' => 'default_interest_c',
  ),
  'current_interest_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CURRENT_INTEREST',
    'width' => '10%',
    'name' => 'current_interest_c',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'CURRENT_INTEREST_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CURRENT_INTEREST',
    'width' => '10%',
  ),
  'DEFAULT_INTEREST_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_DEFAULT_INTEREST',
    'width' => '10%',
  ),
),
);
