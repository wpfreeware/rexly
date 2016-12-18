<?php
/*
 *	This file contains "Blog Archive" section & fields.
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
	/*
	 *	Section -- Blog Layouts
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_blog_layout_section', array(
	    'title'          	=> __( 'Blog Settings', 'rexly' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	    'panel'     		=> 'rexly_blog_panel',
	) );
	
	// blog layouts
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'rexly_blog_layout_option',
		'label'       		=> __( 'Choose blog layout', 'rexly' ),
		'section'     		=> 'rexly_blog_layout_section',
		'default'     		=> 'rexly-right-sidebar',
		'priority'    		=> 10,
		'choices'     		=> array(
			'rexly-right-sidebar'   => esc_attr__( 'Right sidebar', 'rexly' ),
			'rexly-left-sidebar' 	=> esc_attr__( 'Left sidebar', 'rexly' ),
			'rexly-no-sidebar'  	=> esc_attr__( 'No sidebar', 'rexly' ),
			'rexly-fullwidth'  	  	=> esc_attr__( 'Fullwidth', 'rexly' ),
		),
	) );
	
	// excerpt or full content
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'rexly_blog_excerpt_full',
		'label'       		=> __( 'Excerpt or Full Content', 'rexly' ),
		'description'       => __( 'Choose to have excerpt or full content on archive pages index/archive/search.', 'rexly' ),		
		'section'     		=> 'rexly_blog_layout_section',
		'default'     		=> 'rexly-excerpt',
		'priority'    		=> 10,
		'choices'     		=> array(
			'rexly-excerpt'   		  => esc_attr__( 'Excerpt', 'rexly' ),
			'rexly-full-content' 	  => esc_attr__( 'Full Content', 'rexly' ),
		),
	) );
	
	// on/off pagination
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_num_pagination',
		'label'    			=> __( 'Hide blog numeric pagination', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// on/off category
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_meta_cat',
		'label'    			=> __( 'Hide categories', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// on/off author name
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_meta_author',
		'label'    			=> __( 'Hide author name', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// on/off date
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_meta_date',
		'label'    			=> __( 'Hide date', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// on/off comments
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_comments_count',
		'label'    			=> __( 'Hide post comments count', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );

	// tags enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_single_tags_on_off',
		'label'    			=> __( 'Hide tags in post single', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// next/prev enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_single_post_navi',
		'label'    			=> __( 'Hide next/prev in post single', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );
	
	// author bio enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_single_author_bio',
		'label'    			=> __( 'Hide author bio in post single', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );	
	
	// related posts enable/disable
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_blog_single_related_posts',
		'label'    			=> __( 'Hide related posts in post single', 'rexly' ),
		'section'  			=> 'rexly_blog_layout_section',
		'priority' 			=> 10,
		'default'     		=> '0',				
	) );