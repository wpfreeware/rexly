<?php
/*
 *	Contains output for header slider section.
 *
 *	@since rexly 1.0
 */
	$frontpage_header_on = esc_html( get_theme_mod( 'rexly_header_section_frontpage_switch', '1' ) );
	$blog_header_on 	 = esc_html( get_theme_mod( 'rexly_header_section_blog_switch', '1' ) );
	/*
	 *	If frontpage & header bar enabled for frontpage
	 *	OR
	 *	If blog or blog archive page & header bar enabled for blog page
	 *	Then
	 *	Go ahead output the header bar.
	 *
	 *	@since rexly 1.0
	 */
	if( ( is_page_template( 'front-page.php' ) && $frontpage_header_on ) || ( ( is_home() || is_front_page() ) && $blog_header_on ) ) : ?>
	
		<header id="header">
			<div class="header-inner">
			    <?php 
				    /*
					 *	Header Image
					 *
					 *	@since rexly 1.0
				     */
				    $header_bg_image 		= 	esc_url( get_theme_mod( 'rexly_header_bg_image', get_template_directory_uri() . '/img/header-bar-bg.jpg' ) );
				    if( $header_bg_image ) : ?>
				  		<img class="header-img" src="<?php echo $header_bg_image; ?>" alt="<?php echo bloginfo( 'name' ); ?>">  
			    <?php endif; ?>
			    
			    <div class="header-overlay">
			        <div class="header-content">
				        <!-- Start header content slider -->
				        <h2 class="header-slide">
					        <?php
						        // slide before text 
						        $before_slide_text	=	esc_html( get_theme_mod( 'rexly_slide_before_text', 'we generate' ) );
						        if( $before_slide_text ) : ?>
						        	<p class="before-header-text"><?php echo $before_slide_text; ?></p>
					        <?php endif; ?>
					        
					        <?php 
						        // slide 1 text
						        $slide_text_1	=	esc_html( get_theme_mod( 'rexly_slide_text_1', 'Creative' ) );
						        if( $slide_text_1 ) : ?>
						        	<span><?php echo $slide_text_1; ?></span>
					        <?php endif; ?>
					        
					        <?php 
						        // slide 2 text
						        $slide_text_2	=	esc_html( get_theme_mod( 'rexly_slide_text_2', 'Awesome' ) );
						        if( $slide_text_2 ) : ?>
						        	<span><?php echo $slide_text_2; ?></span>
					        <?php endif; ?>
					        
					        <?php 
						        // slide 3 text
						        $slide_text_3	=	esc_html( get_theme_mod( 'rexly_slide_text_3', 'Valuable' ) );
						        if( $slide_text_3 ) : ?>
						        	<span><?php echo $slide_text_3; ?></span>
					        <?php endif; ?>
					        
					        <?php 
						        // slide 4 text
						        $slide_text_4	=	esc_html( get_theme_mod( 'rexly_slide_text_4', 'Great' ) );
						        if( $slide_text_4 ) : ?>
						        	<span><?php echo $slide_text_4; ?></span>
					        <?php endif; ?>
					        
					        <?php 
						        // slide 5 text
						        $slide_text_5	=	esc_html( get_theme_mod( 'rexly_slide_text_5', 'Amazing' ) );
						        if( $slide_text_5 ) : ?>
						        	<span><?php echo $slide_text_5; ?></span>
					        <?php endif; ?>
					        
					        <?php
						        // slide after text 
						        $after_slide_text	=	esc_html( get_theme_mod( 'rexly_slide_after_text', 'Ideas' ) );
						        if( $after_slide_text ) : ?>
						        	<p class="after-header-text"><?php echo $after_slide_text; ?></p>
					        <?php endif; ?>
				        </h2>
				        <!-- End header content slider --> 
				        
				        <?php
					    /*
						 *	Header slide section buttons
						 *
						 *	@since rexly 1.0
					     */
					        // button 1 vars
					        $header_button_1_text 	= esc_html( get_theme_mod( 'rexly_slide_button_1_text', 'Know More' ) );
					        $header_button_1_url  	= esc_url( get_theme_mod( 'rexly_slide_button_1_url', '#' ) );
					        $header_button_1_target_value = esc_html( get_theme_mod( 'rexly_slide_button_1_target', '0' ) );
					        $header_button_1_target = ( $header_button_1_target_value ) ? '_blank' : '_self';
					        $header_button_1 		= ( $header_button_1_text && $header_button_1_url ) ? true : false;
					        
					        // button 2 vars
					        $header_button_2_text 	= esc_html( get_theme_mod( 'rexly_slide_button_2_text', 'Download Rexly' ) );
					        $header_button_2_url  	= esc_url( get_theme_mod( 'rexly_slide_button_2_url', '#' ) );
					        $header_button_2_target_value = esc_html( get_theme_mod( 'rexly_slide_button_2_target', '0' ) );
					        $header_button_2_target = ( $header_button_2_target_value ) ? '_blank' : '_self';
					        $header_button_2 		= ( $header_button_2_text && $header_button_2_url ) ? true : false;
					        
					        if( $header_button_1 || $header_button_2 ) : ?>
						        <div class="header-btn-area">
							        
							       	<!-- button 1 -->
							        <?php if ( $header_button_1_text && $header_button_1_url ) : ?>
							        	<a class="knowmore-btn" href="<?php echo $header_button_1_url; ?>" target="<?php echo $header_button_1_target; ?>">
								        	<?php echo $header_button_1_text; ?>
								        </a>
							        <?php endif; ?>
							        
							        <!-- button 2 -->
							        <?php if ( $header_button_2_text && $header_button_2_url ) : ?>
								         <a class="download-btn" href="<?php echo $header_button_2_url; ?>" target="<?php echo $header_button_2_target; ?>">
									         <?php echo $header_button_2_text; ?>
									    </a>
							        <?php endif; ?>
		
						        </div>
				        <?php endif; ?>
				        
			      	</div>
			    </div>      
		    </div>
		</header>
		
<?php endif; ?>