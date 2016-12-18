<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

get_header(); ?>
  	
<?php get_template_part( 'inc/templates/banner', '' ); ?>

  	<!-- Start blog section -->
  	<section id="blog">
	    <div class="container">
		    <div class="row">
		        <div class="col-md-12">
			        <div class="blog-area">
			            <div class="row">
				            
				            <div class="<?php echo rexly_blog_content_column(); ?>">
				                <div class="blog-left blog-archive" id="rexly-infinite-wrap">
									<!-- start loop -->											
									<?php 
										if ( have_posts() ) :
											while ( have_posts() ) : the_post();
											
												get_template_part( 'content', '' );
											
											endwhile;
											
											else : 
											
												get_template_part( 'content', 'none' );
										endif;
									?>
									<!-- end loop -->
				
									<?php
										/*
										 *	Enable / Disable blog pagination
										 *
										 *	@since rexly 1.0
										 */
										 $blog_pagination	=	esc_html( get_theme_mod( 'rexly_blog_num_pagination', '0' ) );
										if( $blog_pagination == '0' ) :
											get_template_part( 'inc/templates/blog', 'pagination' );
										endif;
									?>
				                </div>
				            </div>
							
							
						<?php
							/*
							 *	If "right sidebar" or "left sidebar" option selected
							 *	Then go ahead & display the sidebar.
							 */
							 $blog_layout	=	esc_html( get_theme_mod( 'rexly_blog_layout_option', 'rexly-right-sidebar' ) );

							 if( ( $blog_layout == 'rexly-right-sidebar' ) || ( $blog_layout == 'rexly-left-sidebar' ) ) :	?>
							 
					            <div class="<?php echo rexly_blog_sidebar_column(); ?>">
					                <?php get_sidebar(); ?>
					            </div>
				            
				            <?php endif; ?>
				            
			            </div>
			        </div>
		        </div>
		    </div>
	    </div>
  	</section>
  	<!-- End blog section -->

<?php get_footer(); ?>