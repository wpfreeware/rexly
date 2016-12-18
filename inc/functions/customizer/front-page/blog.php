<?php
/*
 *	This file contains "Blog" section & fields 
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
	/*
	 *	Section -- Blog | Front Page
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_home_blog_section', array(
	    'title'          => __( 'Blog', 'rexly' ),
	    'priority'       => 10,
	    'panel'       	 => 'rexly_front_page_panel',
	    'capability'     => 'edit_theme_options',
	) );
	

	/*
	 *	Fields -- Blog
	 *	Fields - Switch | Title | Description
	 *
	 *	@since rexly 1.0
	 */
	
	// enable/disable	
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_home_blog_enable_disable',
		'label'       		=> __( 'Blog section on/off', 'rexly' ),		
		'section'     		=> 'rexly_home_blog_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'rexly' ),
			'off' => esc_attr__( 'Disable', 'rexly' ),
		),
	) );
	
	// title
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_home_blog_title',
		'label'    			=> __( 'Title', 'rexly' ),
		'section'  			=> 'rexly_home_blog_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.from-blog-area .title-area .tittle',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// Description
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_home_blog_description',
		'label'    			=> __( 'Description', 'rexly' ),
		'section'  			=> 'rexly_home_blog_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.from-blog-area .title-area p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// post count
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'number',
		'settings'    		=> 'rexly_post_display_count',
		'label'       		=> __( 'How many posts you want to display?', 'rexly' ),
		'section'     		=> 'rexly_home_blog_section',
		'default'     		=> 3,
		'choices'     		=> array(
			'min'  => 1,
			'max'  => 999,
			'step' => 1,
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// Display order
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        => 'select',
		'settings'    => 'rexly_post_display_order',
		'label'       => __( 'Display Order', 'rexly' ),
		'section'     => 'rexly_home_blog_section',
		'default'     => 'DESC',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'DESC' 	=> esc_attr__( 'New to old', 'rexly' ),
			'ASC' 	=> esc_attr__( 'Old to new', 'rexly' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// enable/disable author name
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_home_blog_author_name',
		'label'    			=> __( 'Check to disable author name', 'rexly' ),
		'section'  			=> 'rexly_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// enable/disable post date
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_home_blog_post_date',
		'label'    			=> __( 'Check to disable post date', 'rexly' ),
		'section'  			=> 'rexly_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// enable/disable comments
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_home_blog_post_comment',
		'label'    			=> __( 'Check to disable post comment', 'rexly' ),
		'section'  			=> 'rexly_home_blog_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_home_blog_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );						