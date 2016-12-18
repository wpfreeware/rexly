<?php
/*
 *	This file contains "front page" panel, section & fields.
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
	/*
	 *	Panel -- Front Page
	 *
	 *  @since rexly 1.0
	 */	 	
	rexly_Kirki::add_panel( 'rexly_front_page_panel', array(
	    'priority'    => 10,
	    'title'       => __( 'Front Page', 'rexly' ),
	) );
	

	/*  
	 *
	 *	Section/Fields - About | Front Page
	 *	Contains "About" section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/about.php' );
	
	/*  
	 *
	 *	Section/Fields - Services | Front Page
	 *	Contains "Services" section.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/services.php' );
	
	/*  
	 *
	 *	Section/Fields - Portfolio | Front Page
	 *	Contains "Portfolio" section.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/portfolios.php' );
	
	/*  
	 *
	 *	Section/Fields - callout Section | Front Page
	 *	Contains "callout" section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/callout-action.php' );
	
	/*  
	 *
	 *	Section/Fields - Testimonials | Front Page
	 *	Contains "testimonials" section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/testimonials.php' );
	
	/*  
	 *
	 *	Section/Fields - Team Members | Front Page
	 *	Contains "Team Members" section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/team-members.php' );
	
	/*  
	 *
	 *	Section/Fields - Blog | Front Page
	 *	Contains "Blog" section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/blog.php' );
	
	/*  
	 *
	 *	Section/Fields - Contact | Front Page
	 *	Contains "Contact" section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/front-page/contact.php' );