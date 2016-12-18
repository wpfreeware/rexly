<?php
/*
 *	This file contains "Blog Title" section & fields.
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
	/*
	 *	Section -- Blog Title
	 *
	 *	@since rexly 1.0
	 */
	rexly_Kirki::add_section( 'rexly_blog_section', array(
	    'title'          	=> __( 'Blog Title', 'rexly' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	    'panel'     		=> 'rexly_blog_panel',
	) );
	// enable/disable title section
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_blog_title_section',
		'label'       		=> __( 'Title section on/off', 'rexly' ),
		'description'       => __( 'This section will apply on all the blog archive pages such as category, tag, search.', 'rexly' ),
		'section'     		=> 'rexly_blog_section',
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
		'settings' 			=> 'rexly_blog_title_text',
		'label'    			=> __( 'Title', 'rexly' ),
		'section'  			=> 'rexly_blog_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.blog-banner-area h2',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// text color color	 	
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'color',
		'settings'    		=> 'rexly_blog_title_text_color',
		'label'       		=> __( 'Text color', 'rexly' ),
		'section'     		=> 'rexly_blog_section',
		'default'     		=> '#ffffff',
		'priority'    		=> 10,
		'alpha'       		=> true,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '#blog-banner .blog-banner-area h2',
                'property' 		=> 'color',
            ),
        ),					
	) );
	
	// font-size
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'slider',
		'settings'    		=> 'rexly_blog_title_text_size',
		'label'       		=> __( 'Title Font Size', 'rexly' ),
		'section'     		=> 'rexly_blog_section',
		'default'     		=> 40,
		'choices'     		=> array(
			'min'  => '40',
			'max'  => '100',
			'step' => '1',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '.blog-banner-area h2',
                'property' 		=> 'font-size',
                'units'    		=> 'px',
            ),            
        ),				
	) );	
	// background image info
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_blog_title_bg_msg',
		'label'    			=> __( 'Background Image', 'rexly' ),
		'section'     		=> 'rexly_blog_section',
		'default'     		=> __( 'Please upload image by going back to the Customize > Header Image menu', 'rexly' ),
		'priority'    		=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );
	
	// background size
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'select',
		'settings'    		=> 'rexly_blog_title_bg_img_size',
		'label'       		=> __( 'Background size', 'rexly' ),
		'section'     		=> 'rexly_blog_section',
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
				'setting'  		=> 'rexly_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),		
	) );
	
	// top/bottom padding
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'slider',
		'settings'    		=> 'rexly_blog_title_padding',
		'label'       		=> __( 'Top/Bottom Padding', 'rexly' ),
		'section'     		=> 'rexly_blog_section',
		'default'     		=> 102,
		'choices'     		=> array(
			'min'  => '70',
			'max'  => '1000',
			'step' => '1',
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_blog_title_section',
				'operator' 		=> '==',
				'value'    		=> 1,
			),			
		),
		'transport'   		=> 'auto',
        'output'      		=> array(
            array(
                'element'  		=> '#blog-banner .blog-banner-area',
                'property' 		=> 'padding-top',
                'units'    		=> 'px',
            ),           
        ),				
	) );
	
	// breadcrumbs enable/disable
	if ( function_exists('yoast_breadcrumb') ) :
		rexly_Kirki::add_field( 'rexly_config', array(
			'type'     			=> 'checkbox',
			'settings' 			=> 'rexly_blog_title_breadcrumb',
			'label'    			=> __( 'Hide Yoast SEO breadcrumb for blog archive.', 'rexly' ),
			'section'  			=> 'rexly_blog_section',
			'priority' 			=> 10,
			'default'     		=> '0',
			'active_callback'   => array(
				array(
					'setting'  		=> 'rexly_blog_title_section',
					'operator' 		=> '==',
					'value'    		=> 1,
				),			
			),			
		) );
	endif;