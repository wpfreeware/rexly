<?php
/*
 *	Outputs services contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
/*
 *	Enable/Disable services section
 *
 *	@since rexly 1.0
 */
 $services_section_on	=	esc_html( get_theme_mod( 'rexly_services_enable_disable', '1' ) );
 if( $services_section_on ) : ?>
	<section id="service">
	    <div class="container">
	      	<div class="row">
	        	<div class="col-md-12">
		          	<div class="service-area">
			          	<div class="title-area">
			          	<?php
				          	/*
					         *	Service section title
					         *
					         *	@since rexly 1.0
				          	 */
				          	 $service_section_title	=	esc_html( get_theme_mod( 'rexly_services_title', __( 'Services we offer', 'rexly' ) ) );
				          	 if( $service_section_title ) : ?>
					              <h2 class="tittle"><?php echo $service_section_title; ?></h2>
					              <span class="tittle-line"></span>
					        <?php endif; ?>
					        
					        <?php 
						        /*
							     *	Service section description
							     *
							     *	@since rexly 1.0
						         */
						         $service_section_desc	=	esc_html( get_theme_mod( 'rexly_services_desc', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore' ) );
						         if( $service_section_desc ) : ?>  
								 	<p><?php echo $service_section_desc; ?></p>
					        <?php endif; ?>
					            
					        </div>
			            
			            <!-- service content -->
			            <div class="service-content">
			              	<ul class="service-table">
				              	
							<?php
								/*
								 *	Set vars for service post type query
								 *
								 *	@rexly 1.0
								 */
								$service_count			=	esc_html( get_theme_mod( 'rexly_service_display_count', 4 ) ); 
								$service_display_order	=	esc_html( get_theme_mod( 'rexly_service_display_order', 'DESC' ) );
								
								$service_args = array( 
									'post_type' 			=> 'rexly-service', 
									'posts_per_page' 		=> $service_count,
									'ignore_sticky_posts'	=> 1,
									'order'     			=> $service_display_order, //DESC - ASC
								);	

								$service_loop = new WP_Query( $service_args );
									
								if ( $service_loop -> have_posts() ) :	
									while ( $service_loop->have_posts() ) : $service_loop->the_post(); ?>
									
						                <li class="col-md-3 col-sm-6">
						                  <div class="single-service">
							                <?php
							                /*
								             *	Service icon
								             *	Value comes from rexly-toolbox plugin.
								             *
								             *	rexly 1.0
							                 */
							                $service_icon 	= esc_html( get_post_meta( get_the_ID(), '_rexly_service_fa_icon', true ) );
							                if( $service_icon ) : ?>
						                    	<span class="fa <?php echo $service_icon; ?> service-icon"></span>
						                    <?php endif; ?>
						                    
											<?php the_title( '<h4 class="service-title">', '</h4>' ); ?>
						                    <p><?php echo get_the_content(); ?></p>
						                  </div>
						                </li>
						                
							<?php
								    endwhile;
								endif;
								wp_reset_postdata(); ?>
				                
			              	</ul>
			            </div>
			            
		          	</div>
		        </div>
			</div>
	    </div>
	</section>
<?php endif; ?>