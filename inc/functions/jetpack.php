<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function rexly_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' 		=> 'rexly-infinite-wrap',
		'render'    		=> 'rexly_infinite_scroll_render',
		'footer_widgets' 	=> false,
		'footer'    		=> false,
		'wrapper'        	=> false,
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'rexly_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function rexly_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
			get_template_part( 'content', '' );
	}
}

/**
 * Infinite scroll button custom text for click event.
 */
if( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) :
	function rexly_infinite_scroll_custom_text() {
		 
		if ( is_home() || is_archive() ) {
	
			echo '
			
			    <script type="text/javascript">
				    //<![CDATA[
				    infiniteScroll.settings.text = "'. __( 'Load More', 'rexly' ) .'";
				    //]]>
			    </script>
			    
			    ';		
			
		}
	}
	add_action( 'wp_footer', 'rexly_infinite_scroll_custom_text' );
endif;