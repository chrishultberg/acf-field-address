<?php

add_action( 'after_setup_theme', function() {

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
      'key' => 'group_56bd37082b6da',
      'title' => 'Test Export Import Group',
      'fields' => array (
        array (
          'key' => 'field_56bd3730fdc15',
          'label' => 'Export Import Field One',
          'name' => 'export_import_field_one',
          'type' => 'address',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'output_type' => 'html',
          'address_layout' => '[[{"id":"street1","label":"Street 1"}],[{"id":"city","label":"City"},{"id":"state","label":"State"},{"id":"zip","label":"Postal Code"}],[],[],[]]',
          'address_options' => '{"street1":{"id":"street1","label":"Street 1","defaultValue":"","enabled":true,"cssClass":"street1","separator":""},"street2":{"id":"street2","label":"Street 2","defaultValue":"","enabled":false,"cssClass":"street2","separator":""},"street3":{"id":"street3","label":"Street 3","defaultValue":"","enabled":false,"cssClass":"street3","separator":""},"city":{"id":"city","label":"City","defaultValue":"","enabled":true,"cssClass":"city","separator":","},"state":{"id":"state","label":"State","defaultValue":"","enabled":true,"cssClass":"state","separator":""},"zip":{"id":"zip","label":"Postal Code","defaultValue":"","enabled":true,"cssClass":"zip","separator":""},"country":{"id":"country","label":"Country","defaultValue":"","enabled":false,"cssClass":"country","separator":""}}',
        ),
        array (
          'key' => 'field_56bd37994237e',
          'label' => 'Export Import Field Two',
          'name' => 'export_import_field_two',
          'type' => 'address',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'output_type' => 'html',
          'address_layout' => '[[{"id":"street1","label":"Street 1"}],[{"id":"street2","label":"Street 2"}],[{"id":"city","label":"City"},{"id":"state","label":"State"},{"id":"zip","label":"Postal Code"}],[],[]]',
          'address_options' => '{"street1":{"id":"street1","label":"Street 1","defaultValue":"","enabled":true,"cssClass":"street1","separator":""},"street2":{"id":"street2","label":"Street 2","defaultValue":"","enabled":true,"cssClass":"street2","separator":""},"street3":{"id":"street3","label":"Street 3","defaultValue":"","enabled":false,"cssClass":"street3","separator":""},"city":{"id":"city","label":"City","defaultValue":"","enabled":true,"cssClass":"city","separator":","},"state":{"id":"state","label":"State","defaultValue":"","enabled":true,"cssClass":"state","separator":""},"zip":{"id":"zip","label":"Postal Code","defaultValue":"","enabled":true,"cssClass":"zip","separator":""},"country":{"id":"country","label":"Country","defaultValue":"","enabled":false,"cssClass":"country","separator":""}}',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));

  endif;

} );
