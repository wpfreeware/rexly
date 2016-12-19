<?php
/*
 *	This file contains theme general setting options.
 *	Controls: preloaders, scroll top, site layout (box/wide)
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
	
	/*
	 *	Section -- general settings
	 *
	 *	@since rexly 1.0
	 */
	rexly_Kirki::add_section( 'rexly_general_settings_section', array(
	    'title'          	=> __( 'General Settings', 'rexly' ),
	    'priority'       	=> 8,
	    'capability'     	=> 'edit_theme_options',
	) );
		
	// color scheme
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        => 'color',
		'settings'    => 'rexly_color_scheme',
		'label'       => __( 'Site color scheme', 'rexly' ),
		'section'     => 'rexly_general_settings_section',
		'default'     => '#FF6634',
		'priority'    => 10,
		'alpha'       => true,
	) );
	
	// enable/disable header search
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_header_search_option',
		'label'    			=> __( 'Disable header search option', 'rexly' ),
		'section'  			=> 'rexly_general_settings_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// enable/disable preloader
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_preloader_option',
		'label'    			=> __( 'Disable preloader', 'rexly' ),
		'section'  			=> 'rexly_general_settings_section',
		'priority' 			=> 10,
		'default'     		=> '1',		
	) );
	
	// on/off scroll top
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_scroll_top',
		'label'    			=> __( 'Disable scroll top', 'rexly' ),
		'section'  			=> 'rexly_general_settings_section',
		'priority' 			=> 10,
		'default'     		=> '0',		
	) );
	
	// home page menu links
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_menu_target_ids',
		'label'       		=> __( 'Homepage menu target links', 'rexly' ),
		'section'     		=> 'rexly_general_settings_section',
		'default'     		=> '<div style="background:#ffffff;padding:7px;">#header<br/> #about<br/> #service<br/> #portfolio<br/> #testimonial<br/> #team<br/> #from-blog<br/> #contact</div>',
		'priority'    		=> 10,
	) );	
	
	// font-awesome icon
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_font_awesome_css',
		'label'       		=> __( 'Font-Awesome Icons', 'rexly' ),
		'description'       => __( 'Disable Font-Awesome css for better site performance. Useful if you are using any 3rd party plugin that includes font-awesome icons. If you are not sure what you are doing then dont touch it.', 'rexly' ),
		'section'     		=> 'rexly_general_settings_section',
		'default'     		=> '1',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'rexly' ),
			'off' => esc_attr__( 'Disable', 'rexly' ),
		),
	) );
	
	// RTL enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_rtl_option',
		'label'       		=> __( 'RTL', 'rexly' ),
		'section'     		=> 'rexly_general_settings_section',
		'default'     		=> '0',
		'priority'    		=> 10,
		'choices'     		=> array(
			'on'  => esc_attr__( 'Enable', 'rexly' ),
			'off' => esc_attr__( 'Disable', 'rexly' ),
		),
	) );