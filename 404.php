<?php
/**
 *	This template is for 404 page
 *
 * 	@link http://codex.wordpress.org/Template_Hierarchy
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

get_header(); ?>

  	<!-- Start error page -->
  	<section id="error-page">
	    <div class="container">
		    <div class="row">
		        <div class="col-md-12">
			        <div class="error-page-area">
			            <div class="error-no-area">
			              	<div class="error-no">
				                <h2><?php _e( '404 Error', 'rexly' ); ?></h2>
				                <p><?php _e( 'Sorry', 'rexly' ); ?></p>
			              	</div>
			            </div>
			        </div>
			        <div class="error-message">
			            <h4><?php _e( 'Woops! Something gone wrong', 'rexly' ); ?></h4>
			            <p><?php _e( 'Sorry, the page you have requested has either been moved, or does not exist, Return to', 'rexly' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'home', 'rexly' ); ?></a>.</p>
			        </div>
		        </div>
		    </div>
	    </div>
  	</section>
  	<!-- End error page -->

<?php get_footer(); ?>