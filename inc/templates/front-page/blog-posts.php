<?php
/*
 *	Outputs home page blog posts contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
/*
 *	Enable/Disable blog section
 *
 *	@since rexly 1.0
 */
 $blog_section_on	=	esc_html( get_theme_mod( 'rexly_home_blog_enable_disable', '1' ) );
 if( $blog_section_on ) : ?>
	<section id="from-blog">
	    <div class="container">
	      	<div class="row">
	       		<div class="col-md-12">
		          	<div class="from-blog-area">
			            
			            <div class="title-area">
				            <?php 
					            /*
						         *	Blog section title
						         *
						         *	@since rexly 1.0
					             */
					             $blog_section_title	=	esc_html( get_theme_mod( 'rexly_home_blog_title', '' ) );
					             if( $blog_section_title ) : ?>
						            <h2 class="tittle"><?php echo $blog_section_title; ?></h2>
						            <span class="tittle-line"></span>
				            <?php endif; ?>
				            
				            <?php 
					            /*
						         *	Blog section description
						         *
						         *	@since rexly 1.0
					             */
					             $blog_section_desc	=	esc_html( get_theme_mod( 'rexly_home_blog_description', '' ) );
					             if( $blog_section_desc ) : ?>
						            <p><?php echo $blog_section_desc; ?></p>
				            <?php endif; ?>
				            
			            </div>
			            
			            <!-- From Blog content -->
			            <div class="from-blog-content">
			              	<div class="row">
				                
							<?php
								/*
								 *	Set vars for "post" type query
								 *
								 *	@rexly 1.0
								 */
								$post_count			=	esc_html( get_theme_mod( 'rexly_post_display_count', 3 ) ); 
								$post_display_order	=	esc_html( get_theme_mod( 'rexly_post_display_order', 'DESC' ) );
								
								$post_args = array( 
									'post_type' 			=> 'post', 
									'posts_per_page' 		=> $post_count,
									'ignore_sticky_posts'	=> 1,
									'order'     			=> $post_display_order, //DESC - ASC
								);	

								$post_loop = new WP_Query( $post_args );
									
								if ( $post_loop -> have_posts() ) :	
									while ( $post_loop->have_posts() ) : $post_loop->the_post(); ?>
						                
						                <div class="col-md-4">
											<?php get_template_part( 'inc/templates/home', 'blog-posts' ); ?>
						                </div>
						                
							<?php
								    endwhile;
								endif;
								wp_reset_postdata(); ?>
				                
			              	</div>    
			            </div>
			            
		          	</div>
		        </div>
	      	</div>
	    </div>
	</section>
<?php endif; ?>