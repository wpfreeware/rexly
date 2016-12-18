<?php
/*
 *	Output blog posts items
 *	Used in frontpage & related posts
 *
 *	@version 1.0
 *	rexly 1.0
 */
?>
<article class="single-from-blog">

	<figure>
	  <a href="<?php esc_url( the_permalink() ); ?>">
	      <?php the_post_thumbnail( 'post-thumbnails', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
	  </a>
	</figure>
	
	<div class="blog-title">
	  <h2><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
	  
	  <?php
	      /*
	       *	Enable disable post meta options (name & date)
	       *
	       *	@since rexly 1.0
	       */
	       $post_author 	=	esc_html( get_theme_mod( 'rexly_home_blog_author_name', '0' ) );
	       $post_date 		=	esc_html( get_theme_mod( 'rexly_home_blog_post_date', '0' ) );
	       if( ( $post_author == '0' ) || ( $post_date == '0' ) ) : ?>
	          <p>
	              <?php if( $post_author == '0' ) : _e( 'Posted by', 'rexly' ); ?> 
	                  <a class="blog-admin" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
	               <?php endif; ?> 
	              
	              <?php if( $post_date == '0' ) : _e( 'On', 'rexly' ); ?> 
	              	  <span class="blog-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
	              <?php endif; ?>
	           </p>
	   <?php endif; ?>
	   
	</div>
	
	<p><?php echo rexly_custom_post_excerpt(); ?></p>
	
	<?php
	    /*
	     *	Enable/diable post comment
	     *
	     *	@since rexly 1.0
	     */
	     $post_comment 		=	esc_html( get_theme_mod( 'rexly_home_blog_post_comment', '0' ) );
	     if( $post_comment == '0' ) : ?>
	        <div class="blog-footer">
	          <?php if ( comments_open() ) :  ?>
	          	<span class="fa fa-comment"></span>
				<?php 
					comments_popup_link( 
						__('0', 'rexly'), 
						__('1', 'rexly'), 
						__('%', 'rexly') );
				
				endif; ?>
	        </div>
	<?php endif; ?>

</article>