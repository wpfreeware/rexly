<?php
/*
 *	functions for rexly theme
 *
 *	@file	functions.php
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 
/*
 *  Load after_setup_theme action hook.
 *
 *  Contains basic theme setup, registration such as menu, 
 *  thumbnail image, title, nav menus, content-width etc.
 */
require_once( 'inc/functions/after-theme-setup.php' );

/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function rexly_widget_areas() {

	// Post sidebar
	register_sidebar( array(
		'name'          => __( 'Post Sidebar', 'rexly' ),
		'id'            => 'rexly-post-sidebar',
		'description'   => __( 'Add your desire widgets here. Widgets will appear in archive pages & post single.', 'rexly' ),
		'before_widget' => '<div  id="%1$s" class="single-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );
	
	// Page sidebar
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'rexly' ),
		'id'            => 'rexly-page-sidebar',
		'description'   => __( 'Add your desire widgets here. Widgets will appear in pages only.', 'rexly' ),
		'before_widget' => '<div  id="%1$s" class="single-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );
	
	/*
	 *	WooCommerce sidebar
	 *	Check if WooCommerce is installed & activated
	 *
	 *	@since rexly 1.0
	 */
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		register_sidebar( array(
			'name'          => __( 'Shop Sidebar', 'rexly' ),
			'id'            => 'rexly-shop-sidebar',
			'description'   => __( 'Add your desire widgets here. Widgets will appear in shop pages only.', 'rexly' ),
			'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		) );
	}	
	
}
add_action( 'widgets_init', 'rexly_widget_areas' );
 
/*
 *	Load theme scripts & styles
 *
 *	Contains all necessary js & css scripts.
 */
require_once( 'inc/functions/enqueue.php' );

/*
 * Add required plugins using TGM plugin activation class
 *
 * @since rexly 1.0
 */
require_once( 'inc/functions/tgm/rexly-required-plugins.php' );
  
/*
 *  Add customizer settings
 *	Add kirki framework to build customizer optoins. 
 *  @link https://github.com/aristath/kirki  
 *
 *  @since rexly 1.0
 */
// Load only if Kirki activated
if ( class_exists( 'Kirki' ) ) {
	require_once( 'inc/functions/customizer/customizer.php' );
}

/**
 *  Add dynamic css
 *
 *  @since rexly 1.0
 */
 require_once( 'inc/functions/dynamic-scripts/dynamic-css.php' );
 
/**
 *  Add dynamic js
 *
 *  @since rexly 1.0
 */
 require_once( 'inc/functions/dynamic-scripts/dynamic-js.php' );
 
 /**
  *  Jetpack configuration file
  *
  *  @since rexly 1.0
  */
 require_once( 'inc/functions/jetpack.php' );
 
 /**
  *  Comment lists
  *
  *  @since rexly 1.0
  */
 require_once( 'inc/functions/wp_comments_list.php' );
 
 /**
  *  WooCommerce setup
  *
  *  @since rexly 1.0
  */
 require_once( 'inc/functions/woo-setup.php' );
 
/*
 *  Add metaboxes
 *	Add CMB2 framework to build metabox optoins. 
 *  @link https://github.com/aristath/kirki  
 *
 *  @since rexly 1.0
 */
if( defined( 'CMB2_LOADED' ) ) {
	require_once( 'inc/functions/meta-boxes/metabox.php' );
}

/**
 *  Add various theme necessary functions.
 *
 *  @since rexly 1.0
 */
require_once( 'inc/functions/miscellaneous.php' );