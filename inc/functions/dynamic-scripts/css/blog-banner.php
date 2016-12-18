<?php
/*
 * 	This file contains "Blog Title" section dynamic css
 *
 *	@version 1.0
 *	@since rexly 1.0
 */


function rexly_blog_banner_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since rexly 1.0
	 */
	
	// background image
	$blog_title_bg_image_value			=	esc_url( get_header_image() );
	$blog_title_bg_image_url			=	'background-image: url( ' . $blog_title_bg_image_value . ' );';
	$blog_title_bg_image 				=	( $blog_title_bg_image_value == '' ) ? '' : $blog_title_bg_image_url;	
	
	// title font size
	$blog_title_font_size 				= 	'font-size:' . esc_html( get_theme_mod( 'rexly_blog_title_text_size', '40' ) ) . 'px;';
	// title text color
	$blog_title_text_color 				= 	'color:' . esc_html( get_theme_mod( 'rexly_blog_title_text_color', '#ffffff' ) ) . ';';
	// background size
	$blog_title_bg_image_size 			= 	'background-size:' . esc_html( get_theme_mod( 'rexly_blog_title_bg_img_size', 'cover' ) ) . ';';
	// top/bottom padding
	$blog_title_section_padding 		= 	'padding:' . esc_html( get_theme_mod( 'rexly_blog_title_padding', '102' ) ) . 'px 0;';	


	/*
	 *	Blog Title Section - styles
	 *
	 *	@since rexly 1.0
	 */			
	$blog_title_section_styles	=	
	
		'<style type="text/css">
		
			#blog-banner{
				'.  $blog_title_bg_image		.'
				'. $blog_title_bg_image_size	.'
			}
								
			.blog-banner-area{
				'. $blog_title_section_padding	.'
			}
			#blog-banner .blog-banner-area h2{
				'. $blog_title_font_size .'
				'. $blog_title_text_color .'
			}		
		
		</style>';
	
	if( is_home() || is_archive() || is_search() ){
		echo $blog_title_section_styles;
	}

}
add_action( 'wp_head', 'rexly_blog_banner_section_styles' );