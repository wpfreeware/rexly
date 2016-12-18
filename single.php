<?php 
	/**
	 * The template for displaying all single posts and attachments
	 *
	 *	@version 1.0
	 *	@since rexly 1.0
	 */
	get_header(); ?>
	
	<?php get_template_part( 'inc/templates/banner', 'single' ); ?>

  	<!-- Start blog section -->
  	<section id="blog">
	    <div class="container">
		    <div class="row">
		        <div class="col-md-12">
			        <div class="blog-area">
			            <div class="row">
				          
				            <div class="<?php echo rexly_blog_content_column(); ?>">
				                <div class="blog-left blog-details">
				                  	
								<!-- start loop -->											
								<?php 
									if ( have_posts() ) :
										while (have_posts()) : the_post();	?>
												
						                  	<!-- Start single blog post -->
						                  	<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-from-blog' ); ?>>
												<?php
												/* if author name or date or category or comment or title text enable
												 * then go ahead & display the post title cotent.
												 *
												 *	@since rexly 1.0
												 */
												$blog_post_author 	=	esc_html( get_theme_mod( 'rexly_blog_meta_author', '0' ) );
												$blog_post_date 	=	esc_html( get_theme_mod( 'rexly_blog_meta_date', '0' ) );
												$blog_post_comment 	=	esc_html( get_theme_mod( 'rexly_blog_comments_count', '0' ) );
												$blog_post_cat 		=	esc_html( get_theme_mod( 'rexly_blog_meta_cat', '0' ) );
												$title_text 		= 	esc_html( get_post_meta( get_the_ID(), '_rexly_post_origin_title_text_on_off', true ) );
												if( 
													( $blog_post_author == '0' ) 	||
													( $blog_post_date == '0' ) 		||
													( $blog_post_comment == '0' ) 	|| 
													( $blog_post_cat == '0' ) 		||
													( $title_text == 'rexly-origin-title-text-on' )
												) : ?>
											
							                    <div class="blog-title">
													
													<?php 
														/*
														 *	enable/disable title
														 *
														 *	@since rexly 1.0	
														 */
														$title_text = esc_html( get_post_meta( get_the_ID(), '_rexly_post_origin_title_text_on_off', true ) );
														if( $title_text == 'rexly-origin-title-text-on' ) :
															the_title( '<h2>', '</h2>' );
														endif;
													?>
													
							                      <?php get_template_part( 'post', 'meta' ); ?>
							                                         
							                    </div>
							                    
							                <?php endif; ?>
												
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
						                  	
										  	<?php get_template_part( 'inc/templates/post', 'tags' ); ?>
						                  	
										  	<?php get_template_part( 'inc/templates/next', 'prev' ); ?>
						                  	
										  	<?php get_template_part( 'inc/templates/author', 'bio' ); ?>
						                  	
						                  	<?php get_template_part( 'inc/templates/related', 'posts' ); ?>
						                  	
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