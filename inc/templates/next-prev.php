<?php
/*
 *	Displays output for next/previous post links in post single
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 /*
  *	Enable / disable post next/prev
  *
  *	@since rexly 1.0
  */
  $post_next_prev = esc_html( get_theme_mod( 'rexly_blog_single_post_navi', '0' ) );
  if( $post_next_prev == '0' ) : ?>
	<!-- Start blog navigation -->
	<div class="single-blog-navigation-area">
		<nav class="single-blog-nav">
			<?php previous_post_link('<span class="blog-new-post"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> %link </span>', __( 'Previous', 'rexly' ) ); ?>
			<?php next_post_link( '<span class="blog-old-post"> %link <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>', __( 'Next', 'rexly' ) ); ?>
		</nav>
	</div>
	<!-- End blog navigation -->
<?php endif; ?>