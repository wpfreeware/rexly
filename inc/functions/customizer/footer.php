<?php
/*
 *	This file contains "Footer" section & fields.
 *	Contains: Footer top & bottom options.
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */

	/*
	 *	Panel -- Footer
	 *
	 *	@since rexly 1.0
	 */		
	rexly_Kirki::add_panel( 'rexly_footer_panel', array(
	    'priority'    => 10,
	    'title'       => __( 'Footer', 'rexly' ),
	) );
	
	// footer top section
	rexly_Kirki::add_section( 'rexly_footer_top_section', array(
	    'title'          	=> __( 'Footer Top', 'rexly' ),
	    'priority'       	=> 9,
	    'panel'       		=> 'rexly_footer_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// enable/disable footer top
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_footer_top_enable_disable',
		'label'    			=> __( 'Check to disable footer top', 'rexly' ),
		'section'  			=> 'rexly_footer_top_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// facebook url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_top_fb',
		'label'    			=> __( 'Facebook URL', 'rexly' ),
		'sanitize_callback' => 'esc_url_raw',
		'section'  			=> 'rexly_footer_top_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_top_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// twitter url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_top_twitter',
		'label'    			=> __( 'Twitter URL', 'rexly' ),
		'sanitize_callback' => 'esc_url_raw',
		'section'  			=> 'rexly_footer_top_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_top_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// Google+ url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_top_gplus',
		'label'    			=> __( 'Google+ URL', 'rexly' ),
		'sanitize_callback' => 'esc_url_raw',
		'section'  			=> 'rexly_footer_top_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_top_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// YouTube url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_top_youtube',
		'label'    			=> __( 'YouTube URL', 'rexly' ),
		'sanitize_callback' => 'esc_url_raw',
		'section'  			=> 'rexly_footer_top_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_top_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// LinkedIn url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_top_linkedin',
		'label'    			=> __( 'LinkedIn URL', 'rexly' ),
		'sanitize_callback' => 'esc_url_raw',
		'section'  			=> 'rexly_footer_top_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_top_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// Dribble url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_top_dribbble',
		'label'    			=> __( 'Dribbble URL', 'rexly' ),
		'sanitize_callback' => 'esc_url_raw',
		'section'  			=> 'rexly_footer_top_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_top_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// open social link in a new window
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_footer_top_social_link_target',
		'label'    			=> __( 'Open urls in a new window', 'rexly' ),
		'section'  			=> 'rexly_footer_top_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_top_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),		
	) );
	
	// footer bottom section
	rexly_Kirki::add_section( 'rexly_footer_bottom_section', array(
	    'title'          	=> __( 'Footer Bottom', 'rexly' ),
	    'priority'       	=> 9,
		'panel'       		=> 'rexly_footer_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// enable/disable footer bottom
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_footer_bottom_enable_disable',
		'label'    			=> __( 'Check to disable footer bottom', 'rexly' ),
		'section'  			=> 'rexly_footer_bottom_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// footer text
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_bottom_text',
		'label'    			=> __( 'Footer text', 'rexly' ),
		'section'  			=> 'rexly_footer_bottom_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_bottom_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// footer link text
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_bottom_link_text',
		'label'    			=> __( 'Footer link text', 'rexly' ),
		'section'  			=> 'rexly_footer_bottom_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_bottom_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// footer link text url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_footer_bottom_link',
		'label'    			=> __( 'Footer link', 'rexly' ),
		'sanitize_callback' => 'esc_url_raw',
		'section'  			=> 'rexly_footer_bottom_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_bottom_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),				
	) );
	
	// open button url in new window
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_footer_bottom_link_target',
		'label'    			=> __( 'Open link in a new window', 'rexly' ),
		'section'  			=> 'rexly_footer_bottom_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_footer_bottom_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 0,
			),
		),		
	) );