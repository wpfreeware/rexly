<?php
/**
 * The template for displaying search form
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
?>
<form ole="search" method="get" id="searchform" class="blog-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
  <input type="text" name="s" id="search" />
  <button class="button button-default" data-text="<?php _e( 'Search', 'rexly' );?>" type="submit"><span><?php _e( 'Search', 'rexly' ); ?></span></button>
</form>