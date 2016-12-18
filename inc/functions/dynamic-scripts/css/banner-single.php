<?php
/*
 * 	This file contains "Blog Single Title" section dynamic css
 *
 *	@version 1.0
 *	@since rexly 1.0
 */


function rexly_blog_single_title_section_styles(){
	
	/*
	 *	Set variables
	 *
	 *	@since rexly 1.0
	 */
	
	// background image
	$post_single_title_bg_value			=	esc_url( get_post_meta( get_the_ID(), '_rexly_post_title_bg_image', true ) );
	$post_single_title_bg_url			=	'background-image: url( ' . $post_single_title_bg_value . ' );';
	$post_single_title_bg 				=	( $post_single_title_bg_value == '' ) ? '' : $post_single_title_bg_url;

	// background size
	$post_single_title_bg_size 			= 	'background-size:' . esc_html( get_post_meta( get_the_ID(), '_rexly_post_title_bg_size', true ) ) . ';';
	// top/bottom padding
	$post_single_title_bg_padding 		= 	'padding:' . esc_html( get_post_meta( get_the_ID(), '_rexly_post_title_bg_padding', true ) ) . ' 0px;';
	// title text color
	$blog_title_text_color 				= 	'color: ' . esc_html( get_post_meta( get_the_ID(), '_rexly_post_title_text_color', true ) ) . ';';	


	/*
	 *	Blog Title Section - styles
	 *
	 *	@since rexly 1.0
	 */			
	$blog_single_title_section_styles	=	
	
		'<style type="text/css">
		
			.single-blog-banner .blog-banner-area h2{
				'.  $blog_title_text_color		.'
			}
								
			#blog-banner.single-blog-banner{
				'. $post_single_title_bg	.'
				'. $post_single_title_bg_size .'
			}
			.single-blog-banner .blog-banner-area{
				'. $post_single_title_bg_padding .'
			}	
		
		</style>';
	
	/*
	 *	Post title bar
	 *
	 *	@since rexly 1.0
	 */
	$post_title_on_off	= esc_html( get_post_meta( get_the_ID(), '_rexly_post_title_on_off', true ) );	
	if( is_singular( 'post' ) && ( $post_title_on_off == 'rexly-title-on' ) ){
		echo $blog_single_title_section_styles;	
	}	

}
add_action( 'wp_head', 'rexly_blog_single_title_section_styles' );