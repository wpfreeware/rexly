<?php
/*
 *	This file contains "About" section & fields 
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 	/*
	 *	Section -- About | Front Page
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_about_section', array(
	    'title'          	=> __( 'About', 'rexly' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'rexly_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// enable/disable about section	
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_about_enable_disable',
		'label'       		=> __( 'About section on/off', 'rexly' ),		
		'section'     		=> 'rexly_about_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => __( 'Enable', 'rexly' ),
			'off' => __( 'Disable', 'rexly' ),
		),
	) );	
	
	// About title
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_about_title',
		'label'    			=> __( 'About Title', 'rexly' ),
		'section'  			=> 'rexly_about_section',
		'default'  			=> __( 'Rexly Design', 'rexly' ),
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.about-right .title-area h2.tittle',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// About title highlighted text
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_about_title_highlighted',
		'label'    			=> __( 'Highlighted text', 'rexly' ),
		'section'  			=> 'rexly_about_section',
		'default'  			=> __( 'About', 'rexly' ),
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) );
	
	// About short description
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_about_desc',
		'label'    			=> __( 'About Description', 'rexly' ),
		'section'  			=> 'rexly_about_section',
		'default'  			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniamo. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim.',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.about-right .title-area p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// About button text
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_about_button_text',
		'label'    			=> __( 'Button text', 'rexly' ),
		'section'  			=> 'rexly_about_section',
		'default'  			=> __( 'Read More', 'rexly' ),
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.about-btn-area a',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// About button url
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_about_button_url',
		'label'    			=> __( 'Button URL', 'rexly' ),
		'section'  			=> 'rexly_about_section',
		'default'  			=> '#',
		'sanitize_callback' => 'esc_url_raw',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) );
	
	// About button target
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_about_button_target',
		'label'    			=> __( 'open in a new window', 'rexly' ),
		'section'  			=> 'rexly_about_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
    // About image
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'rexly_about_image',
		'label'       		=> __( 'About Image', 'rexly' ),
		'section'     		=> 'rexly_about_section',
		'default'     		=> get_template_directory_uri() . '/img/header-bar-bg.jpg',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_about_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.about-left > img',
                'function' 		=> 'html',
                'attr'     		=> 'src',
            ),
        ),			
	) );