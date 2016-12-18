<?php 
/*
 *	TEMPLATE NAME: Front Page
 *	
 *	Handles output for front page content
 *
 *	@version 1.0
 *	@since rexly 1.0
 */	
	
	get_header(); ?>

	<!-- Start about section -->
	<?php get_template_part( 'inc/templates/front-page/about', 'content' ); ?>
	<!-- End about section -->

	<!-- Start service section -->
	<?php get_template_part( 'inc/templates/front-page/service', 'items' ); ?>
	<!-- End service section -->

	<!-- Start call to action -->
	<?php get_template_part( 'inc/templates/front-page/callout', 'action' ); ?>
	<!-- End call to action -->

	<!-- Start Portfolio section -->
	<?php get_template_part( 'inc/templates/front-page/portfolio', 'items' ); ?>
	<!-- End Portfolio section -->

	<!-- Start Testimonial section -->
	<?php get_template_part( 'inc/templates/front-page/testimonial', 'items' ); ?>
	<!-- End Testimonial section -->
	
	<!-- Start Team action -->
	<?php get_template_part( 'inc/templates/front-page/team', 'members' ); ?>
	<!-- Start Team action -->

	<!-- Start from blog section -->
	<?php get_template_part( 'inc/templates/front-page/blog', 'posts' ); ?>
	<!-- End from blog section -->
  	
  	<!-- Start Contact section -->
  	<?php get_template_part( 'inc/templates/front-page/contact', 'info' ); ?>
  	<!-- End Contact section -->

	<?php get_footer(); ?>