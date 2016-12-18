<?php
/*
 *	Outputs counters section content
 *
 *	@since rexly 1.0
 */
 
 /*
  *	Counter section on/off
  *
  *	@since rexly 1.0
  */
 $counter_section_on	=	esc_html( get_theme_mod( 'rexly_counter_enable_disable', '1' ) );
 if( $counter_section_on ) : ?>
	<section id="counter">
	    <div class="counter-overlay">
	      <div class="container">
	        	<div class="row">
		          	<div class="col-md-12">
			          	
		              	<?php
		              	/*
			             *	Start counters
			             *
			             *	@since rexly 1.0
		              	 */ 
		              	$counters = get_theme_mod( 'rexly_counter_option', array() );
		              	if( $counters ) : ?>
		              	
				            <!-- Start counter area -->
				            <div class="counter-area">
				              
								<?php
								
									/*
									 *	Start counters loop
									 *
									 *	@since rexly 1.0
									 */
									foreach ( $counters as $counter ) {
									
									/*
									 *	set counter variables
									 *
									 *	@since rexly 1.0
									 */
									$counter_icon		=	esc_html( $counter['rexly_counter_icon'] );
									$counter_number		=	esc_html( $counter['rexly_counter_number'] );
									$counter_title		=	esc_html( $counter['rexly_counter_text'] ); ?>
						                
						              <div class="col-md-3 col-sm-6 col-xs-6">
						                <div class="single-counter">
						                  <span class="fa <?php echo $counter_icon; ?>"></span>
						                  <div class="counter-count">
						                    <span class="counter"><?php echo $counter_number; ?></span>
						                    <p><?php echo $counter_title; ?></p>
						                  </div>
						                </div>
						              </div>
									
								<?php } ?>
				                  
				            </div>
			            
			            <?php endif; // end counters ?>
			            
			        </div>
		        </div>
	      	</div>
	    </div> 
	</section>
<?php endif; ?>