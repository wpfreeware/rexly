<?php
/**
 * The template for displaying sidebar contents
 *
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
?>
<aside class="blog-right">

	<?php

		if ( is_page() ) :

			// Appear only pages
			if ( is_active_sidebar( 'rexly-page-sidebar' ) ) :
				dynamic_sidebar('rexly-page-sidebar');
			endif;

		else :

			// Appear everywhere except pages
			if ( is_active_sidebar( 'rexly-post-sidebar' ) ) :
				dynamic_sidebar( 'rexly-post-sidebar' );
			endif;

		endif;

	?>
	
</aside>