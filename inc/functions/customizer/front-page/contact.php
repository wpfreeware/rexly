<?php
/*
 *	This file contains "Contact" section & fields 
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
  	/*
	 *	Section -- Contact | Front Page
	 *
	 *	@since rexly 1.0
	 */
	rexly_Kirki::add_section( 'rexly_contact_section', array(
	    'title'          	=> __( 'Contact', 'rexly' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'rexly_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Contact
	 *	Fields - Enable/Disable | Address Title | Addresses | Contact form title | Contact shortcode
	 *
	 *	@since rexly 1.0
	 */
	 
	// enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_contact_enable_disable',
		'label'       		=> __( 'Contact section on/off', 'rexly' ),		
		'section'     		=> 'rexly_contact_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  				=> esc_attr__( 'Enable', 'rexly' ),
			'off' 				=> esc_attr__( 'Disable', 'rexly' ),
		),
	) );
	
    // background image
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'rexly_contact_bg_image',
		'label'       		=> __( 'Background Image', 'rexly' ),
		'section'     		=> 'rexly_contact_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#contact',
                'function' 		=> 'css',
                'property' 		=> 'background-image',
            ),
        ),			
	) );
	
	// background size
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'rexly_contact_bg_size',
		'label'       		=> __( 'Background size', 'rexly' ),
		'section'     		=> 'rexly_contact_section',
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
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );
	
	// background repeat
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'rexly_contact_bg_repeat',
		'label'       		=> __( 'Background repeat', 'rexly' ),
		'section'     		=> 'rexly_contact_section',
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
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );
	
	// background overlay color	 	
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'color',
		'settings'    		=> 'rexly_contact_bg_overlay',
		'label'       		=> __( 'Background overlay', 'rexly' ),
		'section'     		=> 'rexly_contact_section',
		'default'     		=> 'rgba(0, 0, 0, 0.8)',
		'priority'    		=> 10,
		'alpha'       		=> true,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.contact-overlay',
                'property' 		=> 'background-color',
            ),
        ),					
	) );
	
	// address section title
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_contact_address_section_title',
		'label'    			=> __( 'Address section title', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left > h2',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address title 1
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_contact_address_title_1',
		'label'    			=> __( 'Address Title 1', 'rexly' ),
		'description'    	=> __( 'ex: Postal address', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-one > h4',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address details 1
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_contact_address_details_1',
		'label'    			=> __( 'Address Details 1', 'rexly' ),
		'description'    	=> __( 'ex: PO Box 16122 Collins Street West..', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-one > p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address title 2
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_contact_address_title_2',
		'label'    			=> __( 'Address Title 2', 'rexly' ),
		'description'    	=> __( 'ex: Headquarter', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-two > h4',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address details 2
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_contact_address_details_2',
		'label'    			=> __( 'Address Details 2', 'rexly' ),
		'description'    	=> __( 'ex: 121 King Street, Melbourne...', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-two > p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address title 3
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_contact_address_title_3',
		'label'    			=> __( 'Address Title 3', 'rexly' ),
		'description'    	=> __( 'ex: Phone', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-three > h4',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address details 3
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_contact_address_details_3',
		'label'    			=> __( 'Address Details 3', 'rexly' ),
		'description'    	=> __( 'ex: Official number: (123) 000 0000', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-three > p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address title 4
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'text',
		'settings' 			=> 'rexly_contact_address_title_4',
		'label'    			=> __( 'Address Title 4', 'rexly' ),
		'description'    	=> __( 'ex: E-Mail', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-four > h4',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// address details 4
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_contact_address_details_4',
		'label'    			=> __( 'Address Details 4', 'rexly' ),
		'description'    	=> __( 'ex: support@example.com', 'rexly' ),
		'section'  			=> 'rexly_contact_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_contact_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.contact-left .address-four > p',
                'function' 		=> 'html',
            ),
        ),				
	) );