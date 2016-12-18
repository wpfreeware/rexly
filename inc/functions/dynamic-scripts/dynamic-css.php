<?php
/*
 * 	This file contains theme dynamic css
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */	
 
/**
 *	set paths
 */
$dynamic_css_path = get_template_directory() . '/inc/functions/dynamic-scripts';

/**
 *	contains "Header" section styles
 *	
 *  @since rexly 1.0
 */
require_once( $dynamic_css_path . '/css/header-css.php' );

/**
 *	contains "callout" section styles
 *	
 *  @since rexly 1.0
 */
require_once( $dynamic_css_path . '/css/callout-css.php' );

/**
 *	contains "callout" section styles
 *	
 *  @since rexly 1.0
 */
require_once( $dynamic_css_path . '/css/testimonial-css.php' );

/**
 *	contains "contact" section styles
 *	
 *  @since rexly 1.0
 */
require_once( $dynamic_css_path . '/css/contact-css.php' );

/**
 *	contains "Blog Title" section styles.
 *	Will appear on blog archive pages.
 *	
 *  @since rexly 1.0
 */
require_once( $dynamic_css_path . '/css/blog-banner.php' );

/**
 *	contains "Post Single" section styles.
 *	Will appear on post single pages.
 *	
 *  @since rexly 1.0
 */
require_once( $dynamic_css_path . '/css/banner-single.php' );

/**
 *	contains "Theme" color scheme
 *	
 *  @since rexly 1.0
 */
require_once( $dynamic_css_path . '/color-scheme.php' );