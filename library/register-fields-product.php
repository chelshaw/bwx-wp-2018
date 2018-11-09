<?php
/**
 * Register PRODUCTS field group
 *
 * Output from ACF Pro
 */

 if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
  	'key' => 'group_58a123d4f384e',
  	'title' => 'Products',
  	'fields' => array (
  		array (
  			'key' => 'field_58a1176e99c99',
  			'label' => 'Part Number',
  			'name' => 'part_number',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 1,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'formatting' => 'none',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_58a1178f99c9a',
  			'label' => 'OEM Numbers',
  			'name' => 'oem_numbers',
  			'type' => 'text',
  			'instructions' => 'OEM Numbers (separated by commas)',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'formatting' => 'none',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5b7cddf40ccec',
  			'label' => 'Stock Type',
  			'name' => 'stock_type',
  			'type' => 'select',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'choices' => array (
  				'stock' => 'In Stock',
  				'buildToOrder' => 'Build To Order',
  			),
  			'default_value' => array (
  			),
  			'allow_null' => 1,
  			'multiple' => 0,
  			'ui' => 0,
  			'ajax' => 0,
  			'return_format' => 'value',
  			'placeholder' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'product',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'acf_after_title',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => array (
  		0 => 'custom_fields',
  		1 => 'discussion',
  		2 => 'comments',
  		3 => 'author',
  		4 => 'format',
  		5 => 'send-trackbacks',
  	),
  	'active' => 1,
  	'description' => '',
  ));

endif;
?>
