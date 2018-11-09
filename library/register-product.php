<?php
if(!function_exists('cptui_register_my_cpts')) :
	function cptui_register_my_cpts() {

		/**
		 * Post Type: Products.
		 */

		$labels = array(
			"name" => __( 'Products', '' ),
			"singular_name" => __( 'Product', '' ),
		);

		$args = array(
			"label" => __( 'Products', '' ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "bw_products",
			"has_archive" => true,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => true,
			"rewrite" => array( "slug" => "product", "with_front" => true ),
			"query_var" => true,
			"menu_position" => 5,
			"menu_icon" => "dashicons-cart",
			"supports" => array( "title", "editor", "thumbnail", "excerpt", "revisions", "page-attributes" ),
			"taxonomies" => array( "category", "post_tag" ),
		);

		register_post_type( "product", $args );
	}
endif;

add_action( 'init', 'cptui_register_my_cpts' );
?>
