<?php
/*
 * 	This file contains theme color scheme
 *
 *	@version 1.0
 *	@since rexly 1.0
 */

function rexly_site_color_scheme(){
	
	/*
	 *	Set variable
	 *
	 *	@since rexly 1.0
	 */
	
	// color
	$theme_color 	= 	esc_html( get_theme_mod( 'rexly_color_scheme', '#FF6634' ) ); 


	/*
	 *	Site main color scheme
	 *
	 *	@since rexly 1.0
	 */			
	$site_color_scheme	=	
	
		'<style type="text/css">
			
			.header-content h2 span,
			.logo  span,
			.main-nav li a:hover,
			.navbar-default .navbar-nav > .active > a,
			.navbar-default .navbar-nav > .active > a:hover,
			.navbar-default .navbar-nav > .active > a:focus,
			.navbar-default .navbar-nav > li > a:hover,
			.navbar-default .navbar-nav > li > a:focus,
			.tittle>span,
			.team-grid li:hover .team-address p,
			.single-service:hover .service-icon,
			.single-service:hover .service-title,
			.single-counter > span,
			.single-from-blog .blog-title h2 a:hover,
			.single-from-blog .blog-title h2 a:focus,
			.single-from-blog .blog-title .blog-admin,
			.blog-details .blog-title a:hover,
			.blog-details .blog-title a:focus,
			.single-from-blog .blog-footer a:hover,
			.single-from-blog .blog-footer a:focus,
			.breadcrumb .breadcrumb_last,
			.error-no p,
			.blog-details-content>a:hover,
			.scrollToTop,
			.footer-bottom p a,
			.blog-pagination > li > a,
			.blog-pagination > li > span,
			.single-widget ul li a:hover,
			.single-widget ul li a:focus,
			.post-share li a:hover,
			.post-share li a:focus,
			.post-tag li a:hover,
			.post-tag li a:focus,
			.comment-respond .logged-in-as a:hover,
			.comment-respond .logged-in-as a:focus,
			.author-social li a:hover,
			.author-social li a:focus,
			.calendar_wrap table #prev a:hover,
			.calendar_wrap table #next a:hover,
			.rexly-single-pagination a:hover,
			.rexly-single-pagination a:focus,
			.single-from-blog ol li a:hover,
			.single-from-blog ol li a:focus,
			.woocommerce .woocommerce-breadcrumb,
			.woocommerce a.added_to_cart:hover,
			.woocommerce a.added_to_cart:focus,
			.woocommerce .star-rating span::before,
			.woocommerce ul.products li.product .button,
			.woocommerce div.product .entry-summary .product_meta span a:hover,
			.woocommerce div.product .entry-summary .product_meta span a:focus,
			.woocommerce div.product .entry-summary .woocommerce-product-rating a:hover,
			.woocommerce div.product .entry-summary .woocommerce-product-rating a:focus,
			.woocommerce-message::before,
			.woocommerce-info::before,
			.woocommerce-info a:hover,
			.woocommerce-info:focus,
			.woocommerce div.product form.cart .reset_variations:hover,
			.woocommerce div.product form.cart .reset_variations:focus,
			.woocommerce .login .lost_password a:hover,
			.woocommerce .login .lost_password a:hover:focus,
			#add_payment_method #payment .payment_method_paypal .about_paypal:hover, 
			.woocommerce-cart #payment .payment_method_paypal .about_paypal:hover, 
			.woocommerce-checkout #payment .payment_method_paypal .about_paypal:hover,
			.woocommerce-MyAccount-content table td a:hover,
			.woocommerce-MyAccount-content table td a:focus,
			.woocommerce-MyAccount-content p a:hover,
			.woocommerce-MyAccount-content p a:focus,
			.woocommerce-cart .cart_item a:hover,
			.woocommerce-MyAccount-navigation ul li a:hover,
			.woocommerce-MyAccount-navigation ul li a:focus,
			.popular-post-widget .media-heading a:hover,
			.popular-post-widget .media-heading a:focus,
			.instagram-feed .slick-dots li.slick-active button::before,
			.instagram-feed .slick-prev::before,
			.instagram-feed .slick-next::before,
			.single-price .price-header::after,
			.button-default,
			.single-wc-content span,
			.woocommerce div.product .entry-summary form.cart .button,
			.single-price .price-amount,
			.portfolio-menu ul li:hover,
			.blog-comments-reply-area .comments .commentlist li .reply-btn:hover,
			.blog-comments-reply-area .comments .commentlist li .reply-btn:focus,
			.blog-comments-reply-area .comments .commentlist li .reply-btn a:hover, 
			.blog-comments-reply-area .comments .commentlist li .reply-btn a:focus,
			.more-link:hover,
			.blog-comments-reply-area .comments .commentlist li .media-body .author-name a:hover,
			.blog-comments-reply-area .comments .commentlist li .media-body .author-name a:focus {
				color: '. $theme_color .';
			}
			
			.search-area input[type="submit"],
			.single-wc-content:hover .wc-icon,
			.about-left,
			.single-service:hover:after,
			.single-price .price-header,
			.standard-price a,
			.portfolio-social-icon a,
			#infinite-handle span button:hover,
			#infinite-handle span button:focus,
			.portfolio-title,
			.instagram-feed .slick-dots li.slick-active button,
			.woocommerce ul.products li.product .button:hover,
			.woocommerce ul.products li.product .button:focus,
			.woocommerce nav.woocommerce-pagination ul li a:focus, 
			.woocommerce nav.woocommerce-pagination ul li a:hover, 
			.woocommerce nav.woocommerce-pagination ul li span.current,
			.widget_shopping_cart .buttons .button,
			.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
			.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
			.woocommerce .widget_price_filter .price_slider_amount .button:hover,
			.woocommerce .widget_price_filter .price_slider_amount .button:focus,
			.woocommerce div.product .entry-summary form.cart .button:hover,
			.woocommerce div.product .entry-summary form.cart .button:focus,
			.woocommerce #respond input#submit, 
			.woocommerce a.button, 
			.woocommerce button.button, 
			.woocommerce input.button,
			.woocommerce #respond input#submit.alt, 
			.woocommerce a.button.alt, 
			.woocommerce button.button.alt, 
			.woocommerce input.button.alt,
			.scrollToTop:hover,
			.scrollToTop:focus,
			.blog-link-post a:hover,
			.blog-link-post a:focus,
			.loader:before,
			.woocommerce-product-search input[type="submit"],
			.woocommerce div.product .woocommerce-tabs ul.tabs li,
			.team-info,
			.introduction-btn,
			.blog-area .sticky {
				background-color: '. $theme_color .';  
			}
			
			.knowmore-btn:hover,
			.knowmore-btn:focus,
			.download-btn:hover,
			.download-btn:focus,
			.navbar-default .navbar-toggle:hover,
			.navbar-default .navbar-toggle:focus,
			.blog-pagination > li > a:hover,
			.blog-pagination > li > span:hover,
			.blog-pagination > li > a:focus,
			.blog-pagination > li > span:focus,
			.blog-pagination > li .current,
			.blog-pagination > li > a:hover,
			.blog-pagination > li > span:hover,
			.blog-pagination > li > a:focus,
			.blog-pagination > li > span:focus,
			.tagcloud a:hover,
			.tagcloud a:focus,
			.single-blog-nav a:hover,
			.single-blog-nav a:focus,
			.comment-respond .comment-form input[type="submit"]:hover,
			.comment-respond .comment-form input[type="submit"]:focus,
			.post-password-form input[type="submit"]:hover,
			.wpcf7-form .wpcf7-submit:hover,
			.button-default:hover,
			.button-default:focus {
				background-color: '. $theme_color .';
				border-color: '. $theme_color .';
			}
			
			.search-area input[type="text"]:focus:hover,
			.search-area input[type="text"]:focus,
			.woocommerce div.product .woocommerce-tabs ul.tabs::before,
			.single-price a,
			.single-price .price-amount {
				border-bottom: 1px solid '. $theme_color .';  
			}
			
			.button-default:hover,
			.woocommerce div.product .woocommerce-tabs ul.tabs li::after, 
			.woocommerce div.product .woocommerce-tabs ul.tabs li::before,
			.woocommerce form .form-row .input-text:focus, 
			.woocommerce-page form .form-row .input-text:focus,
			.woocommerce-MyAccount-navigation ul li:hover,
			.woocommerce-MyAccount-navigation ul li:focus,
			.comment-respond .comment-form input[type="text"]:focus, 
			.comment-respond .comment-form input[type="email"]:focus, 
			.comment-respond .comment-form input[type="url"]:focus, 
			.comment-respond .comment-form textarea:focus,
			.contact-form .form-control:focus,
			.portfolio-menu ul li:hover,
			.blog-comments-reply-area .comments .commentlist li .reply-btn:hover,
			.blog-comments-reply-area .comments .commentlist li .reply-btn:focus,
			.blog-comments-reply-area .comments .commentlist li .reply-btn a:hover, 
			.blog-comments-reply-area .comments .commentlist li .reply-btn a:focus,
			.single-widget h3,
			blockquote{
				border-color: '. $theme_color .';
			}
			
			.contact-form .form-control:focus,
			.wpcf7-form .wpcf7-text:focus,
			.wpcf7-form .wpcf7-textarea:focus,.woocommerce ul.products li.product .button,
			.woocommerce nav.woocommerce-pagination ul li a, 
			.woocommerce nav.woocommerce-pagination ul li span,
			.single-wc-content span,
			.woocommerce div.product .entry-summary form.cart .button,
			.woocommerce-product-search input[type="submit"],
			.woocommerce div.product .woocommerce-tabs ul.tabs li {
				border: 1px solid '. $theme_color .';    
			}
			
			.single-wc-content:hover .wc-tittle{
				border-bottom: 2px solid '. $theme_color .';  
			}
			
			.button-default,
			.error-no {  
				border: 2px solid '. $theme_color .';
			}
			
			.single-service {
				border-bottom: 5px solid '. $theme_color .';
			}
			
			.loader {  
				background: '. $theme_color .';
				background: -moz-linear-gradient(left, '. $theme_color .' 10%, rgba(255, 255, 255, 0) 42%);
				background: -webkit-linear-gradient(left, '. $theme_color .' 10%, rgba(255, 255, 255, 0) 42%);
				background: -o-linear-gradient(left, '. $theme_color .' 10%, rgba(255, 255, 255, 0) 42%);
				background: -ms-linear-gradient(left, '. $theme_color .' 10%, rgba(255, 255, 255, 0) 42%);
				background: linear-gradient(to right, '. $theme_color .' 10%, rgba(255, 255, 255, 0) 42%);  
			}
			
			.woocommerce-message,
			.woocommerce-info{
				border-top-color: '. $theme_color .';
			}
			
			.woocommerce div.product .woocommerce-tabs ul.tabs li::before {
				box-shadow: 2px 2px 0 '. $theme_color .';
			}
			
			.woocommerce div.product .woocommerce-tabs ul.tabs li::after {
			  box-shadow: -2px 2px 0 '. $theme_color .';
			}
					
		</style>';
	
	
	echo $site_color_scheme;	

}
add_action( 'wp_head', 'rexly_site_color_scheme' ); 