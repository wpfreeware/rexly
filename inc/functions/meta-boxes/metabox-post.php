<?php
/*
 *	Post MetaBox
 *	Contains post informations
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
function rexly_post_single_title_metabox() {
	
	$prefix = '_rexly_';

	/**
	 * metabox & fields
	 */
	$rexly_post_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'post_info',
		'title'         => __( 'Post Title Bar', 'rexly' ),
		'object_types'  => array( 'post' ), // Post type
		'show_names' 	=> true, // Show field names on the left
		'closed'     	=> true, // true to keep the metabox closed by default
	) );	
	
	// post title enable/disable
	$rexly_post_metabox->add_field( array(
	    'name'       	=> __( 'Title on/off', 'rexly' ),
	    'id'         	=> $prefix . 'post_origin_title_text_on_off',
	    'desc'       	=> __( 'Hide post title for this post.', 'rexly' ),
	    'type'    		=> 'radio_inline',
	    'options' 		=> array(
	        'rexly-origin-title-text-on' 		=> __( 'Show', 'rexly' ),
	        'rexly-origin-title-text-off'   	=> __( 'Hide', 'rexly' ),
	    ),
	    'default' 		=> 'rexly-origin-title-text-on',
	) );
	
	// title bar info
	$rexly_post_metabox->add_field( array(
	    'name' 			=> __( 'Title bar section', 'rexly' ),
	    'desc' 			=> __( 'Add options for this post title bar.', 'rexly' ),
	    'type' 			=> 'title',
	    'id'         	=> $prefix . 'post_title_bar_info',
	) );
		
	// title bar enable/disable
	$rexly_post_metabox->add_field( array(
	    'name'       	=> __( 'Title bar on/off', 'rexly' ),
	    'id'         	=> $prefix . 'post_title_on_off',
	    'desc'       	=> __( 'Hide title bar for this post', 'rexly' ),
	    'type'    		=> 'radio_inline',
	    'options' 		=> array(
	        'rexly-title-on' 		=> __( 'Show', 'rexly' ),
	        'rexly-title-off'   	=> __( 'Hide', 'rexly' ),
	    ),
	    'default' 		=> 'rexly-title-on',
	) );	
	
	// title
	$rexly_post_metabox->add_field( array(
		'name'       	=> __( 'Title Bar Text', 'rexly' ),
		'id'         	=> $prefix . 'post_title_text',
		'type'       	=> 'text',
		'default'	 	=> '',
	) );
	
	// title color
	$rexly_post_metabox->add_field( array(
	    'name'    			=> __( 'Text Color', 'rexly' ),
	    'id'         		=> $prefix . 'post_title_text_color',
	    'type'    			=> 'colorpicker',
	    'default' 			=> '#ffffff',
	) );	
	
	// breadcrumbs on/off
	$rexly_post_metabox->add_field( array(
	    'name'       	=> __( 'On/Off breadcrumb', 'rexly' ),
	    'id'         	=> $prefix . 'post_title_breadcrumb',
	    'desc'       	=> __( 'Enable or disable Yoast seo breadcrumb for this post. You need to enable breadcrumb from Yoast SEO options panel.', 'rexly' ),
	    'type'    		=> 'radio_inline',
	    'options' 		=> array(
	        'rexly-title-breadcrumb-on' 	=> __( 'Enable', 'rexly' ),
	        'rexly-title-breadcrumb-off'   	=> __( 'Disable', 'rexly' ),
	    ),
	    'default' 		=> 'rexly-title-breadcrumb-on',
	) );
	
	// background image
	$rexly_post_metabox->add_field( array(
	    'name'    		=> __( 'Background Image', 'rexly' ),
	    'desc'    		=> __( 'Upload a image to display in the title section background', 'rexly' ),
	    'id'         	=> $prefix . 'post_title_bg_image',
	    'type'    		=> 'file',
	    'text'    		=> array(
	        'add_upload_file_text' => __( 'Upload Image', 'rexly' ) // Change upload button text. Default: "Add or Upload File"
	    ),
	) );
	
	// background size
	$rexly_post_metabox->add_field( array(
	    'name'    			=> __( 'Background Size', 'rexly' ),
	    'id'         		=> $prefix . 'post_title_bg_size',
	    'type'             	=> 'select',
	    'default'          	=> 'cover',
	    'options'          	=> array(
	        'cover' 	=> __( 'cover', 'rexly' ),
	        'contain'   => __( 'contain', 'rexly' ),
	        'initial'   => __( 'initial', 'rexly' ),
	    ),
	) );
	
	// title bar padding
	$rexly_post_metabox->add_field( array(
	    'name'    			=> __( 'Padding Top/Bottom', 'rexly' ),
	    'desc'    			=> __( 'In pixles ex: 100px.', 'rexly' ),
	    'default' 			=> '100px',
	    'id'      			=> $prefix . 'post_title_bg_padding',
	    'type'    			=> 'text',
	) );						

}
add_action( 'cmb2_admin_init', 'rexly_post_single_title_metabox' );