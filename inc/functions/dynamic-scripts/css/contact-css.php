<?php
/*
 * 	This file contains "contact" section dynamic css
 *
 *	@version 1.0
 *	@since rexly 1.0
 */


function rexly_contact_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since rexly 1.0
	 */
	
	// background image 
	$contact_bg_image_value 			= 	esc_url( get_theme_mod( 'rexly_contact_bg_image', '' ) ); 
	$contact_bg_image_url 				= 	'background-image: url( ' . $contact_bg_image_value . ' );';
	$contact_bg_image 					=	( $contact_bg_image_value == '' ) ? '' : $contact_bg_image_url;
	
	// background size
	$contact_bg_size 					= 	'background-size:' . esc_html( get_theme_mod( 'rexly_contact_bg_size', 'cover' ) ) . ';';
	// background repeat
	$contact_bg_repeat 					= 	'background-repeat:' . esc_html( get_theme_mod( 'rexly_contact_bg_repeat', 'no-repeat' ) ) . ';';
	// background color
	$contact_bg_overlay 				= 	'background-color:' . esc_html( get_theme_mod( 'rexly_contact_bg_overlay', 'rgba(0, 0, 0, 0.8)' ) ) . ';';


	/*
	 *	Contact Section - styles
	 *
	 *	@since rexly 1.0
	 */			
	$contact_section_styles	=	
	
		'<style type="text/css">
		
			#contact{
				'. $contact_bg_image			.'
				'. $contact_bg_size			.'
				'. $contact_bg_repeat			.'
			}
								
			.contact-overlay{
				'. $contact_bg_overlay			.'
			}		
		
		</style>';
	
	if( is_page_template( 'front-page.php' ) || is_front_page() ){
		echo $contact_section_styles;	
	}	

}
add_action( 'wp_head', 'rexly_contact_section_styles' );