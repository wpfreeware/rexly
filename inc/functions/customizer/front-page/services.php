<?php
/*
 *	This file contains "Services" section & fields 
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
  	/*
	 *	Section -- Service | Front Page
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_services_section', array(
	    'title'          	=> __( 'Services', 'rexly' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'rexly_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Services | Services Section
	 *	Fields - Title | description | Count | Asc/Des
	 *
	 *	@since rexly 1.0
	 */
	 
	// enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_services_enable_disable',
		'label'       		=> __( 'Services section on/off', 'rexly' ),		
		'section'     		=> 'rexly_services_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  				=> esc_attr__( 'Enable', 'rexly' ),
			'off' 				=> esc_attr__( 'Disable', 'rexly' ),
		),
	) );
	
	// title
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_services_title',
		'label'    			=> __( 'Title', 'rexly' ),
		'section'  			=> 'rexly_services_section',
		'default'  			=> __( 'Services we offer', 'rexly' ),
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_services_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.service-area .title-area h2.tittle',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// Description
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_services_desc',
		'label'    			=> __( 'Description', 'rexly' ),
		'section'  			=> 'rexly_services_section',
		'default'  			=> 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_services_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.service-area .title-area p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// Add service item info
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_service_info',
		'section'     		=> 'rexly_services_section',
		'default'     		=> '<div style="padding:5px;font-size:11px;background-color:#333333;text-align:center;color:#ffffff;border:1px solid #dddddd;"> '. __( 'Please add your services from Dashboard > Services.', 'rexly' ) .' </div>',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_services_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
	) );
	
	// service count
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'number',
		'settings'    		=> 'rexly_service_display_count',
		'label'       		=> __( 'How many services you want to display?', 'rexly' ),
		'section'     		=> 'rexly_services_section',
		'default'     		=> 4,
		'choices'     		=> array(
			'min'  => 1,
			'max'  => 999,
			'step' => 1,
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_services_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// Display order
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        => 'select',
		'settings'    => 'rexly_service_display_order',
		'label'       => __( 'Display Order', 'rexly' ),
		'section'     => 'rexly_services_section',
		'default'     => 'DESC',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'DESC' 	=> esc_attr__( 'New to old', 'rexly' ),
			'ASC' 	=> esc_attr__( 'Old to new', 'rexly' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_services_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );