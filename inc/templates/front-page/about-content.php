<?php
/*
 *	Outputs about section contents
 *
 *	@version 1.0
 *	@since rexly 1.0 
 */
 
$about_section_on	=	esc_html( get_theme_mod( 'rexly_about_enable_disable', '1' ) );
if( $about_section_on ) : ?>
	<section id="about">
		<div class="container">
			
			<div class="row">
		    	<div class="col-md-12">
		          	<div class="about-area">
		            	<div class="row">
			            	
			              	<div class="col-md-5 col-sm-6 col-xs-12">
				                <?php
					                /*
						             *	About section image
						             *
						             *	@since rexly 1.0
					                 */
					                 $about_section_image	=	esc_url( get_theme_mod( 'rexly_about_image', get_template_directory_uri() . '/img/header-bar-bg.jpg' ) );
					                 if( $about_section_image ) : ?>
						                <div class="about-left">
							                <img src="<?php echo $about_section_image; ?>" alt="<?php _e( 'about ', 'rexly' ); echo bloginfo( 'name' ); ?>">
						                </div>
				                <?php endif; ?>
			              	</div>
						  	
						  	<div class="col-md-7 col-sm-6 col-xs-12">
			                	<div class="about-right">
				                  	<div class="title-area">
					                    <?php
						                   	/*
							                 *	About section title
							                 *
							                 *	@since rexly 1.0
						                   	 */
										   	 $about_section_hl_text	=	esc_html( get_theme_mod( 'rexly_about_title_highlighted', 'About' ) );
						                   	 $about_section_title	=	esc_html( get_theme_mod( 'rexly_about_title', 'Rexly Design' ) );
						                   	 if( $about_section_hl_text || $about_section_title ) : ?>
							                    <h2 class="tittle"><span><?php echo $about_section_hl_text; ?></span> <?php echo $about_section_title; ?></h2>
							                    <span class="tittle-line"></span>
					                    <?php endif; ?>
					                    
					                    <?php
						                    /*
							                 *	About description
							                 *
							                 *	@since rexly 1.0
						                     */
						                     $about_section_desc	=	esc_textarea( get_theme_mod( 'rexly_about_desc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniamo. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim.' ) );
						                     if( $about_section_desc ) : ?>
											 	<p><?php echo $about_section_desc; ?></p>
										<?php endif; ?>
									
					                    <?php
						                    /*
							                 *	About button
							                 *
							                 *	@since rexly 1.0
						                     */
						                     $about_section_btn_text			=	esc_html( get_theme_mod( 'rexly_about_button_text', 'Read More' ) );
						                     $about_section_btn_url				=	esc_url( get_theme_mod( 'rexly_about_button_url', '#' ) );
						                     $about_section_btn_target_value 	= 	esc_html( get_theme_mod( 'rexly_about_button_target', '0' ) );
						                     $about_section_btn_target 			= ( $about_section_btn_target_value ) ? '_blank' : '_self';
						                     if( $about_section_btn_text && $about_section_btn_url ) : ?>	
							                    <div class="about-btn-area">
							                      <a href="<?php echo $about_section_btn_url; ?>" class="button button-default" data-text="<?php echo $about_section_btn_text; ?>" target="<?php echo $about_section_btn_target; ?>"> <span><?php echo $about_section_btn_text; ?></span> </a>
							                    </div>
							            <?php endif; ?>                   
				                  	
				                  	</div>
				                </div>
							</div>
						  	
			            </div>
					</div>
		        </div>
			</div>
			
		</div>
	</section>
<?php endif; ?>