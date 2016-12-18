<?php
/**
 * The default template for displaying no content found
 *
 * Used for index/archive/search.
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-from-blog' ); ?>>
	<!-- No content -->
	<p class="blog-error">
		<?php _e( 'Sorry! couldn\'t find the posts you\'re looking for...', 'rexly' ); ?>
	</p>
	<!-- No content -->
</article>