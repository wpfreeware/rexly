<?php
/*
 * 	This file contains dynamic js calls
 *	Content	-	animated counter | Testimonials Slider | Clients logo slider | Portfolio modal
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
function rexly_dynamic_js_call(){ ?>
	
		<script type="text/javascript">
					
				(function( $ ){
					
					<?php if( is_page_template( 'front-page.php' ) || is_front_page() ) : ?>
					    
						<?php
						/*
						 *	TESTIMONIAL SLIDE
						 *	If testimonial section disabled then go ahead 
						 *	& disable testimonial js call
						 *
						 *	@since rexly 1.0
						 */
						$testimonials_autoplay		=	esc_html( get_theme_mod( 'rexly_testimonials_autoplay_on_off', '0' ) );
						$testimonials_slide_speed	=	esc_html( get_theme_mod( 'rexly_testimonials_slide_speed', '3000' ) );  
						$testimonials_section_on	=	esc_html( get_theme_mod( 'rexly_testimonials_enable_disable', '1' ) );
						if( $testimonials_section_on ) : ?>	
							$('.testimonial-slider').slick({
								dots: false,
								infinite: true,
								speed: 500,
								arrows:true, 
								autoplay: <?php echo ( $testimonials_autoplay ) ? 'false' : 'true'; ?>,
								autoplaySpeed: <?php echo $testimonials_slide_speed; ?>,     
						      	slidesToShow: 1,
								slide: 'div',		
								cssEase: 'linear'
							});
						<?php endif; ?>
						
						
						<?php
						/*
						 *  LIGHTBOX
						 *	If portfolio section disabled then go ahead 
						 *	& disable portfolio js call
						 *
						 *	@since rexly 1.0
						 */ 
						$portfolio_section_on		=	esc_html( get_theme_mod( 'rexly_portfolio_enable_disable', '1' ) );
						if( $portfolio_section_on ) : ?>
							$('body').append("<div id='portfolio-popup'><div class='portfolio-popup-area'><div class='portfolio-popup-inner'></div></div></div>");
							
							// WHEN CLICK PLAY BUTTON 
							
						    jQuery('.portfolio-social-icon').on('click', function(event) {
						      event.preventDefault();
						      $('#portfolio-popup').addClass("portfolio-popup-show");
						      $('#portfolio-popup').animate({
							      "opacity": 1
						      },500);   
						      var portfolio_detailscontent = $(this).parent(".single-item-content").find(".portfolio-detail").html();
							  $(".portfolio-popup-inner").html(portfolio_detailscontent);     
						
						    });  
						           
						    // WHEN CLICK CLOSE BUTTON
						    
						    $(document).on('click','.modal-close-btn', function(event) {     
							    event.preventDefault();
								$('#portfolio-popup').removeClass("portfolio-popup-show");
								$('#portfolio-popup').animate({
								      "opacity": 0
							    },500);  
						
						    });
					    <?php endif; ?>
				    
					<?php endif; ?>
					
					<?php
					/*
					 *	scroll to top
					 *	Check to see if the window is top if not then display button
					 *
					 *	@since rexly 1.0
					 */
					 $preloader	=	esc_html( get_theme_mod( 'rexly_preloader_option', '1' ) );
					 if( $preloader == '0' ) : ?>
						$(window).scroll(function(){
							if ($(this).scrollTop() > 300) {
								  $('.scrollToTop').fadeIn();
								} else {
								  $('.scrollToTop').fadeOut();
								}
							});
							
							//Click event to scroll to top
							
							$('.scrollToTop').click(function(){
							$('html, body').animate({scrollTop : 0},800);
							return false;
						});
					<?php endif; ?>
					
					<?php
					/*
					 *	Preloader call
					 *
					 *	@since rexly 1.0
					 */
					 $scroll_top	=	esc_html( get_theme_mod( 'rexly_scroll_top', '0' ) );
					 if( $scroll_top == '0' ) : ?>				  
						$(window).load(function() { // makes sure the whole site is loaded
					      $('.loader').fadeOut(); // will first fade out the loading animation
					      $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
					      $('body').delay(100).css({'overflow':'visible'});
					    });
				    <?php endif; ?>
    
				})( jQuery );
				
		</script>
<?php
}
add_action( 'wp_footer', 'rexly_dynamic_js_call', 20 );