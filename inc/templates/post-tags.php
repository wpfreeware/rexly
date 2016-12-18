<?php
/*
 *	Displays output for post tags
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
 
 /*
  *	Enable / disable post tags
  *
  *	@since rexly 1.0
  */
  $post_tags = esc_html( get_theme_mod( 'rexly_blog_single_tags_on_off', '0' ) );
  if( $post_tags == '0' ) : ?>
	<!-- Start blog tags -->
	<div class="single-blog-tag">
		<ul class="post-tag">
			<?php the_tags( '<li><i class="fa fa-tag" aria-hidden="true"></i> '. __( 'Tags:', 'rexly' ) .' ', ', ', '</li>' ); ?>
		</ul>
	</div>
	<!-- End blog tags -->
<?php endif; ?>