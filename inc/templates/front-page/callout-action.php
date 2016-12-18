<?php
/*
 *	Outputs callout action contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 /*
  *	Enable / disable callout section
  *
  *	@since rexly 1.0
  */
  $callout_section_on	=	esc_html( get_theme_mod( 'rexly_callout_section_enable_disable', '1' ) );
  if( $callout_section_on ) : ?>
	<section id="call-to-action">
	    <div class="call-to-overlay">
	      	<div class="container">
		        <div class="call-to-content">
			    	<?php
				    /*
					 *	Callout text
					 *
					 *	@since rexly 1.0
				     */
				     $callout_text	=	esc_html( get_theme_mod( 'rexly_callout_text', __( 'The most impressive theme you\'ve ever seen', 'rexly' ) ) );
				     if( $callout_text ) : ?>    
					 	<h2><?php echo $callout_text; ?></h2>
			        <?php endif; ?>
			        
			    	<?php
				    /*
					 *	Callout button
					 *
					 *	@since rexly 1.0
				     */
				     $callout_button_text			=	esc_html( get_theme_mod( 'rexly_callout_button_text', __( 'GET IT NOW', 'rexly' ) ) );
				     $callout_button_url			=	esc_url( get_theme_mod( 'rexly_callout_button_url', '#' ) );
				     $callout_button_target_value	=	esc_html( get_theme_mod( 'rexly_callout_button_target', '0' ) );
				     $callout_button_target 		=	( $callout_button_target_value ) ? '_blank' : '_self';
				     if( $callout_button_text && $callout_button_url ) : ?>
					 	<a href="<?php echo $callout_button_url; ?>" class="button button-default" data-text="<?php echo $callout_button_text; ?>" target="<?php echo $callout_button_target; ?>"><span><?php echo $callout_button_text; ?></span></a>
					 <?php endif; ?>
		        
		        </div>
	      	</div>
	    </div> 
	</section>
<?php endif; ?>