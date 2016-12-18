<?php
/*
 *	This file contains "Team Members" section & fields 
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
  	/*
	 *	Section -- Team Members | Front Page
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_team_members_section', array(
	    'title'          	=> __( 'Team Members', 'rexly' ),
	    'priority'       	=> 10,
	    'panel'       	 	=> 'rexly_front_page_panel',
	    'capability'     	=> 'edit_theme_options',
	) );
	
	
	/*
	 *	Fields -- Team Members
	 *	Fields - Enable, Disable | Title | Description
	 *
	 *	@since rexly 1.0
	 */
	 
	// enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'switch',
		'settings'    		=> 'rexly_team_members_enable_disable',
		'label'       		=> __( 'Team section on/off', 'rexly' ),		
		'section'     		=> 'rexly_team_members_section',
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
		'settings' 			=> 'rexly_team_members_title',
		'label'    			=> __( 'Title', 'rexly' ),
		'section'  			=> 'rexly_team_members_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_team_members_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.team-area .title-area .tittle',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// Description
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'textarea',
		'settings' 			=> 'rexly_team_members_desc',
		'label'    			=> __( 'Description', 'rexly' ),
		'section'  			=> 'rexly_team_members_section',
		'default'  			=> '',
		'priority' 			=> 10,
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_team_members_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),
        'transport'   		=> 'postMessage',
        'js_vars'     		=> array(
            array(
                'element'  		=> '.team-area .title-area p',
                'function' 		=> 'html',
            ),
        ),				
	) );
	
	// team member count
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'number',
		'settings'    		=> 'rexly_team_member_display_count',
		'label'       		=> __( 'How many members you want to display?', 'rexly' ),
		'section'     		=> 'rexly_team_members_section',
		'default'     		=> 4,
		'choices'     		=> array(
			'min'  => 1,
			'max'  => 999,
			'step' => 1,
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_team_members_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );
	
	// Display order
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        => 'select',
		'settings'    => 'rexly_team_member_display_order',
		'label'       => __( 'Display Order', 'rexly' ),
		'section'     => 'rexly_team_members_section',
		'default'     => 'DESC',
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'DESC' 	=> esc_attr__( 'New to old', 'rexly' ),
			'ASC' 	=> esc_attr__( 'Old to new', 'rexly' ),
		),
		'active_callback'   => array(
			array(
				'setting'  		=> 'rexly_team_members_enable_disable',
				'operator' 		=> '==',
				'value'    		=> 1,
			),
		),		
	) );