<?php
/*
 * 	This file contains "callout" section dynamic css
 *
 *	@version 1.0
 *	@since rexly 1.0
 */


function rexly_callout_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since rexly 1.0
	 */
	
	// background image 
	$callout_bg_image_value 			= 	esc_url( get_theme_mod( 'rexly_callout_bg_image', '' ) ); 
	$callout_bg_image_url 				= 	'background-image: url( ' . $callout_bg_image_value . ' );';
	$callout_bg_image 					=	( $callout_bg_image_value == '' ) ? '' : $callout_bg_image_url;
	
	// background size
	$callout_bg_size 					= 	'background-size:' . esc_html( get_theme_mod( 'rexly_callout_bg_size', 'cover' ) ) . ';';
	// background repeat
	$callout_bg_repeat 					= 	'background-repeat:' . esc_html( get_theme_mod( 'rexly_callout_bg_repeat', 'no-repeat' ) ) . ';';
	// background color
	$callout_bg_overlay 				= 	'background-color:' . esc_html( get_theme_mod( 'rexly_callout_bg_overlay', 'rgba(0, 0, 0, 0.8)' ) ) . ';';


	/*
	 *	Callout Section - styles
	 *
	 *	@since rexly 1.0
	 */			
	$callout_section_styles	=	
	
		'<style type="text/css">
		
			#call-to-action{
				'. $callout_bg_image			.'
				'. $callout_bg_size			.'
				'. $callout_bg_repeat			.'
			}
								
			.call-to-overlay{
				'. $callout_bg_overlay			.'
			}		
		
		</style>';
	
	if( is_page_template( 'front-page.php' ) || is_front_page() ){
		echo $callout_section_styles;	
	}	

}
add_action( 'wp_head', 'rexly_callout_section_styles' );