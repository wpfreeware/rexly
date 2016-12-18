<?php
/*
 * 	This file contains "Testimonial" section dynamic css
 *
 *	@version 1.0
 *	@since rexly 1.0
 */


function rexly_testimonial_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since rexly 1.0
	 */
	
	// background image 
	$testimonial_bg_image_value 			= 	esc_url( get_theme_mod( 'rexly_testimonials_bg_image', '' ) ); 
	$testimonial_bg_image_url 				= 	'background-image: url( ' . $testimonial_bg_image_value . ' );';
	$testimonial_bg_image 					=	( $testimonial_bg_image_value == '' ) ? '' : $testimonial_bg_image_url;
	
	// background size
	$testimonial_bg_size 					= 	'background-size:' . esc_html( get_theme_mod( 'rexly_testimonials_bg_size', 'cover' ) ) . ';';
	// background repeat
	$testimonial_bg_repeat 					= 	'background-repeat:' . esc_html( get_theme_mod( 'rexly_testimonials_bg_repeat', 'no-repeat' ) ) . ';';
	// background color
	$testimonial_bg_overlay 				= 	'background-color:' . esc_html( get_theme_mod( 'rexly_testimonials_bg_overlay', 'rgba(0, 0, 0, 0.8)' ) ) . ';';


	/*
	 *	Callout Section - styles
	 *
	 *	@since rexly 1.0
	 */			
	$testimonial_section_styles	=	
	
		'<style type="text/css">
		
			#testimonial{
				'. $testimonial_bg_image		.'
				'. $testimonial_bg_size			.'
				'. $testimonial_bg_repeat		.'
			}
								
			.testimonial-overlay{
				'. $testimonial_bg_overlay		.'
			}		
		
		</style>';
	
	if( is_page_template( 'front-page.php') || is_front_page() ){
		echo $testimonial_section_styles;	
	}	

}
add_action( 'wp_head', 'rexly_testimonial_section_styles' );