<?php
/*
 *  Add various theme necessary functions.
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 	
/*
 *	Push header 30px to bottom 
 *	if toolbar is showing
 *
 *	@since rexly 1.0
 */
if ( is_admin_bar_showing() ) {
	
	function rexly_push_navbar(){	?>
		
		<style type="text/css">
			.navbar-fixed-top{
				margin-top: 32px;
			}
		</style>
	
	<?php }
		
	add_action( 'wp_head', 'rexly_push_navbar' );
	
}

/**
 *  set custom post exceprt length
 *
 *  @since rexly 1.0
 */
 function rexly_custom_post_excerpt(){
	global $post;
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 250);	// set the length in character
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

/*
 *	Blog content column layouts
 *
 *	@since rexly 1.0
 */
function rexly_blog_content_column(){

	 $blog_layout	=	esc_html( get_theme_mod( 'rexly_blog_layout_option', 'rexly-right-sidebar' ) );
	 
	 // right sidebar
	 if( $blog_layout 	  == 'rexly-right-sidebar' ) :
	 	
	 	$blog_content_column	=	'col-md-8';
	 
	 // left sidebar
	 elseif( $blog_layout == 'rexly-left-sidebar' ) :
	 
	 	$blog_content_column	=	'col-md-8 col-md-push-4';
	 
	 // no sidebar	
	 elseif( $blog_layout == 'rexly-no-sidebar' ) :
	 
	 	$blog_content_column	=	'col-md-8 col-md-offset-2';
	 
	 // fullwidth	
	 elseif( $blog_layout == 'rexly-fullwidth' ) :
	 
	 	$blog_content_column	=	'col-md-12';									 
	 	
	 endif;
	 
	return $blog_content_column;	
}

/*
 *	Blog sidebar column layouts
 *
 *	@since rexly 1.0
 */
function rexly_blog_sidebar_column(){

	 $blog_layout	=	esc_html( get_theme_mod( 'rexly_blog_layout_option', 'rexly-right-sidebar' ) );
	 
	 // right sidebar
	 if( $blog_layout 	  == 'rexly-right-sidebar' ) :
	 	
	 	$blog_sidebar_column	=	'col-md-4';
	 
	 // left sidebar
	 elseif( $blog_layout == 'rexly-left-sidebar' ) :
	 
	 	$blog_sidebar_column	=	'col-md-4 col-md-pull-8';
	 	
	 endif;
	 
	return $blog_sidebar_column;	
}

/*
 *	Page content column layouts
 *
 *	@since rexly 1.0
 */
function rexly_page_content_column(){

	/*
	 *	Set variable - Page layout
	 *
	 *	@since rexly 1.0
	 */
	 $page_layout	=	esc_html( get_post_meta( get_the_ID(), '_rexly_page_layout_option', true ) );
	 
	 // right sidebar
	 if( $page_layout 	  == 'rexly-page-right-sidebar' ) :
	 	
	 	$page_content_column	=	'col-md-8';
	 
	 // left sidebar
	 elseif( $page_layout == 'rexly-page-left-sidebar' ) :
	 
	 	$page_content_column	=	'col-md-8 col-md-push-4';
	 
	 // no sidebar	
	 elseif( $page_layout == 'rexly-page-no-sidebar' ) :
	 
	 	$page_content_column	=	'col-md-8 col-md-offset-2';
	 
	 // fullwidth	
	 elseif( $page_layout == 'rexly-page-fullwidth' ) :
	 
	 	$page_content_column	=	'col-md-12';
	 	
	 else:
	 
	 	$page_content_column	=	'col-md-8';										 
	 	
	 endif;
	 
	 return $page_content_column;
	
}


/*
 *	Page sidebar column layouts
 *
 *	@since rexly 1.0
 */
function rexly_page_sidebar_column(){

	/*
	 *	Set variable - Page layout
	 *
	 *	@since rexly 1.0
	 */
	 $page_layout	=	esc_html( get_post_meta( get_the_ID(), '_rexly_page_layout_option', true ) );
	 
	 // right sidebar
	 if( $page_layout 	  == 'rexly-page-right-sidebar' ) :
	 	
	 	$page_sidebar_column	=	'col-md-4';
	 
	 // left sidebar
	 elseif( $page_layout == 'rexly-page-left-sidebar' ) :
	 
	 	$page_sidebar_column	=	'col-md-4 col-md-pull-8';
	 	
	 else:
	 
	 	$page_sidebar_column	=	'col-md-4';										 
	 	
	 endif;
	 
	 return $page_sidebar_column;
	
}
								 
/*
 *	Shop content column layouts
 *	called in:	woo-setup.php
 *
 *	@since rexly
 */
 
 // First check if WooCommerce installed & activated 
 if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	 function rexly_shop_content_column(){
		 
		 $shop_layouts	=	esc_html( get_theme_mod( 'rexly_woocommerce_layout_option', 'rexly-right-sidebar' ) );
		 
		 if( $shop_layouts == 'rexly-right-sidebar' ) :
		 
		 	$shop_content_column	=	'col-md-8';
		 
		 elseif( $shop_layouts == 'rexly-left-sidebar' ) :
		 	
		 	$shop_content_column	=	'col-md-8 col-md-push-4';
		 
		 elseif( $shop_layouts 	==	'rexly-no-sidebar' ) :
		 	
		 	$shop_content_column	=	'col-md-10 col-md-offset-1';
		 
		 elseif( $shop_layouts == 'rexly-fullwidth' ) :
		 	
		 	$shop_content_column	=	'col-md-12';
		 	
		 else:
	 
		 	$page_content_column	=	'col-md-8';
		 
		 endif;
		 
		 return $shop_content_column;
	 }
 }
 
 /*
  *	Shop sidebar column layouts
  *	called in: sidebar-shop.php
  *	
  *	@since rexly
  */
 
 // First check if WooCommerce installed & activated 
 if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { 
	 function rexly_shop_sidebar_column(){
		 
		 $shop_layouts	=	esc_html( get_theme_mod( 'rexly_woocommerce_layout_option', 'rexly-right-sidebar' ) );
		 
		 if( $shop_layouts == 'rexly-right-sidebar' ) :
		 	
		 	$shop_sidebar_column	=	'col-md-4';
		 
		 elseif( $shop_layouts == 'rexly-left-sidebar' ) :
		 	
		 	$shop_sidebar_column	=	'col-md-4 col-md-pull-8';
		 
		 endif;
		 
		 return $shop_sidebar_column;
		 
	 }
 }
 
/*
 *	Shop column layouts
 *	@called in: woocommerce/loop/look-start.php
 *	
 *	@since rexly
 */
 
 // First check if WooCommerce installed & activated 
 if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	 function rexly_shop_column(){
		 
		 $shop_column	=	esc_html( get_theme_mod( 'rexly_woocommerce_shop_column_option', 'rexly-shop-four-column' ) );
		 
		 if( $shop_column == 'rexly-shop-four-column' ) :
		 
		 	$shop_column_count	=	'rexly-shop-col-4';
		 
		 elseif( $shop_column == 'rexly-shop-three-column' ) :
		 	
		 	$shop_column_count	=	'rexly-shop-col-3';
		 
		 elseif( $shop_column 	==	'rexly-shop-two-column' ) :
		 	
		 	$shop_column_count	=	'rexly-shop-col-2';
		 	
		 else:
	 
		 	$shop_column_count	=	'rexly-shop-col-4';
		 
		 endif;
		 
		 return $shop_column_count;
	 }
 } 

/**
 *  Numeric post pagination
 *
 *  @since rexly 1.0
 */

function rexly_numeric_page_navi() {
    global $wp_query;
    $big   = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
            'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' 		=> '?paged=%#%',
            'current' 		=> max( 1, get_query_var('paged') ),
            'total' 		=> $wp_query->max_num_pages,
            'prev_next' 	=> false,
            'type'  		=> 'array',
			'prev_text'    	=> '<span aria-hidden="true">&laquo;</span>',
			'next_text'    	=> '<span aria-hidden="true">&raquo;</span>',
			'end_size'     	=> 3,
			'mid_size'     	=> 3,			
        ) );
        
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<ul class="pagination blog-pagination">';
            foreach ( $pages as $page ) {
                    echo '<li> '. $page .' </li>';
            }
           echo '</ul>';
        }
}

/*
 *	Add classes to author avatar img tag
 *
 *	@since rexly 1.0
 */
function rexly_add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar media-object author-img news-img", $class);
    return $class;
}
add_filter('get_avatar','rexly_add_gravatar_class');