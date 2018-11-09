<?php

if(!function_exists('bwx_home_slider_enqueue')) :
  function bwx_home_slider_enqueue() {
    if(is_page_template('front-page.php') || is_front_page()) {
      wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/vendor/slick.css');
      wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/vendor/slick-theme.css');
      wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/vendor/slick.js', array('jquery'), '2.1.0', false );
      wp_enqueue_script( 'slick-instance', get_stylesheet_directory_uri() . '/assets/js/homepage-slider.js', array('jquery', 'slick'), '1.0.0', false);
    }
  }
endif;
add_action( 'wp_enqueue_scripts', 'bwx_home_slider_enqueue' );

?>
