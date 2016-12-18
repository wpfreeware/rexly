<?php
/**
 * The default template for displaying standard content
 *
 * Used for index/archive/search.
 *
 *	@version 1.0
 *	@since rexly 1.0
 */
?>
<!-- Start single blog post -->
<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-from-blog' ); ?>>
	
	<?php if( has_post_thumbnail() ): ?>
	<figure>
	  	<a href="<?php esc_url( the_permalink() ); ?>">
		  	<?php the_post_thumbnail( 'post-thumbnails', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
		</a>
	</figure>
	<?php endif; ?>
	
	<div class="blog-title">
	    <h2><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
	    
	  <?php
	      /*
	       *	Enable disable post meta options (name & date)
	       *	
	       *	@since rexly 1.0
	       */
	       $blog_post_author 	=	esc_html( get_theme_mod( 'rexly_blog_meta_author', '0' ) );
	       $blog_post_date 		=	esc_html( get_theme_mod( 'rexly_blog_meta_date', '0' ) );
	       if( ( $blog_post_author == '0' ) || ( $blog_post_date == '0' ) ) : ?>
	          <p>
	              <?php if( $blog_post_author == '0' ) : _e( 'Posted by', 'rexly' ); ?> 
	                  <a class="blog-admin" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
	               <?php endif; ?> 
	              
	              <?php if( $blog_post_date == '0' ) : _e( 'On', 'rexly' ); ?> 
	              	  <span class="blog-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
	              <?php endif; ?>
	           </p>
	   <?php endif; ?>
	    
	</div>
	
		<?php
			/*
			 *	excerpt or full content display
			 *
			 *	@since rexly 1.0
			 */
			$excerpt_or_full_content = esc_html( get_theme_mod( 'rexly_blog_excerpt_full', 'rexly-excerpt' ) );
			
			if( $excerpt_or_full_content == 'rexly-excerpt' ) :
				
				the_excerpt();
			else :
				the_content();
			endif;
		?>
	
		<?php
		    /*
		     *	Enable/diable post comment & category
		     *
		     *	@since rexly 1.0
		     */
		     $blog_post_comment 		=	esc_html( get_theme_mod( 'rexly_blog_comments_count', '0' ) );
		     $blog_post_cat 			=	esc_html( get_theme_mod( 'rexly_blog_meta_cat', '0' ) );
		     if( ( $blog_post_comment == '0' ) || ( $blog_post_cat == '0' ) ) :   ?>
		        <div class="blog-footer">
		          
		          <?php if ( comments_open() && ( $blog_post_comment == '0' ) ) :  ?>
		          	<span class="fa fa-comment"></span>
					<?php 
						comments_popup_link( 
							__('0', 'rexly'), 
							__('1', 'rexly'), 
							__('%', 'rexly') );
					
					endif; ?>
					
					<?php
					    if( $blog_post_cat == '0' ) : ?>
					    	<span class="fa fa-folder" aria-hidden="true"></span>
							<?php the_category('<span>/</span> '); ?>
						<?php endif; ?>
					
		        </div>
		<?php endif; ?>
	
</article>
<!-- End single blog post -->