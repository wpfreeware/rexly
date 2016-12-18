<?php
/*
 *	This file contains "Callout" section & fields 
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
  	/*
	 *	Section -- Callout | Front Page
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_callout_section', array(
	    'title'          	=> __( 'Callout Action', 'rexly' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'rexly_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Call-to-action
	 *	Fields - Text | Button text | Button url | Background Image | Background size | Background repeat
	 *
	 *	@since rexly 1.0
	 */
	 
	// enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_callout_section_enable_disable',
		'label'       		=> __( 'Callout section on/off', 'rexly' ),		
		'section'     		=> 'rexly_callout_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  				=> esc_attr__( 'Enable', 'rexly' ),
			'off' 				=> esc_attr__( 'Disable', 'rexly' ),
		),
	) );
	
	// callout text
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_callout_text',
		'label'    			=> __( 'Text', 'rexly' ),
		'section'  			=> 'rexly_callout_section',
		'default'  			=> __( 'The most impressive theme you\'ve ever seen', 'rexly' ),
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.call-to-content h2',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button text
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_callout_button_text',
		'label'    			=> __( 'Button Text', 'rexly' ),
		'section'  			=> 'rexly_callout_section',
		'default'  			=> __( 'GET IT NOW', 'rexly' ),
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.call-to-content a',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// button url	
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_callout_button_url',
		'label'    			=> __( 'Button URL', 'rexly' ),
		'section'  			=> 'rexly_callout_section',
		'sanitize_callback' => 'esc_url_raw',
		'default'     		=> '#',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// button target
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_callout_button_target',
		'label'    			=> __( 'Open the link in a new window', 'rexly' ),
		'section'  			=> 'rexly_callout_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	 
    // background image
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'rexly_callout_bg_image',
		'label'       		=> __( 'Background Image', 'rexly' ),
		'section'     		=> 'rexly_callout_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#call-to-action',
                'function' 		=> 'css',
                'property' 		=> 'background-image',
            ),
        ),			
	) );
	
	// background size
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'rexly_callout_bg_size',
		'label'       		=> __( 'Background size', 'rexly' ),
		'section'     		=> 'rexly_callout_section',
		'default'     		=> 'cover',
		'priority'    		=> 10,
		'multiple'    		=> 1,
		'choices'     		=> array(
			'cover' 			=> esc_attr__( 'cover', 'rexly' ),
			'contain' 			=> esc_attr__( 'contain', 'rexly' ),
			'initial' 			=> esc_attr__( 'initial', 'rexly' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );
	
	// background repeat
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'rexly_callout_bg_repeat',
		'label'       		=> __( 'Background repeat', 'rexly' ),
		'section'     		=> 'rexly_callout_section',
		'default'     		=> 'no-repeat',
		'priority'    		=> 10,
		'multiple'    		=> 1,
		'choices'     		=> array(
			'repeat' 			=> esc_attr__( 'Repeat', 'rexly' ),
			'repeat-x' 			=> esc_attr__( 'Repeat X', 'rexly' ),
			'repeat-y' 			=> esc_attr__( 'Repeat Y', 'rexly' ),
			'no-repeat' 		=> esc_attr__( 'No Repeat', 'rexly' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );		
	
	// background overlay color	 	
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'color',
		'settings'    		=> 'rexly_callout_bg_overlay',
		'label'       		=> __( 'Background overlay', 'rexly' ),
		'section'     		=> 'rexly_callout_section',
		'default'     		=> 'rgba(0, 0, 0, 0.8)',
		'priority'    		=> 10,
		'alpha'       		=> true,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_callout_section_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.call-to-overlay',
                'property' 		=> 'background-color',
            ),
        ),					
	) );