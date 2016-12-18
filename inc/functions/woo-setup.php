<?php
/**
 *  WooCommerce Functions for rexly theme
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
if ( ! function_exists( 'rexly_woo_setup' ) ) :

	function rexly_woo_setup() {
		/*
		 * Enable support for WooCemmerce.
		*/
		add_theme_support( 'woocommerce' );
	
	}
	
endif; // outlook_woo_setup
add_action( 'after_setup_theme', 'rexly_woo_setup' );

/*
 *	Enable / Disable woocommerce breadcrumb
 *
 *	@since rexly 1.0
 */
$woo_breadcrumb	=	esc_html( get_theme_mod( 'rexly_woocommerce_breadcrumb', '0' ) );
if( $woo_breadcrumb ) :
	remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
endif;

/*
 *	Enable / Disable result count on shop page
 *
 *	@since rexly 1.0
 */
$woo_result_count	=	esc_html( get_theme_mod( 'rexly_result_count_breadcrumb', '0' ) );
if( $woo_result_count ) :
	remove_action( 'woocommerce_before_shop_loop','woocommerce_result_count', 20);
endif;

/*
 *	Enable / Disable catalog ordering
 *
 *	@since rexly 1.0
 */
$woo_catalog_ordering	=	esc_html( get_theme_mod( 'rexly_catelog_ordering_breadcrumb', '0' ) );
if( $woo_catalog_ordering ) :
	remove_action( 'woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);
endif;

// First let's remove original WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Now we can add our own, the same used for theme Pages
add_action('woocommerce_before_main_content', 'rexly_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'rexly_wrapper_end', 10);

function rexly_wrapper_start() {
	echo ' <div class="'. rexly_shop_content_column() .'"> <div class="blog-left blog-details"> ';
}

function rexly_wrapper_end() {
	echo '</div> </div>';
}

/*
 *	Change number or products per row to 3
 *
 *	@since rexly 1.0
 */
add_filter('loop_shop_columns', 'rexly_shop_loop_columns');
if ( !function_exists('rexly_shop_loop_columns') ) {
	function rexly_shop_loop_columns() {
		$shop_column	=	esc_html( get_theme_mod( 'rexly_woocommerce_shop_column_option', 'rexly-shop-four-column' ) );
		if( $shop_column == 'rexly-shop-four-column' ) :
			$column = 4;
		elseif( $shop_column == 'rexly-shop-three-column' ) :
			$column = 3;
		elseif( $shop_column == 'rexly-shop-two-column' ) :
			$column = 2;
		elseif( $shop_column == 'rexly-shop-one-column' ) :
			$column = 1;
		else :
			$column = 4;
		endif;
		
		return $column;
	}
}