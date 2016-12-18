<?php
/*
 *	This template contains post single related posts
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
?>
<?php 
	/*
	 *	Related Posts on/off
	 *  setting - "rexly_blog_single_related_posts"  @file blog-settings.php
	 *
	 *	@since rexly 1.0
	 */
	$related_posts	=	esc_html( get_theme_mod( 'rexly_blog_single_related_posts', '0' ) );
	if( $related_posts == '0' ) : ?>
	
		<div class="related-blog-post">
				
			<?php
				/*
				 *	Related posts by category
				 *
				 *	@since rexly 1.0
				 */
				$categories = get_the_category( $post->ID );
				if ( $categories ) {
			
					$category_ids = array();
					foreach( $categories as $individual_category ) {
						$category_ids[] = $individual_category->term_id;
					}
				
					$args = array(
						'category__in' 			=> $category_ids,
						'post__not_in' 			=> array( $post->ID ),
						'posts_per_page'		=> 2, 
						'ignore_sticky_posts'	=> 1  
					);
				
					$related_posts_query = new WP_Query( $args );
					if( $related_posts_query->have_posts() ) {
						
						echo '<h3>'. __('Related posts', 'rexly') .'</h3>';
								
						while( $related_posts_query->have_posts() ) {		
							$related_posts_query->the_post(); ?>
							
			                  	<div class="col-md-6">
				                  	<article class="single-from-blog">
					                    <figure>
					                      	<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
					                    </figure>
					                    <div class="blog-title">
						                    
						                    <h2><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
											
											  <?php
											      /*
											       *	Enable disable post meta options (name & date)
											       *	
											       *	@since rexly 1.0
											       */
											       $blog_post_author 	=	esc_html( get_theme_mod( 'rexly_blog_meta_author', '0' ) );
											       $blog_post_date 		=	esc_html( get_theme_mod( 'rexly_blog_meta_date', '0' ) );
											       if( ( $blog_post_author == '0' ) || ( $blog_post_date == '0' ) ) : ?>
											          <p>
											              <?php if( $blog_post_author == '0' ) : _e( 'Posted by', 'rexly' ); ?> 
											                  <a class="blog-admin" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
											               <?php endif; ?> 
											              
											              <?php if( $blog_post_date == '0' ) : _e( 'On', 'rexly' ); ?> 
											              	  <span class="blog-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
											              <?php endif; ?>
											           </p>
											   <?php endif; ?>
											   
					                    </div>
					                    
					                    <p><?php echo rexly_custom_post_excerpt(); ?></p>
					                    
										<?php
										    /*
										     *	Enable/diable post comment & category
										     *
										     *	@since rexly 1.0
										     */
										     $blog_post_comment 		=	esc_html( get_theme_mod( 'rexly_blog_comments_count', '0' ) );
										     $blog_post_cat 			=	esc_html( get_theme_mod( 'rexly_blog_meta_cat', '0' ) );
										     if( ( $blog_post_comment == '0' ) || ( $blog_post_cat == '0' ) ) :   ?>
										        <div class="blog-footer">
										          
										          <?php if ( comments_open() && ( $blog_post_comment == '0' ) ) :  ?>
										          	<span class="fa fa-comment"></span>
													<?php 
														comments_popup_link( 
															__('0', 'rexly'), 
															__('1', 'rexly'), 
															__('%', 'rexly') );
													
													endif; ?>
													
													<?php
													    if( $blog_post_cat == '0' ) : ?>
													    	<span class="fa fa-folder" aria-hidden="true"></span>
															<?php the_category('<span>/</span> '); ?>
														<?php endif; ?>
													
										        </div>
										<?php endif; ?>
					                    
				                  	</article>
			                  	</div>
									
			<?php		}
					}
				}
				wp_reset_query(); ?>
			
		</div>

<?php endif; ?>