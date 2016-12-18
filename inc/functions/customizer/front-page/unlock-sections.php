<?php
/*
 *	This file contains "Unlock sections" info.
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
	/*
	 *	Section -- Blog | Front Page
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_home_unlock_section', array(
	    'title'          => __( '4 MORE SECTIONS (PRO)', 'rexly' ),
	    'priority'       => 10,
	    'panel'       	 => 'rexly_front_page_panel',
	    'capability'     => 'edit_theme_options',
	) );	

	/*
	 *	Fields -- unlock info
	 *
	 *	@since rexly 1.0
	 */
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'custom',
		'settings'    		=> 'rexly_unlock_section',
		'section'     		=> 'rexly_home_unlock_section',
		'default'     		=> '<div><a href="https://www.wpfreeware.com/rexly-pro/" target="_blank">'. esc_html__( 'Pro Version', 'rexly' ) .'</a> '. esc_html__( 'comes with 4 more sections with awesome features such as counters, pricing tables, client logos, Contact form, Google map & some other features. Please upgrade to PRO to have them all.', 'rexly' ) .'</div>',
		'priority'    		=> 10,
	) );