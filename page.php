<?php 
	/**
	 * The template for displaying pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages and that
	 * other "pages" on your WordPress site will use a different template.
	 *
	 *	@version 1.0
	 *	@since rexly 1.0
	 */
	get_header(); ?>

  	<!-- Start page section -->
  	<section id="blog">
	    <div class="container">
		    <div class="row">
		        <div class="col-md-12">
			        <div class="blog-area">
			            <div class="row">
				          
				            <div class="<?php echo rexly_page_content_column(); ?>">
				                <div class="blog-left blog-details">
				                  	
								<!-- start loop -->											
								<?php 
									if ( have_posts() ) :
										while ( have_posts() ) : the_post();	?>
												
						                  	<!-- Start single blog post -->
						                  	<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-from-blog' ); ?>>
											
												<?php
													/*
													 *	Enable / Disable page title
													 *	
													 *	@since rexly 1.0
													 */
													 $page_title	=	esc_html( get_post_meta( get_the_ID(), '_rexly_page_origin_title_text_on_off', true ) );
						
													 if( $page_title == 'rexly-origin-page-title-on' ) :	?>
													 
									                    <div class="blog-title">
															<?php the_title( '<h2>', '</h2>' ); ?>             
									                    </div>
									                    
									            <?php endif; ?>
									            
												<?php edit_post_link( 
														__(' Edit', 'rexly' ),
														'<p><i class="fa fa-pencil" aria-hidden="true"></i>',
														'</p>' ); 
												?>
												
												<?php if( has_post_thumbnail() ): ?>
								                    <figure>
														<?php the_post_thumbnail( 'post-thumbnails', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
								                    </figure>
							                    <?php endif; ?>
		
		
							                   <div class="blog-details-content">
							                      	<?php the_content(); ?>
							                   </div>
							                                  
											  <?php 
											  	/*
												 *	Single Post Pagination
												 *
												 *	@since rexly 1.0
											  	 */
												wp_link_pages( array(
													'before'      => '<div class="rexly-single-pagination"><span>'. __( 'Pages:', 'rexly' ) .'</span>',
													'after'       => '</div>',
												) );								  
											  
											  ?>
							                   
						                  	</article>
						                  	
						                  	
											<?php
											/*
											 *	If comments are open or we have at least one comment, 
											 *	load up the comment template.
											 *
											 *	@since rexly 1.0
											 */
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;	?>
									
									<?php		
											endwhile;
											
											else : 
											
												get_template_part( 'content', 'none' );
										endif; ?>
									<!-- end loop -->
  
								  	                
				                </div>
				            </div>
				            
							<?php
								/*
								 *	If "right sidebar" or "left sidebar" option selected from page metabox
								 *	Then go ahead & display the sidebar.
								 *	
								 *	@since rexly 1.0
								 */
								 $page_layout	=	esc_html( get_post_meta( get_the_ID(), '_rexly_page_layout_option', true ) );
	
								 if( ( $page_layout == 'rexly-page-right-sidebar' ) || ( $page_layout == 'rexly-page-left-sidebar' ) ) :	?>
								 
						            <div class="<?php echo rexly_page_sidebar_column(); ?>">
						                <?php get_sidebar(); ?>
						            </div>
					            
					            <?php endif; ?>
				            
			            </div>
			        </div>
		        </div>
		    </div>
	    </div>
  	</section>
  	<!-- End page section -->

  	<?php get_footer(); ?>