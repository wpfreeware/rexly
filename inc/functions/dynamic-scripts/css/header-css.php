<?php
/*
 * 	This file contains "Header Slider" section dynamic css
 *
 *	@version 1.0
 *	@since rexly 1.0
 */


function rexly_header_overlay(){

	$header_bg_overly 	= 	'background-color:' . esc_html( get_theme_mod( 'rexly_header_overaly', 'rgba(0, 0, 0, 0.6)' ) ) . ';';


	/*
	 *	Header Section - styles
	 *
	 *	@since rexly 1.0
	 */			
	$header_styles	=	
	
		'<style type="text/css">
		
			.header-overlay{
				'. $header_bg_overly			.'
			}		
		
		</style>';
	
	if( is_page_template( 'front-page.php' ) || is_home() || is_front_page() ){
		echo $header_styles;	
	}	

}
add_action( 'wp_head', 'rexly_header_overlay' );