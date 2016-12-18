<?php
/*
 *	Outputs footer contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 /*
  *	Display footer if footer top or footer bottom or both are enabled
  *
  *	@since rexly 1.0
  */
 $footer_top_on		=	esc_html( get_theme_mod( 'rexly_footer_top_enable_disable', '0' ) );
 $footer_bottom_on	=	esc_html( get_theme_mod( 'rexly_footer_bottom_enable_disable', '0' ) );
 if( ( $footer_top_on == '0' ) || ( $footer_bottom_on == '0' ) ) : ?>

	<!-- Start Footer -->    
  	<footer id="footer">
	    <!-- Start footer top -->
	    <?php if( $footer_top_on == '0' ) : ?>
		    <div class="footer-top">
		      	<div class="container">
			        <div class="row">
			          	<div class="col-md-12">
				            <div class="footer-top-area">
								
								<!-- footer logo -->
								<?php
									/*
									 *	Set footer top logo as site logo
									 *	contains: site custom logo
									 *
									 *	@since rexly 1.0
									 */
									if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
									 
									$custom_logo_id 	= get_theme_mod( 'custom_logo' );
									$custom_logo 		= wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
									
									<!-- Image logo  -->
							        <a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
								        <img src="<?php echo $custom_logo[0]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								    </a>
						        
						        <?php endif; ?>
								              
								<div class="footer-social">
					                
					                <?php 
						                /*
							             *	Social links target
							             *
							             *	@since rexly 1.0
						                 */
						                 $social_link_target_value	=	esc_html( get_theme_mod( 'rexly_footer_top_social_link_target', '0' ) );
						                 $social_link_target 		=	( $social_link_target_value ) ? '_blank' : '_self';
						                 
						                 
						                // facebook
						                $footer_top_fb	=	esc_url( get_theme_mod( 'rexly_footer_top_fb', '' ) );
						                if( $footer_top_fb ) : ?>
											<a class="facebook" href="<?php echo $footer_top_fb; ?>" target="<?php echo $social_link_target; ?>"><span class="fa fa-facebook"></span></a>
					                <?php endif; ?>
					                
					                <?php // twitter
						                $footer_top_twitter	=	esc_url( get_theme_mod( 'rexly_footer_top_twitter', '' ) );
						                if( $footer_top_twitter ) : ?>
											<a class="twitter" href="<?php echo $footer_top_twitter; ?>" target="<?php echo $social_link_target; ?>"><span class="fa fa-twitter"></span></a>
					                <?php endif; ?>
					                
					                <?php // Google+
						                $footer_top_gplus	=	esc_url( get_theme_mod( 'rexly_footer_top_gplus', '' ) );
						                if( $footer_top_gplus ) : ?>
											<a class="google-plus" href="<?php echo $footer_top_gplus; ?>" target="<?php echo $social_link_target; ?>"><span class="fa fa-google-plus"></span></a>
					                <?php endif; ?>
					                
					                <?php // YouTube
						                $footer_top_youtube	=	esc_url( get_theme_mod( 'rexly_footer_top_youtube', '' ) );
						                if( $footer_top_youtube ) : ?>
											<a class="youtube" href="<?php echo $footer_top_youtube; ?>" target="<?php echo $social_link_target; ?>"><span class="fa fa-youtube"></span></a>
					                <?php endif; ?>
					                
					                <?php // LinkedIn
						                $footer_top_linkedin	=	esc_url( get_theme_mod( 'rexly_footer_top_linkedin', '' ) );
						                if( $footer_top_linkedin ) : ?>
											<a class="linkedin" href="<?php echo $footer_top_linkedin; ?>" target="<?php echo $social_link_target; ?>"><span class="fa fa-linkedin"></span></a>
					                <?php endif; ?>
					                
					                <?php // Dribble
						                $footer_top_dribble		=	esc_url( get_theme_mod( 'rexly_footer_top_dribbble', '' ) );
						                if( $footer_top_dribble ) : ?>
											<a class="dribbble" href="<?php echo $footer_top_dribble; ?>" target="<?php echo $social_link_target; ?>"><span class="fa fa-dribbble"></span></a>
					                <?php endif; ?>
					                		                
				              	</div>
				            </div>
			          	</div>
			        </div>
		      	</div>
		    </div>
	    <?php endif; ?>
	    <!-- End footer top -->
	    
	    <!-- Start footer bottom -->
	    <?php if( $footer_bottom_on == '0' ) : ?>
		    <div class="footer-bottom">
			    <?php
				    /*
					 *	Footer texts
					 *
					 *	@since rexly 1.0
				     */
				     $footer_bottom_text				=	esc_html( get_theme_mod( 'rexly_footer_bottom_text', '' ) );
				     $footer_bottom_link_text			=	esc_html( get_theme_mod( 'rexly_footer_bottom_link_text', '' ) );
				     $footer_bottom_link				=	esc_url( get_theme_mod( 'rexly_footer_bottom_link', '' ) );
				     $footer_bottom_link_target_value	=	esc_html( get_theme_mod( 'rexly_footer_bottom_link_target', '0' ) );
				     $footer_bottom_link_target 		= 	( $footer_bottom_link_target_value ) ? '_blank' : '_self';
			    ?>
		    	<p><?php if( $footer_bottom_text ) : echo $footer_bottom_text; endif; ?> 
		    		<a href="<?php if( $footer_bottom_link ) : echo $footer_bottom_link; endif; ?>" target="<?php echo $footer_bottom_link_target; ?>">
			    		<?php if( $footer_bottom_link_text ) : echo $footer_bottom_link_text; endif; ?>
			    	</a>
		    	</p>
		    </div>
	    <?php endif; ?>
	    <!-- End footer bottom -->
	    
  	</footer>
  	<!-- End Footer -->
  	
 <?php endif; ?>
  	
    <?php wp_footer(); ?>
  </body>
</html>