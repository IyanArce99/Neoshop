/**
 * TODO: Desarrollar el código del slider
 */

 $('.js-slider').slick({
 	autoplay: true,
 	dots: false,
 	dotsClass: "slider__dots",
 	fade: true,
 	prevArrow: "<span class='slider__prev'><i class='fa fa-chevron-left'></i></span>",
 	nextArrow: "<span class='slider__next'><i class='fa fa-chevron-right'></i></span>",
 	responsive: [
	 	{
	 		breakpoint: 1200,
	 		settings: {
	 			arrows: false,
	 			dots: true,
	 		}
	 	}
 	]
 });

