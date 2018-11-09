<?php
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
  	'key' => 'group_5b8c7c6a4542a',
  	'title' => 'What We Do',
  	'fields' => array (
  		array (
  			'key' => 'field_5b8c7c6eaa5fb',
  			'label' => 'Section',
  			'name' => 'section',
  			'type' => 'repeater',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => 'field_5b8c7c7caa5fc',
  			'min' => 0,
  			'max' => 4,
  			'layout' => 'block',
  			'button_label' => 'Add Block',
  			'sub_fields' => array (
  				array (
  					'key' => 'field_5b8c7c7caa5fc',
  					'label' => 'Title',
  					'name' => 'title',
  					'type' => 'text',
  					'instructions' => '',
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
  					'maxlength' => '',
  				),
  				array (
  					'key' => 'field_5b8c7c89aa5fd',
  					'label' => 'Background Image',
  					'name' => 'bg_image',
  					'type' => 'image',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'return_format' => 'url',
  					'preview_size' => 'thumbnail',
  					'library' => 'all',
  					'min_width' => '',
  					'min_height' => '',
  					'min_size' => '',
  					'max_width' => '',
  					'max_height' => '',
  					'max_size' => '',
  					'mime_types' => '',
  				),
  				array (
  					'key' => 'field_5b8c7cb6aa5fe',
  					'label' => 'Icon',
  					'name' => 'icon',
  					'type' => 'text',
  					'instructions' => 'All lowercase. See fontawesome.com for options',
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
  					'maxlength' => '',
  				),
  				array (
  					'key' => 'field_5b8c7ccdaa5ff',
  					'label' => 'Content',
  					'name' => 'content',
  					'type' => 'textarea',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'maxlength' => '',
  					'rows' => '',
  					'new_lines' => 'br',
  				),
  			),
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'page_template',
  				'operator' => '==',
  				'value' => 'page-templates/front-page.php',
  			),
  		),
  		array (
  			array (
  				'param' => 'page_type',
  				'operator' => '==',
  				'value' => 'front_page',
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
?>