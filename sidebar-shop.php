<?php
/**
 * 	The template for displaying shop sidebar contents
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
?>
<aside class="blog-right">
	<?php 
		
		// Appear only shop pages
		if ( is_active_sidebar( 'rexly-shop-sidebar' ) ) :	
			dynamic_sidebar('rexly-shop-sidebar');
		endif;
	
	?>
</aside>