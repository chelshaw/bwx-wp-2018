<?php

add_action( 'wp_enqueue_scripts', 'bwx_theme_enqueue_styles' );
function bwx_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
    wp_enqueue_style( 'tabs-style', get_stylesheet_directory_uri() . '/assets/css/tab-styling.css' );
}

add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-86179415-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-86179415-1');
  </script>
<?php }

require_once( 'library/require-plugins.php' );
require_once( 'library/front-page-slider.php' );
require_once( 'library/register-product.php' );
require_once( 'library/register-fields-what-we-do.php' );
require_once( 'library/register-fields-product.php' );
require_once( 'library/search-custom.php' );
require_once( 'library/register-bwx-widgets.php' );
require_once( 'library/shortcodes.php' );

if( function_exists('add_theme_support') ):
  add_theme_support( 'custom-logo' );
endif;

// Add custom post types to tag archive
function bwx_add_custom_types( $query ) {
    // https://wordpress.stackexchange.com/questions/28145/tag-php-doesnt-work-with-tags-on-a-custom-post-type-post
    if( (is_tag() || is_category()) && $query->is_main_query() ) {

        // this gets all post types:
        // $post_types = get_post_types();

        // alternately, you can add just specific post types using this line instead of the above:
        $post_types = array( 'post', 'product' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'bwx_add_custom_types' );

?>
