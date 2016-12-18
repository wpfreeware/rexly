<?php
/*
 *	This file contains Blog, Archive, Search & 
 *	Blog Single pages panel, section & fields.
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 	/*
	 *	Panel -- Blog
	 *
	 *  @since rexly 1.0
	 */	
	rexly_Kirki::add_panel( 'rexly_blog_panel', array(
	    'priority'    => 10,
	    'title'       => __( 'Blog', 'rexly' ),
	) );
	
	/* 
	 *
	 *	Section/Fields - Blog Settings | Blog Archive & Single pages
	 *	Contains Blog Settings section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/blog/blog-settings.php' );	
	
	/*  
	 *
	 *	Section/Fields - Blog Title | Blog Archive pages
	 *	Contains Blog Title section & fields.
	 *
	 *	@since rexly 1.0
	 */
	require_once( get_template_directory() . $customizer_path . '/blog/blog-title.php' );