<?php
if(!function_exists('bwx_header_widget_init')) :
  function bwx_header_widget_init() {
    register_sidebar(array(
      'name' => __('Header widget', 'balanceworx2018'),
      'description' => __('This widget is on the top right part of the header', 'balanceworx2018'),
      'id' => 'bwx-header',
      'before_widget' => '<div class="bwx-header-widget">',
      'after_widget' => '</div>',
      'before_title' => '<span class="bwx-header-widget__title">',
      'after_title' => '</span>',
    ));
  }
endif;
add_action('widgets_init', 'bwx_header_widget_init');

if(!function_exists('bwx_footer_widget_init')) :
  function bwx_footer_widget_init() {
    register_sidebar(array(
      'name' => __('Footer widget', 'balanceworx2018'),
      'description' => __('This widget is the information in the footer', 'balanceworx2018'),
      'id' => 'bwx-footer-widget',
      'before_widget' => '<div class="bwx-footer-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h1 class="bwx-widget-title">',
      'after_title' => '</h1>',
    ));
  }
endif;
add_action('widgets_init', 'bwx_footer_widget_init');

if(!function_exists('bwx_contact_sidebar_widget_init')) :
  function bwx_contact_sidebar_widget_init() {
    register_sidebar(array(
      'name' => __('Contact Sidebar', 'balanceworx2018'),
      'description' => __('This widget is the information on the left sidebar of the Contact template', 'balanceworx2018'),
      'id' => 'bwx-contact',
      'before_widget' => '<div class="bwx-contact-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="bwx-title">',
      'after_title' => '</h3>',
    ));
  }
endif;
add_action('widgets_init', 'bwx_contact_sidebar_widget_init');

?>
