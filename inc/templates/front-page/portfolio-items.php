<?php
/*
 *	Outputs portfolio contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 /*
  *	Enable/disable portfolio section
  *
  *	@since rexly 1.0
  */
  $portfolio_section_on		=	esc_html( get_theme_mod( 'rexly_portfolio_enable_disable', '1' ) );
  if( $portfolio_section_on ) : ?>
	<section id="portfolio">
	    <div class="container">
	      	<div class="row">
	        	<div class="col-md-12">
		          	<div class="portfolio-area">
			            
			            <div class="title-area">
			          	<?php
				          	/*
					         *	Portfolio section title
					         *
					         *	@since rexly 1.0
				          	 */
				          	 $portfolio_section_title	=	esc_html( get_theme_mod( 'rexly_portfolios_title', __( 'Our Portfolio', 'rexly' ) ) );
				          	 if( $portfolio_section_title ) : ?>
					              <h2 class="tittle"><?php echo $portfolio_section_title; ?></h2>
					              <span class="tittle-line"></span>
					        <?php endif; ?>
				            
					        <?php 
						        /*
							     *	Portfolio section description
							     *
							     *	@since rexly 1.0
						         */
						         $portfolio_section_desc	=	esc_html( get_theme_mod( 'rexly_portfolios_desc', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto' ) );
						         if( $portfolio_section_desc ) : ?>  
								 	<p><?php echo $portfolio_section_desc; ?></p>
					        <?php endif; ?>
			            
			            </div>
			            
			            <!-- Portfolio content -->
			            <div class="portfolio-content">
			               <!-- Portfolio container -->
			               	<div class="portfolio-container">
				               	
							<?php
								/*
								 *	Set vars for portfolio post type query
								 *
								 *	@rexly 1.0
								 */
								$portfolio_count			=	esc_html( get_theme_mod( 'rexly_portfolio_display_count', 4 ) );
								$portfolio_display_order	=	esc_html( get_theme_mod( 'rexly_portfolio_display_order', 'DESC' ) );
								
								$portfolio_args = array( 
									'post_type' 			=> 'rexly-portfolio', 
									'posts_per_page' 		=> $portfolio_count,
									'ignore_sticky_posts'	=> 1,
									'order'     			=> $portfolio_display_order, //DESC - ASC
								);	

								$portfolio_loop = new WP_Query( $portfolio_args );
									
								if ( $portfolio_loop -> have_posts() ) :	
									while ( $portfolio_loop->have_posts() ) : $portfolio_loop->the_post(); ?>
									
					                <div class="single-portfolio">
					                   <div class="single-item">
						                    <?php the_post_thumbnail( 'rexly-portfolio-img', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
						                    <div class="single-item-content">
						                        <div class="portfolio-social-icon">
						                          <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
						                        </div>
						                        <div class="portfolio-title">
						                          <?php the_title( '<h4>', '</h4>' );?>
						                        </div>
						                        
						                        <div class="portfolio-detail">
							                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
							                        <div class="portfolio-detail-img">
								                        <?php the_post_thumbnail( 'rexly-portfolio-img', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
							                        </div>
							                       <div class="portfolio-detail-info">
								                        <?php the_title( '<h2>', '</h2>' );?>
								                        <?php the_content(); ?>
								                        
														<?php
														/*
														 *  Portfolio Meta - Set variables
														 *	Values comes from rexly-toolbox plugin
														 *
														 *	@since rexly 1.0
														 */
														$client_lebel 			= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_client_lebel', true ) );
														$client_name 			= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_client_name', true ) );
														$date_lebel 			= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_date_lebel', true ) );
														$project_date 			= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_complete_date', true ) );
														$skill_lebel 			= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_skill_lebel', true ) );
														$skill_names 			= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_skill_names', true ) );
														$button_text 			= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_button_text', true ) );
														$button_url 			= esc_url( get_post_meta( get_the_ID(), '_rexly_portfolio_button_url', true ) );
														$button_target_value 	= esc_html( get_post_meta( get_the_ID(), '_rexly_portfolio_button_target', true ) );
														$button_target			= ( $button_target_value ) ? '_blank' : '_self' ;
														?>
														
								                        <div class="portfolio-meta">
									                        <div class="portfolio-meta-single">
																<?php if ( $client_lebel ) : ?><h5><?php echo $client_lebel; ?></h5><?php endif; ?>	
																<?php if ( $client_name ) : ?><p><?php echo $client_name; ?></p><?php endif; ?>
									                        </div>
									                        <div class="portfolio-meta-single">
																<?php if ( $date_lebel ) : ?><h5><?php echo $date_lebel; ?></h5><?php endif; ?>
																<?php if ( $project_date ) : ?><p><?php echo $project_date; ?></p><?php endif; ?>
									                        </div>
									                        <div class="portfolio-meta-single">
																<?php if ( $skill_lebel ) : ?><h5><?php echo $skill_lebel; ?></h5><?php endif; ?>	
																<?php if ( $skill_names ) : ?><p><?php echo $skill_names; ?></p><?php endif; ?>
									                        </div>
								                        </div>
								                        
								                        <?php if ( $button_text && $button_url ) : ?>
								                        	<a href="<?php echo $button_url; ?>" class="view-project-btn" target="<?php echo $button_target; ?>"><?php echo $button_text; ?></a>
								                        <?php endif; ?>
								                        
							                       </div>
						                        </div>
						                        
						                    </div>
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
	</section>
<?php endif; ?>