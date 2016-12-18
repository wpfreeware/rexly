<?php
/*
 *	Displays output for author bio
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

 /*
  *	Enable / disable post author bio
  *
  *	@since rexly 1.0
  */
  $post_author_bio = esc_html( get_theme_mod( 'rexly_blog_single_author_bio', '0' ) );
  if( $post_author_bio == '0' ) : ?>
	<!-- Start author bio -->
	<div class="author-bio">
		<div class="media">
		    <div class="media-left">    
		        <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
		    </div>
		    <div class="media-body">
		       <h4 class="author-name"><?php the_author_meta( 'display_name' ); ?></h4>
		       	<ul class="author-social">
		           	<?php if( get_the_author_meta('facebook') !== '' ): ?>
						<li><a href="<?php esc_url( the_author_meta('facebook') );?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<?php endif; ?>
					
					<?php if( get_the_author_meta('twitter') ): // twitter ?>
						<li><a href="https://twitter.com/<?php esc_html( the_author_meta('twitter') );?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<?php endif; ?>
					
					<?php if( get_the_author_meta('googleplus') !== '' ) : ?>
						<li><a href="<?php esc_url( the_author_meta('googleplus') );?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<?php endif; ?>
					
					<?php if( get_the_author_meta('url') ): // url ?>
						<li><a href="<?php esc_url( the_author_meta('url') );?>" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a></li>
					<?php endif; ?>
				</ul>
				
		       <p><?php the_author_meta('description');?></p>
		       
		    </div>
		</div>
	</div>
	<!-- End author bio -->
<?php endif; ?>