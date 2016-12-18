<?php
/*
 *	Contains theme basic setup, registration & after_setup_theme actions
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
  
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since rexly 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1140;
}
if ( ! function_exists( 'rexly_setup' ) ) :
 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override rexly_setup() in a child theme, add your own rexly_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails, title, custom-logo and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since rexly 1.0
 */
function rexly_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain('rexly', get_template_directory() . '/languages');
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 *  Custom Header
	 *
	 *	@since rexly 1.0
	 */		
	add_theme_support( 'custom-header', apply_filters( 'rexly_custom_header_args', array(
		'default-image'          => '',
		'width'                  => 2100,
		'height'                 => 300,
		'flex-height'            => true,
	) ) );
	
	/*
	 *  Custom logo
	 *
	 *	@since rexly 1.0
	 */		
	add_theme_support( 'custom-logo', array(
		'height'      => 150,
		'width'       => 156,	
		'flex-height' => true,
		'flex-width'  => true,
	) );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * & custom image sizes
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1280, 940 ); 						// default size
	
	
	/**
	 * Apply theme's stylesheet to the visual editor.
	 *
	 * @uses add_editor_style() Links a stylesheet to visual editor
	 *
	 *	@since rexly 1.0
	 */
	 add_editor_style( 'css/editor-style.css' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	
	/*
	 *	Register menus
	 */
 	register_nav_menu( 'rexly-home-menu', __( 'Home Menu', 'rexly' ) );				// primary menu
 	register_nav_menu( 'rexly-global-menu', __( 'Global Menu', 'rexly' ) );			// secondary menu
	
}
endif; // rexly_setup
add_action( 'after_setup_theme', 'rexly_setup' );