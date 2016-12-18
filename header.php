<?php
/**
 * The Header for rexly theme
 *
 * Displays all of the <head> section and everything up till header styles
 *
 * 	@package WordPress
 * 	@subpackage rexly
 *	@version 1.0
 *	@since rexly 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
	 
	<?php
		/*
		 *	Enable / Disable preloader
		 *
		 *	@since rexly 1.0
		 */
		 $preloader	=	esc_html( get_theme_mod( 'rexly_preloader_option', '1' ) );
		 if( $preloader == '0' ) :
	?>
			<!-- BEGAIN PRELOADER -->
		    <div id="preloader">
		      	<div class="loader">&nbsp;</div>
		    </div>
		    <!-- END PRELOADER -->
    <?php endif; ?>

	<?php
		/*
		 *	Enable / Disable preloader
		 *
		 *	@since rexly 1.0
		 */
		 $scroll_top	=	esc_html( get_theme_mod( 'rexly_scroll_top', '0' ) );
		 if( $scroll_top == '0' ) :
	?>
			<!-- SCROLL TOP BUTTON -->
		    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
			<!-- END SCROLL TOP BUTTON -->
	<?php endif; ?>

	<!-- Start header section -->  
	<?php get_template_part( 'inc/templates/header', 'bar' ); ?>
  	<!-- End header section -->

  	<!-- Start menu section -->
  	<section id="menu-area">
    	<nav class="navbar navbar-default main-navbar" role="navigation">  
			<div class="container">
		        <div class="navbar-header">
		          	<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
		          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only"><?php _e( 'Toggle navigation', 'rexly' ); ?></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
					</button>
					
					<?php 
						if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
						 
						$custom_logo_id 	= get_theme_mod( 'custom_logo' );
						$custom_logo 		= wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
						
						<!-- Image logo  -->
				        <a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
					        <img src="<?php echo $custom_logo[0]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					    </a>
			        
			        <?php else : ?>
			        
				        <!-- Text logo  -->
						<a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
							<span><?php bloginfo( 'name', 'display' ); ?></span>
						</a>
						
					<?php endif; ?>
						 
		        </div>
						
		        <div id="navbar" class="navbar-collapse collapse">
			        
					<?php 
						/*
						 *	Site menu
						 */
						if( is_page_template( 'front-page.php' ) ) {
							
							/* Home Menu */			
							wp_nav_menu( array(
							  'theme_location' 	=> 'rexly-home-menu',
							  'container' 		=> 'ul',
							  'menu_class' 		=> 'nav navbar-nav main-nav menu-scroll',
							  'menu_id' 		=> 'top-menu',
							  )
							);
							
						}else{
							
							/* Global Menu */			
							wp_nav_menu( array(
							  'theme_location' 	=> 'rexly-global-menu',
							  'container' 		=> 'ul',
							  'menu_class' 		=> 'nav navbar-nav main-nav menu-scroll',
							  'menu_id' 		=> 'top-menu',
							  )
							);							
							
						}
																	
					?>
			                                   
		        </div><!--/.nav-collapse -->
		        
		       <?php
			       /*
				    *	Enable / Disable header search
				    *
				    *	@since rexly 1.0
			        */
			        $header_search_icon	=	esc_html( get_theme_mod( 'rexly_header_search_option', '0' ) );
			        if( $header_search_icon == '0' ) : ?>
				       <div class="search-area">
					        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" >
					            <input id="search" name="s" type="text" placeholder="<?php _e( 'What\'re you looking for?', 'rexly' ); ?>">
					            <input id="search_submit" value="Rechercher" type="submit">
					            <input type="hidden" name="post_type" value="post"/>
					        </form>
				        </div>
		        <?php endif; ?>
		                
		    </div>          
		</nav> 
	</section>
	<!-- End menu section -->