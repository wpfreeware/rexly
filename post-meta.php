<?php
/*
 *	Outputs post meta
 *	@contains: author name, post date, comments count, category
 *	
 *	@version 1.0
 *	@since rexly 1.0
 */
$blog_post_author 	=	esc_html( get_theme_mod( 'rexly_blog_meta_author', '0' ) );
$blog_post_date 	=	esc_html( get_theme_mod( 'rexly_blog_meta_date', '0' ) );
$blog_post_comment 	=	esc_html( get_theme_mod( 'rexly_blog_comments_count', '0' ) );
$blog_post_cat 		=	esc_html( get_theme_mod( 'rexly_blog_meta_cat', '0' ) );

if( ( $blog_post_author == '0' ) || ( $blog_post_date == '0' ) || ( $blog_post_comment == '0' ) || ( $blog_post_cat == '0' ) ) : ?>
  <p>
	  <!-- author name -->
      <?php if( $blog_post_author == '0' ) : _e( 'Posted by', 'rexly' ); ?> 
          <a class="blog-admin" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
       <?php endif; ?> 
      
      <!-- date -->
      <?php if( $blog_post_date == '0' ) : _e( 'On', 'rexly' ); ?> 
      	  <span class="blog-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
      <?php endif; ?>
      
      <!-- comments -->
      <?php if ( comments_open() && ( $blog_post_comment == '0' ) ) :  ?>
      	<span class="fa fa-comment"></span>
		<?php 
			comments_popup_link( 
				__('0', 'rexly'), 
				__('1', 'rexly'), 
				__('%', 'rexly') );
		
		endif; ?>
		
		<!-- category -->
		<?php
		    if( $blog_post_cat == '0' ) : ?>
		    	<span class="fa fa-folder" aria-hidden="true"></span>
				<?php the_category('<span>/</span> '); ?>
		<?php endif; ?>

		<?php edit_post_link( __(' Edit', 'rexly' ), '<i class="fa fa-pencil" aria-hidden="true"></i>', '' ); ?>

       </p>
<?php endif; ?>