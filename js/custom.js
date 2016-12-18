/*
 *	This file contains theme js calls
 *
 *	@version 1.0
 *	@since rexly
 * 

Custom JS

1. HEADER CONTENT SLIDE
2. FIXED MENU
3. MENU SMOOTH SCROLLING
4. MOBILE MENU CLOSE 
5. HEADER IMAGE HEIGHT SET
	
**/

(function( $ ){
	
	"use strict";


	/* ----------------------------------------------------------- */
	/*  1. HEADER CONTENT SLIDE (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	$('.header-slide').slick({
		dots: false,
		infinite: true,
		speed: 500,
		arrows:false, 
		autoplay: true,     
      	slidesToShow: 1,
		slide: 'span',
		fade: true,
		cssEase: 'linear'
	});

	/* ----------------------------------------------------------- */
	/*  2. FIXED MENU
	/* ----------------------------------------------------------- */

	var distance = $('.main-navbar').offset().top,
	
    $window = $(window);
    
	$window.bind('scroll', function () {
		
    if ( $window.scrollTop() > distance ) {
        $('.main-navbar').addClass('navbar-fixed-top');
        $('.logo').addClass('logo-compressed');
        $('.main-nav li a').addClass('less-padding');
//         $('.search-area input[type="text"]').css('top','30%');
        
        
	    } else {
	        $('.main-navbar').removeClass('navbar-fixed-top');
	        $('.logo').removeClass('logo-compressed');
	        $('.main-nav li a').removeClass('less-padding');
// 	        $('.search-area input[type="text"]').css('top','11%');
	    }
	});

	/* ----------------------------------------------------------- */
	/*  3. MENU SMOOTH SCROLLING
	/* ----------------------------------------------------------- */ 
	
		//MENU SCROLLING WITH ACTIVE ITEM SELECTED

		// Cache selectors
		var lastId,
		topMenu = $(".main-nav"),
		topMenuHeight = topMenu.outerHeight()+13,
		// All list items
		menuItems = topMenu.find('a[href^=\\#]'),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
		menuItems.click(function(e){
		  var href = $(this).attr("href"),
		      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+32;
		  $('html, body').stop().animate({ 
		      scrollTop: offsetTop
		  }, 1500);
		  e.preventDefault();
		});

		// Bind to scroll
		$(window).scroll(function(){
		   // Get container scroll position
		   var fromTop = $(this).scrollTop()+topMenuHeight;
		   
		   // Get id of current scroll item
		   var cur = scrollItems.map(function(){
		     if ($(this).offset().top < fromTop)
		       return this;
		   });
		   // Get the id of the current element
		   cur = cur[cur.length-1];
		   var id = cur && cur.length ? cur[0].id : "";
		   
		   if (lastId !== id) {
		       lastId = id;
		       // Set/remove active class
		       menuItems
		         .parent().removeClass("active")
		         .end().filter("[href=\\#"+id+"]").parent().addClass("active");
		   }           
		})

	/* ----------------------------------------------------------- */
	/*  4. MOBILE MENU CLOSE 
	/* ----------------------------------------------------------- */ 

	$('.navbar-nav').on('click', 'li a', function() {
	  $('.in').collapse('hide');
	});
	
	/* ----------------------------------------------------------- */
	/*  5. HEADER IMAGE HEIGHT SET
	/* ----------------------------------------------------------- */ 
	
	$(window).load(function() {
		
		//for main page header image height
		$('.header-img').css('height', window.innerHeight);
		
		if($('.header-img').width() <= 991) {
			 
			$('.header-img').css('height', 'auto');
		}
		
		//for blog header image height
		$('#blog-header-banner').css('height', window.innerHeight);
		
	});
	
	$(window).resize(function() {
		
		//for main page header image height
		
		$('.header-img').css('height', window.innerHeight);
		
		if($('.header-img').width() <= 991) { 
			
			$('.header-img').css('height', 'auto');
		}
		
		//for blog header image height
		
		$('#blog-header-banner').css('height', window.innerHeight);
	
	});
	
})( jQuery );