jQuery(document).ready(function() {
    'use strict';


	jQuery('.single-carousel').owlCarousel({
		loop: true,
		nav:false,
		margin:10,
		autoplay:true,
		dots: false,
		navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
		responsive:{
			0:{
				items:1,
				loop:true
			},
			500:{
				items:5,
				loop:true
			},
			1000:{
				items:5,
				loop:true
			}
		}
	});

	$(".single-img").on('mouseenter', function(){
		var smallimg = $(this).children("img.single-small").attr('src');
		$("img.single-big").attr('src', smallimg);
	});


});