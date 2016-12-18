<?php
/*
 *	Page MetaBox
 *	Contains Page layouts & other settings
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
function rexly_page_metabox() {
	
	$prefix = '_rexly_';

	/**
	 * metabox & fields
	 */
	$rexly_page_metabox_options = new_cmb2_box( array(
		'id'            	=> $prefix . 'page_layouts',
		'title'         	=> __( 'Page Options', 'rexly' ),
		'object_types'  	=> array( 'page' ), // Post type
		'show_names' 		=> true, // Show field names on the left
		'closed'     		=> true, // true to keep the metabox closed by default
	) );
	
	// page layouts
	$rexly_page_metabox_options->add_field( array(
	    'name'             => __( 'Layout', 'rexly' ),
	    'desc'             => __( 'Choose layout for this page. Only works with Default Template.', 'rexly' ),
	    'id'               => $prefix . 'page_layout_option',
	    'type'             => 'select',
	    'default'          => 'rexly-page-right-sidebar',
	    'options'          => array(
	        'rexly-page-right-sidebar'  => __( 'Right sidebar', 'rexly' ),
	        'rexly-page-left-sidebar'   => __( 'Left sidebar', 'rexly' ),
	        'rexly-page-no-sidebar'     => __( 'No sidebar', 'rexly' ),
	        'rexly-page-fullwidth'      => __( 'Fullwidth', 'rexly' ),
	    ),
	) );
	
	// page title enable/disable
	$rexly_page_metabox_options->add_field( array(
	    'name'       	=> __( 'Title', 'rexly' ),
	    'id'         	=> $prefix . 'page_origin_title_text_on_off',
	    'desc'       	=> __( 'Hide page title for this page.', 'rexly' ),
	    'type'    		=> 'radio_inline',
	    'options' 		=> array(
	        'rexly-origin-page-title-on' 		=> __( 'Show', 'rexly' ),
	        'rexly-origin-page-title-off'   	=> __( 'Hide', 'rexly' ),
	    ),
	    'default' 		=> 'rexly-origin-page-title-on',
	) );						

}
add_action( 'cmb2_admin_init', 'rexly_page_metabox' );