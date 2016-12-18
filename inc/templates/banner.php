<?php
/*
 *	Outputs site banner contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
?>
<?php
/*
 *	Enable/disable blog title section
 *
 *	@since rexly 1.0
 */
 $blog_banner_section	=	esc_html( get_theme_mod( 'rexly_blog_title_section', '1' ) );
 if( $blog_banner_section == '1' ) : ?>
	<!-- Start blog banner section -->
	<section id="blog-banner">
		<div class="blog-overlay">
		    <div class="container">
		        <div class="row">
			        <div class="col-md-12">
			            <div class="blog-banner-area">
				            
							<?php if ( is_category() ) : ?>
								<!-- category archive -->
								<h2><?php single_cat_title( __( 'Archive for : ', 'rexly' ), true ); ?></h2>
		
							<?php elseif( is_tag() ) : ?>
								<!-- tag archive -->
								<h2><?php single_tag_title( __( 'Archive for : ', 'rexly' ), true ); ?></h2>
		
							<?php elseif( is_day() ) : ?>
								<!-- daily archive -->
								<h2><?php _e( 'Archive for : ', 'rexly' ); the_time( get_option( 'date_format' ) ); ?> </h2>
		
							<?php elseif( is_month() ) : ?>
								<!-- monthly archive -->
								<h2><?php _e( 'Archive for :  ', 'rexly' ); the_time( get_option( 'date_format' ) ); ?></h2>
		
							<?php elseif( is_year() ) : ?>
								<!-- yearly archive -->
								<h2><?php _e( 'Archive for :  ', 'rexly' ); echo date('Y'); ?></h2>
		
							<?php elseif( is_search() ) : ?>
								<!-- search archive -->
								<h2><?php printf( __( 'Results for : <span> %s</span>', 'rexly' ), get_search_query() ); ?></h2>
		
							<?php elseif( is_author() ) : ?>
								<!-- author archive -->
								<h2><?php _e('Posts by : ', 'rexly'); the_author(); ?></h2>
		
							<?php elseif( isset( $_GET['paged'] ) && !empty( $_GET['paged'] ) ) : ?>
								<!-- paged archive -->
								<h2><?php _e('Archives : ', 'rexly'); ?></h2>
		
							<?php else : ?>
								<!-- display default title if it's not archive pages -->
				            <?php 
					            /*
						         *	Banner title
						         *
						         *	@since rexly 1.0
					             */
					             $blog_banner_title	=	esc_html( get_theme_mod( 'rexly_blog_title_text', '' ) );
								if( $blog_banner_title != '') :
										echo '<h2> '. $blog_banner_title .' </h2>';
								endif; ?>
		
							<?php endif; ?>
				            
							<?php 
								/*
								 *	Breadcrumb
								 *
								 *	@since rexly 1.0
								 */
								 $blog_title_breadcrumb	=	esc_html( get_theme_mod( 'rexly_blog_title_breadcrumb', '0' ) );
								if ( function_exists('yoast_breadcrumb') && ( $blog_title_breadcrumb == '0' ) ) { ?>
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
<?php endif;?>