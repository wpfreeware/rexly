<?php
/*
 *	Outputs post single banner
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
/*
 *	Enable / Disable post single title section
 *
 *	@since rexly 1.0
 */
$post_title_section	= esc_html( get_post_meta( get_the_ID(), '_rexly_post_title_on_off', true ) );
if( $post_title_section == 'rexly-title-on' ) :	?>
	<!-- Start blog banner section -->
	<section id="blog-banner" class="single-blog-banner">
		<div class="blog-overlay">
		    <div class="container">
		        <div class="row">
		          	<div class="col-md-12">
			            <div class="blog-banner-area">
							
							<?php
								/*
								 *	Title text
								 *	
								 *	@since rexly 1.0
								 */
								$title_text	=	esc_html( get_post_meta( get_the_ID(), '_rexly_post_title_text', true ) );
								if( $title_text != '' ) :	?>
									<h2><?php echo $title_text; ?></h2>
							<?php endif; ?>
			              	
							<?php 
								/*
								 *	Breadcrumb enable/disable
								 *
								 *	@since rexly 1.0
								 */
								$title_breadcrumb	=	esc_html( get_post_meta( get_the_ID(), '_rexly_post_title_breadcrumb', true ) );
								if ( function_exists('yoast_breadcrumb') && ( $title_breadcrumb == 'rexly-title-breadcrumb-on' ) ) { ?>
									<!-- start breadcrumb -->
									<?php yoast_breadcrumb('<div class="breadcrumb">','</div>'); ?>
									<!-- End breadcrumb -->
							<?php } ?>
			            
			            </div>
		          	</div>
		        </div>
		    </div>
		</div>
	</section>
	<!-- End blog banner section -->
<?php endif; ?>