<?php
/*
 *	This file contains theme info options.
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
	
	/*
	 *	Section -- theme info
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_theme_info_section', array(
	    'title'          	=> __( 'Theme Info', 'rexly' ),
	    'priority'       	=> 8,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// logo
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_theme_customizer_logo',
		'section'     		=> 'rexly_theme_info_section',
		'default'     		=> '<img src="'. get_template_directory_uri() . '/img/logo.jpg" alt="rexly" />',
		'priority'    		=> 10,
	) );	
	
	// documentation
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_theme_doc',
		'label'       		=> __( 'Useful Links', 'rexly' ),
		'section'     		=> 'rexly_theme_info_section',
		'default'     		=> '<a href="https://www.wpfreeware.com/docs/rexly-documentation/" target="_blank">' . esc_html__( 'Documentation', 'rexly' ) . '</a>',
		'priority'    		=> 10,
	) );
	
	// free vs pro
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_theme_free_vs_pro',
		'section'     		=> 'rexly_theme_info_section',
		'default'     		=> '<a href="https://www.wpfreeware.com/docs/rexly-free-vs-pro/" target="_blank">' . esc_html__( 'Free vs Pro', 'rexly' ) . '</a>',
		'priority'    		=> 10,
	) );
	
	// Support
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_theme_support',
		'section'     		=> 'rexly_theme_info_section',
		'default'     		=> '<a href="https://www.wpfreeware.com/support-forums/forum/rexly/" target="_blank">' . esc_html__( 'Support', 'rexly' ) . '</a>',
		'priority'    		=> 10,
	) );
	
	// leave review
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_theme_leave_review',
		'section'     		=> 'rexly_theme_info_section',
		'default'     		=> '<a href="https://wordpress.org/support/theme/rexly/reviews/?filter=5" target="_blank">' . esc_html__( 'Leave a review', 'rexly' ) . '</a>',
		'priority'    		=> 10,
	) );