<?php
/*
 *	The comments template
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

<?php if ( have_comments() ) : ?>
	
	<!--Start comment area-->
	<div id="comments" class="blog-comments-reply-area"> 
	
		<h3>
			<?php 
				comments_number( 
					__( 'No Comments', 'rexly' ), 
					__( '1 Comment', 'rexly' ), 
					_n( '% Comment', '% Comments', 
					get_comments_number(), 'rexly' ) );
			?>
		</h3>
		
		<div class="comments">
		  
			<ul class="commentlist">
			
			<!-- comment link -->
			  <?php
				wp_list_comments( array(
				  'style'             => 'ul',
				  'short_ping'        => true,
				  'avatar_size'       => 80,
				  'callback'          => 'rexly_custom_comments_list',
				  'type'              => 'all',
				  'reply_text'        => __( 'Reply' , 'rexly' ),
				  'page'              => '',
				  'per_page'          => '',
				  'reverse_top_level' => null,
				  'reverse_children'  => ''
				) );
			  ?>			
			
			</ul>
		  
			<!--numeric comment pagination-->
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
				
			  <!-- start Comments navigation -->
			  	<nav>
				  	<ul class="pagination blog-pagination">	
						<?php paginate_comments_links(); ?>
				  	</ul>
			  	</nav>
			  
			<?php endif; ?>		
		  
		</div>
		
		<?php if ( ! comments_open() ) : ?>
			<p class="rexly-no-comments"><?php _e( 'Comments are closed' , 'rexly' ); ?></p>
		<?php endif; ?>		
				
	</div>
	<!--End comment area-->

  <?php endif; // if ( have_comments() ) ?>
  
  
<?php comment_form(); ?>