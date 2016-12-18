<?php
/*
 *	enqueue theme required styles & scripts
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
function rexly_scripts() {
	
	 /*
	  *	WP_Theme object
	  *
	  *	@since rexly 1.0
	  */
	 $rexly_pro = wp_get_theme( );
	 
	/*-----------------------------*
	 *	css files
	 *-----------------------------*/
    // font-awesome
    $font_awesome	=	esc_html( get_theme_mod( 'rexly_font_awesome_css', '1' ) );
    if( $font_awesome ) :
    	wp_enqueue_style( 'rexly-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all' );
    endif;
    // bootstrap
    wp_enqueue_style( 'rexly-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.5', 'all' );
    // slick slider
    wp_enqueue_style( 'rexly-slick', get_template_directory_uri() . '/css/slick.css', array(), $rexly_pro->version, 'all' );
	// main stylesheet
    wp_enqueue_style( 'rexly-primary-style', get_template_directory_uri() . '/style.css', false, $rexly_pro->version, 'all' );
    // rtl css
    $rtl = esc_html( get_theme_mod( 'rexly_rtl_option', '0' ) );
    if( $rtl == true ) :
    	wp_enqueue_style( 'rexly-rtl', get_template_directory_uri() . '/css/rtl.css', false, $rexly_pro->version, 'all' );
    endif;    
	// open sans font
    wp_enqueue_style( 'rexly-open-sans-font', "//fonts.googleapis.com/css?family=Open+Sans", 'all' );
    // Raleway font
    wp_enqueue_style( 'rexly-raleway-font', "//fonts.googleapis.com/css?family=Raleway", 'all' );
    // pacifico font
    wp_enqueue_style( 'rexly-raleway-font', "fonts.googleapis.com/css?family=Pacifico", 'all' );    
  
    

	/*----------------------------*
	 *	js files
	 *----------------------------*/
	 
	// comment reply
   	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
	// bootstrap js
	wp_enqueue_script( 'rexly-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.5', true );
	
	// slick slider js
	wp_enqueue_script( 'rexly-slick-js', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), '1.6.0', true );
	if( is_page_template( 'front-page.php' ) || is_front_page() ) :	
		// waypoint js
		wp_enqueue_script( 'rexly-waypoint-js', get_template_directory_uri() . '/js/waypoints.js', array( 'jquery' ), '2.0.3', true );
		// counterup js
		wp_enqueue_script( 'rexly-counterup-js', get_template_directory_uri() . '/js/jquery.counterup.js', array( 'jquery' ), '1.0', true );
	endif;	
	// custom js
	wp_enqueue_script( 'rexly-custom-js', get_template_directory_uri() . '/js/custom.js', false, $rexly_pro->version , true );

	// html5shiv & respond - IE Fallbacks
	wp_enqueue_script( 'rexly-html5shiv', get_template_directory_uri(). '/js/html5shiv.js', false, '3.7.3', false);
	wp_script_add_data( 'rexly-html5shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'rexly-respond', get_template_directory_uri(). '/js/respond.js', false, null, false);
	wp_script_add_data( 'rexly-respond', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'rexly_scripts' );