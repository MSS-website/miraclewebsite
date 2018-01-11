// JavaScript for Themezinho items
(function($) {
$(document).ready(function() {
	"use strict";
	
	
	// One Page Scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});

	// One Page Scroll Links
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });


	// Mobile Toggle	  
	$('.toggle-menu').jPushMenu({closeOnClickLink: false});
    $('.dropdown-toggle').dropdown();
	
	
	
	// Text Rotater
		var sloganArea = $('.slogan ul');
		sloganArea.width(sloganArea.find('li').eq(0).find('span').width());
	
		setInterval(function () {
			var itemHeight = $('.slogan ul li').eq(0).height();
	
			sloganArea.animate({
				width : $('.slogan ul li').eq(1).find('span').width(),
				top : itemHeight * -1
			},200, function(){
				sloganArea.append($('.slogan ul li').eq(0));
				sloganArea.css('top', 0);
	
				$('.slogan ul li').each(function(i){
					$(this).css('top', i*itemHeight);
				});
			});
	
		}, 2000);
		
		
		
	// OWL Slider		
		$(".owl-slider").owlCarousel({
			items:1,
			loop:true,
			nav:false,
			dots:true,
			center:true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:false,
			smartSpeed:450
			
	  	});
		

	// OWL Carousel		
 		$(".owl-carousel").owlCarousel({
			loop:true,
			nav:true,
			center:true,
			dots:true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:false,
			smartSpeed:450,
			responsive:{
			375:{
				items:1
			},
			768:{
				items:3
			},
			1024:{
				items:3,
			},
			1199:{
				items:3,
			}
		   }
	  	});
		
	});
		
		
	// Fixed Navigation
		$(window).on("scroll touchmove", function () {
		$('.navbar-default').toggleClass('fixed-bg', $(document).scrollTop() > 1);
		});	
	
	
	// Wow Animation
		wow = new WOW(
      	{
       		animateClass: 'animated',
        	offset:       50
      	}
    	);
    	wow.init();
	

})(jQuery);