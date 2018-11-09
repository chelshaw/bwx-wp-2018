<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @version    1.0.0 for child theme Balanceworx2018
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_stylesheet_directory() . '/library/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'bwx_register_required_plugins' );

function bwx_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'Presentation Gallery',
			'slug'               => 'presentation-gallery',
			'source'             => get_stylesheet_directory() . '/library/plugins/presentation-gallery.zip',
			'required'           => false,
			'version'            => '1.0.0',
		),

		array(
			'name'               => 'Advanced Custom Fields Pro',
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => get_stylesheet_directory() . '/library/plugins/advanced-custom-fields-pro.zip',
			'required'           => true,
			'version'            => '5.5.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		),

		array(
			'name'      => 'Raw HTML',
			'slug'      => 'raw-html',
			'required'  => false,
			'version' 	=> '1.5.1',
		),

		array(
			'name'      => 'Remove Widget Titles',
			'slug'      => 'remove-widget-titles',
			'required'  => false,
			'version' 	=> '1.0',
		),

		array(
			'name'      => 'Swifty Image Widget',
			'slug'      => 'swifty-image-widget',
			'required'  => false,
			'version' 	=> '1.0.3',
		),

		array(
			'name'      => 'Shortcodes by Angie Makes',
			'slug'      => 'wc-shortcodes',
			'required'  => false,
			'version'		=> '3.42',
		),

		array(
			'name'      => 'Ninja Forms',
			'slug'      => 'ninja-forms',
			'required'  => false,
			'version' 	=> '3.3.15'
		),

		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),
	);

	$config = array(
		'id'           => 'balanceworx',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
