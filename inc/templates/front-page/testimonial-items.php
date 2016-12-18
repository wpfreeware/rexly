<?php
/*
 *	Outputs testimonials contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

/*
 *	Enable/Disable testimonials section
 *
 *	@since rexly 1.0
 */
 $testimonials_section_on	=	esc_html( get_theme_mod( 'rexly_testimonials_enable_disable', '1' ) );
 if( $testimonials_section_on ) : ?>
	<section id="testimonial">
	    
	    <div class="testimonial-overlay">
		    <div class="container">
		        <div class="row">
		          <div class="col-md-12">
			            <!-- Start Testimonial area -->
			            <div class="testimonial-area">
				            
				            <?php
					            /*
						         *	Testimonials title
						         *
						         *	@since rexly 1.0
					             */
					             $testimonial_title	=	esc_html( get_theme_mod( 'rexly_testimonials_title', '' ) );
					             if( $testimonial_title ) : ?>
						            <div class="title-area">
						                <h2 class="tittle"><?php echo $testimonial_title; ?></h2>
						                <span class="tittle-line"></span>              
						            </div>
				            <?php endif; ?>
				            
				            <div class="testimonial-conten">
				                <!-- Start testimonial slider -->
				                <div class="testimonial-slider">
				                  
								<?php
									/*
									 *	Set vars for testimonial post type query
									 *
									 *	@rexly 1.0
									 */
									$testimonials_count			=	esc_html( get_theme_mod( 'rexly_testimonials_display_count', 4 ) ); 
									$testimonials_display_order	=	esc_html( get_theme_mod( 'rexly_testimonials_display_order', 'DESC' ) );
									
									$testimonials_args = array( 
										'post_type' 			=> 'rexly-testimonial', 
										'posts_per_page' 		=> $testimonials_count,
										'ignore_sticky_posts'	=> 1,
										'order'     			=> $testimonials_display_order, //DESC - ASC
									);	
	
									$testimonials_loop = new WP_Query( $testimonials_args );
										
									if ( $testimonials_loop -> have_posts() ) :	
										while ( $testimonials_loop->have_posts() ) : $testimonials_loop->the_post(); ?>
										
						                  <div class="single-slide">
						                    <p><?php echo get_the_content(); ?></p>
						                    <div class="single-testimonial">
												<?php the_post_thumbnail( 'rexly-testimonial-img', array( 'alt' => esc_attr( get_the_title() ), 'class' => 'testimonial-thumb' ) ); ?>
												<?php the_title( '<p>', '</p>' ); ?>
								                
								                <?php
								                /*
									             *	position.
									             *	Value comes from rexly-toolbox plugin.
									             *
									             *	rexly 1.0
								                 */
								                $testimonial_position 	= esc_html( get_post_meta( get_the_ID(), '_rexly_testimonial_position', true ) );
								                if( $testimonial_position) : ?>
													<span><?php echo $testimonial_position; ?></span>
						                      <?php endif; ?>
						                      
						                    </div>
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
	    </div> 
	</section>
<?php endif; ?>