$(window).load(function () {
	$('.loader').fadeOut(2000);
});
$(window).load(function(){
     $('.img-banner').addClass("animation-n");
});

new WOW().init();
	wow = new WOW(
		{
			boxClass:     'wow',      // default
			animateClass: 'animated', // default
			offset:       0,          // default
			mobile:       true,       // default
			live:         true        // default
		}
	)
	wow.init();


// All Sliader
$(document).ready(function () {
	"use strict";
	// Slider Home
	
	$(".home-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
//        responsive: {
//            0: {
//                items: 1
//            },
//            600: {
//                items: 2
//            },
//            1000: {
//                items: 3
//            }
//        }
    });
	
// News Slider
	$(".news-slider").owlCarousel({
        nav: false,
        loop: true,
        navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
        dots: true,
        autoplay: 4000,
        items: 3,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2,
        		center: false,
            },
            1000: {
                items: 3
            },
            1400: {
                items: 3,
              center: false
            },
            2000: {
                items: 4,
              center: false
            }
        }
    });
  
  // client Slider
	$(".client-slider").owlCarousel({
        nav: false,
        loop: true,
        navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
        dots: true,
        autoplay: 4000,
        items: 2,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2,
        		center: false,
            },
            1000: {
                items: 2
            }
        }
    });
	
	
	

// Search
				  
jQuery('.btnSearch').click(function(){
  	jQuery('.site-search').addClass('open');
})

jQuery('.site-search').click(function(){
  	jQuery('.site-search').removeClass('open');
	}).children().click(function(e) {
	return false;
});
	

// jQuery counter
$('.counter').counterUp({
	delay: 50,
	time: 3000,
});
	
	
// FancyBox
$('[data-fancybox="gallery"]').fancybox();
	
});
  
// SideBar
$('.side-nav').mCustomScrollbar({
	autoHideScrollbar: false,
	setTop: 0,
	scrollInertia: 50,
	theme: "light-1"
});

$('.open-sidebar').on('click', function () {
	$('.sidebar').toggleClass('opened');
	$('.overlay_gen').fadeIn();
	$('body').addClass('sided');
});


$('.close-sidbar').on('click', function () {
	$('.sidebar').toggleClass('opened');
// 	$('.close-sidebar').fadeOut();
	$('body').removeClass('sided');
});

$('.sidebar .menu-item-has-children').click( function(){
   $(this).children('.sub-menu').toggle("slow");
});


//Nav
$(window).on("scroll", function() {
    if($(window).scrollTop() > 152) {
        $("nav.moved").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $("nav.moved").removeClass("active");
    }
});

// Top


$(".search").click(function(e) {
	$("#search").slideToggle(500);	
    
});



