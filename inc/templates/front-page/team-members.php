<?php
/*
 *	Outputs team members contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

/*
 *	Enable/Disable team section
 *
 *	@since rexly 1.0
 */
 $team_section_on	=	esc_html( get_theme_mod( 'rexly_team_members_enable_disable', '1' ) );
 if( $team_section_on ) : ?>
	<section id="team">
	    <div class="container">
		    <div class="row">
		        <div class="col-md-12">
		          	<div class="team-area">
			          	
			            <div class="title-area">
				            
							<!-- Start Team section title -->
							<?php
								$team_section_title	=	esc_html( get_theme_mod( 'rexly_team_members_title', '' ) );
								if( $team_section_title ) :	?>
						            <h2 class="tittle"><?php echo $team_section_title; ?></h2>
						            <span class="tittle-line"></span>
							<?php endif; ?>
							<!-- End Team section title -->
							
							<!-- Start team section description -->
							<?php
								$team_section_desc		=	esc_textarea( get_theme_mod( 'rexly_team_members_desc', '' ) );
								if( $team_section_desc ) :	?>
									<p>	<?php echo $team_section_desc; ?> </p>
							<?php endif; ?>
							<!-- End team section description -->
			            
			            </div>
			            
			            <!-- Start team content -->
			            <div class="team-content">
			              	<ul class="team-grid">
				               
								<?php
									/*
									 *	Set vars for team member post type query
									 *
									 *	@rexly 1.0
									 */
									$team_member_count			=	esc_html( get_theme_mod( 'rexly_team_member_display_count', 4 ) ); 
									$team_member_display_order	=	esc_html( get_theme_mod( 'rexly_team_member_display_order', 'DESC' ) );
									
									$members_args = array( 
										'post_type' 			=> 'rexly-team-member', 
										'posts_per_page' 		=> $team_member_count,
										'ignore_sticky_posts'	=> 1,
										'order'     			=> $team_member_display_order, // DESC - ASC
									);	
	
									$members_loop = new WP_Query( $members_args );
										
									if ( $members_loop -> have_posts() ) :	
										while ( $members_loop->have_posts() ) : $members_loop->the_post(); ?>
							                
							                <li>
							                  <div class="team-item">
								                  <div class="team-item-img">
									                  <?php the_post_thumbnail( 'rexly-testimonial-img', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
								                  </div>
							                    <div class="team-info">
							                      <p> <?php echo get_the_content(); ?> </p>
							                      
								                <?php
								                /*
									             *	Member meta info
									             *	Value comes from rexly-toolbox plugin.
									             *
									             *	rexly 1.0
								                 */
								                $member_position 	= esc_html( get_post_meta( get_the_ID(), '_rexly_team_member_position', true ) );
								                $member_facebook 	= esc_url( get_post_meta( get_the_ID(), '_rexly_member_fb_url', true ) );
								                $member_twitter 	= esc_url( get_post_meta( get_the_ID(), '_rexly_member_twitter_url', true ) );
								                $member_googleplus 	= esc_url( get_post_meta( get_the_ID(), '_rexly_member_gplus_url', true ) );
								                $member_linkedin 	= esc_url( get_post_meta( get_the_ID(), '_rexly_member_linkedin_url', true ) );
												$link_target_value 	= esc_html( get_post_meta( get_the_ID(), '_rexly_member_button_target', true ) );
												$link_target		= ( $link_target_value ) ? '_blank' : '_self' ;
								                ?>
								                
								                <?php if( $member_facebook ) : ?>
							                      <a href="<?php echo $member_facebook; ?>" target="<?php echo $link_target; ?>"><span class="fa fa-facebook"></span></a>
							                    <?php endif; ?>
							                    
							                    <?php if( $member_twitter ) : ?>
							                      <a href="<?php echo $member_twitter; ?>" target="<?php echo $link_target; ?>"><span class="fa fa-twitter"></span></a>
							                    <?php endif; ?>
							                    
							                    <?php if( $member_googleplus ) : ?>
							                      <a href="<?php echo $member_googleplus; ?>" target="<?php echo $link_target; ?>"><span class="fa fa-google-plus-official"></span></a>
							                    <?php endif; ?>
							                    
							                    <?php if( $member_linkedin ) : ?>
							                      <a href="<?php echo $member_linkedin; ?>" target="<?php echo $link_target; ?>"><span class="fa fa-linkedin"></span></a>
							                    <?php endif; ?>
							                    
							                    </div>
							                  </div>
							                  
							                  <div class="team-address">
							                    <?php the_title( '<p>', '</p>' ); ?>
							                    <?php if( $member_position ) : ?>
							                    	<span><?php echo $member_position; ?></span>
							                    <?php endif; ?>
							                  </div>
							                </li>
							                
								<?php	endwhile;
									endif;
									wp_reset_postdata(); ?>
				                
			              	</ul>
			            </div>
			            <!-- End team content -->
		          	</div>
		        </div>
		    </div>
	    </div>
	</section>
<?php endif; ?>