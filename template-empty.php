<?php 
	/*
	 *	TEMPLATE NAME: Blank Page - No Container
	 *	
	 *	Handles output for empty custom template.
	 *
	 *	@version 1.0
	 *	@since rexly 1.0
	 */
	get_header(); ?>

  	<!-- Start page section -->
  	<?php if( is_page_template( 'template-empty.php' ) ) : $empty_page_container = 'empty-blog'; endif; ?>
  	<section id="blog" class="<?php echo $empty_page_container; ?>">
	    
		<!-- start content loop -->											
		<?php 
			if ( have_posts() ) :
			
				while (have_posts()) : the_post();
														
					the_content();
			
				endwhile;
				
			endif;
		?>
		<!-- end content loop -->
	    
  	</section>
  	<!-- End page section -->

  	<?php get_footer(); ?>