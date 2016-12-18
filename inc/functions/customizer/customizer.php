<?php
/*
 *	This file contains theme customizer settings.
 *	All these setting options created using kirki 
 * 	@link https://github.com/aristath/kirki
 *  License: MIT
 *
 *	@version 1.0
 *	@since rexly 1.0
 */	

/*
 *	Add Kirki helper class
 *	@link https://github.com/aristath/kirki-helpers
 *
 *	@since rexly 1.0
 */
 require_once( get_template_directory() . '/inc/functions/customizer/rexly-kirki.php' );

/*  
 *	Font-awesome icon classes for customizer
 *
 *	@since rexly 1.0
 */ 
require_once( get_template_directory() . '/inc/functions/customizer/font-awesome-icons.php' ); 

/*
 *	Register customizer options
 *
 *	@since rexly 1.0
 */
function rexly_customizer_register( $wp_customize ) {

	/*
	 * set paths
	 *
	 * @since rexly 1.0
	 */
	$customizer_path = '/inc/functions/customizer';
	
	/*  
	 *
	 *	body background color 
	 *	set to postMessage by default
	 *
	 *	@since rexly 1.0
	 */	
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';	
	
	/*  
	 *
	 *	Customizer configuration setting.
	 *	Used globally for all fields.
	 *
	 *	options type - theme-mod
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/config.php' );

	/*  
	 *
	 *	Theme Info - Sections, fields
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/theme-info.php' );
	
	/*  
	 *
	 *	General Settings - Sections, fields
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/general-settings.php' );
	
	/*  
	 *
	 *	Header - Sections, fields
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/header.php' );
	
	/*  
	 *
	 *	Front page - panel, sections & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page.php' );
	
	/*  
	 *
	 *	Blog page - sections & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/blog.php' );
	
	/*  
	 *
	 *	WooCommerce - sections & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/woocommerce.php' );
	
	/*  
	 *
	 *	Footer - panel, sections & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/footer.php' );										
	 		
   
}
add_action( 'customize_register', 'rexly_customizer_register' );