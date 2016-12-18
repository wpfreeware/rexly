<?php
/*
 *	This file contains "WooCommerce" section & fields.
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */

/*
 *	Check first if WooCommerce is activated
 *
 *	@since rexly 1.0
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	
	/*
	 *	Section -- Shop Layouts
	 *
	 *	@since rexly 1.0
	 */
	 
	rexly_Kirki::add_section( 'rexly_woocommerce_section', array(
	    'title'          	=> __( 'WooCommerce', 'rexly' ),
	    'priority'       	=> 10,
	    'capability'     	=> 'edit_theme_options',
	) );
	
	// shop layouts
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'rexly_woocommerce_layout_option',
		'label'       		=> __( 'Shop layout', 'rexly' ),
		'section'     		=> 'rexly_woocommerce_section',
		'default'     		=> 'ol-right-sidebar',
		'priority'    		=> 10,
		'choices'     		=> array(
			'rexly-right-sidebar'   => esc_attr__( 'Right sidebar', 'rexly' ),
			'rexly-left-sidebar' 	=> esc_attr__( 'Left sidebar', 'rexly' ),
			'rexly-no-sidebar'  	=> esc_attr__( 'No sidebar', 'rexly' ),
			'rexly-fullwidth'  	  	=> esc_attr__( 'Fullwidth', 'rexly' ),
		),
	) );
	
	// Shop Column
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'        		=> 'radio',
		'settings'    		=> 'rexly_woocommerce_shop_column_option',
		'label'       		=> __( 'How many columns you want on shop page to display products?', 'rexly' ),
		'section'     		=> 'rexly_woocommerce_section',
		'default'     		=> 'rexly-shop-four-column',
		'priority'    		=> 10,
		'choices'     		=> array(
			'rexly-shop-four-column'   	 => esc_attr__( '4 column', 'rexly' ),
			'rexly-shop-three-column' 	 => esc_attr__( '3 column', 'rexly' ),
			'rexly-shop-two-column'  	 => esc_attr__( '2 column', 'rexly' ),
		),
	) );
	// enable / disable shop breadcrumb
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_woocommerce_breadcrumb',
		'label'    			=> __( 'Hide WooCommerce breadcrumb.', 'rexly' ),
		'section'  			=> 'rexly_woocommerce_section',
		'priority' 			=> 10,
		'default'     		=> '0',			
	) );
	// result count
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_result_count_breadcrumb',
		'label'    			=> __( 'Hide result count on shop page.', 'rexly' ),
		'section'  			=> 'rexly_woocommerce_section',
		'priority' 			=> 10,
		'default'     		=> '0',			
	) );
	// result count
	rexly_Kirki::add_field( 'rexly_config', array(
		'type'     			=> 'checkbox',
		'settings' 			=> 'rexly_catelog_ordering_breadcrumb',
		'label'    			=> __( 'Hide catalog ordering dropdown on shop page.', 'rexly' ),
		'section'  			=> 'rexly_woocommerce_section',
		'priority' 			=> 10,
		'default'     		=> '0',			
	) );
	
endif;	