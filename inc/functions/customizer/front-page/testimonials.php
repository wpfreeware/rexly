<?php
/*
 *	This file contains "Testimonials" section & fields 
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
  	/*
	 *	Section -- Testimonials | Front Page
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_testimonials_section', array(
	    'title'          	=> __( 'Testimonials', 'rexly' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'rexly_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Testimonials
	 *	Fields - Enable, Disable | Title
	 *
	 *	@since rexly 1.0
	 */
	 
	// enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_testimonials_enable_disable',
		'label'       		=> __( 'Testimonials section on/off', 'rexly' ),		
		'section'     		=> 'rexly_testimonials_section',
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
		'settings' 			=> 'rexly_testimonials_title',
		'label'    			=> __( 'Title', 'rexly' ),
		'section'  			=> 'rexly_testimonials_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.testimonial-area .title-area .tittle',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// Add portfolio item info
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_testimonials_info',
		'section'     		=> 'rexly_testimonials_section',
		'default'     		=> '<div style="padding:5px;font-size:11px;background-color:#333333;text-align:center;color:#ffffff;border:1px solid #dddddd;"> '. __( 'Please add your testimonials from Dashboard > Testimonials.', 'rexly' ) .' </div>',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_portfolio_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
	) );
	
	// testimonials count
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'number',
		'settings'    		=> 'rexly_testimonials_display_count',
		'label'       		=> __( 'How many testimonials you want to display?', 'rexly' ),
		'section'     		=> 'rexly_testimonials_section',
		'default'     		=> 4,
		'choices'     		=> array(
			'min'  => 1,
			'max'  => 999,
			'step' => 1,
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// Display order
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        => 'select',
		'settings'    => 'rexly_testimonials_display_order',
		'label'       => __( 'Display Order', 'rexly' ),
		'section'     => 'rexly_testimonials_section',
		'default'     => 'DESC',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'DESC' 	=> esc_attr__( 'New to old', 'rexly' ),
			'ASC' 	=> esc_attr__( 'Old to new', 'rexly' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
    // background image
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'image',
		'settings'    		=> 'rexly_testimonials_bg_image',
		'label'       		=> __( 'Background Image', 'rexly' ),
		'section'     		=> 'rexly_testimonials_section',
		'default'     		=> '',
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '#testimonial',
                'function' 		=> 'css',
                'property' 		=> 'background-image',
            ),
        ),			
	) );
	
	// background size
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'rexly_testimonials_bg_size',
		'label'       		=> __( 'Background size', 'rexly' ),
		'section'     		=> 'rexly_testimonials_section',
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
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );
	
	// background repeat
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'rexly_testimonials_bg_repeat',
		'label'       		=> __( 'Background repeat', 'rexly' ),
		'section'     		=> 'rexly_testimonials_section',
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
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );		
	
	// background overlay color	 	
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'color',
		'settings'    		=> 'rexly_testimonials_bg_overlay',
		'label'       		=> __( 'Background overlay', 'rexly' ),
		'section'     		=> 'rexly_testimonials_section',
		'default'     		=> 'rgba(0, 0, 0, 0.8)',
		'priority'    		=> 10,
		'alpha'       		=> true,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.testimonial-overlay',
                'property' 		=> 'background-color',
            ),
        ),					
	) );
	
	// clients logo slide speed
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'slider',
		'settings'    		=> 'rexly_testimonials_slide_speed',
		'label'       		=> __( 'Slide speed (milliseconds)', 'rexly' ),
		'section'     		=> 'rexly_testimonials_section',
		'default'     		=> 3000,
		'choices'     		=> array(
			'min'  => '3000',
			'max'  => '100000',
			'step' => '1000',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );    

	// clients logo slide autoplay
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_testimonials_autoplay_on_off',
		'label'    			=> __( 'Check to disable slide autoplay', 'rexly' ),
		'section'  			=> 'rexly_testimonials_section',
		'priority' 			=> 10,
		'default'     		=> '0',
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_testimonials_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),				
	) );