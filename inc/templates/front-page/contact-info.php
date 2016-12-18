<?php
/*
 *	Outputs contact section contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
/*
 *	Enable/disable contact section
 *
 *	@since rexly 1.0
 */
 $contact_section_on	=	esc_html( get_theme_mod( 'rexly_contact_enable_disable', '1' ) );
 if( $contact_section_on ) : ?>
	<section id="contact">
		<div class="contact-overlay">
			<div class="container">
			  	<div class="row">
				  	
			        <div class="col-md-12 col-sm-6 col-xs-12">
			          	<div class="contact-left">
					  		
					  		<!-- address section title -->
					  		<?php
						  		$address_section_title	=	esc_html( get_theme_mod( 'rexly_contact_address_section_title', '' ) );
						  		if( $address_section_title ) : ?>
						  			<h2><?php echo $address_section_title; ?></h2>
				            <?php endif; ?>
				            
				            <!-- address 1 -->
				            <address class="single-address address-one">
						  		<?php
							  		$address_title_1	=	esc_html( get_theme_mod( 'rexly_contact_address_title_1', '' ) );
							  		if( $address_title_1 ) : ?>
							  			<h4><?php echo $address_title_1; ?></h4>
					            <?php endif; ?>
					            
						  		<?php
							  		$address_details_1	=	esc_textarea( get_theme_mod( 'rexly_contact_address_details_1', '' ) );
							  		if( $address_details_1 ) : ?>
							  			<p><?php echo $address_details_1; ?></p>
					            <?php endif; ?>
				            </address>
	
				            <!-- address 2 -->			            
				            <address class="single-address address-two">
						  		<?php
							  		$address_title_2	=	esc_html( get_theme_mod( 'rexly_contact_address_title_2', '' ) );
							  		if( $address_title_2 ) : ?>
							  			<h4><?php echo $address_title_2; ?></h4>
					            <?php endif; ?>
					            
						  		<?php
							  		$address_details_2	=	esc_textarea( get_theme_mod( 'rexly_contact_address_details_2', '' ) );
							  		if( $address_details_2 ) : ?>
							  			<p><?php echo $address_details_2; ?></p>
					            <?php endif; ?>
				            </address>
				            
				            <!-- address 3 -->
				            <address class="single-address address-three">
						  		<?php
							  		$address_title_3	=	esc_html( get_theme_mod( 'rexly_contact_address_title_3', '' ) );
							  		if( $address_title_3 ) : ?>
							  			<h4><?php echo $address_title_3; ?></h4>
					            <?php endif; ?>
					            
						  		<?php
							  		$address_details_3	=	esc_textarea( get_theme_mod( 'rexly_contact_address_details_3', '' ) );
							  		if( $address_details_3 ) : ?>
							  			<p><?php echo $address_details_3; ?></p>
					            <?php endif; ?>
				            </address>
				            
				            <!-- address 4 -->
				            <address class="single-address address-four">
						  		<?php
							  		$address_title_4	=	esc_html( get_theme_mod( 'rexly_contact_address_title_4', '' ) );
							  		if( $address_title_4 ) : ?>
							  			<h4><?php echo $address_title_4; ?></h4>
					            <?php endif; ?>
					            
						  		<?php
							  		$address_details_4	=	esc_textarea( get_theme_mod( 'rexly_contact_address_details_4', '' ) );
							  		if( $address_details_4 ) : ?>
							  			<p><?php echo $address_details_4; ?></p>
					            <?php endif; ?>
				            </address>
				            
			          	</div>
			        </div>
			        
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>