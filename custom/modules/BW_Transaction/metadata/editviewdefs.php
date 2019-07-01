<?php
$module_name = 'BW_Transaction';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bw_transaction_contacts_name',
            'label' => 'LBL_BW_TRANSACTION_CONTACTS_FROM_CONTACTS_TITLE',
            'tabindex' => 'Client',
          ),
          1 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cash',
            'label' => 'LBL_CASH',
          ),
          1 => 
          array (
            'name' => 'cheque',
            'label' => 'LBL_CHEQUE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'rttgs',
            'label' => 'LBL_RTTGS',
          ),
        ),
      ),
    ),
  ),
);
;
?>
