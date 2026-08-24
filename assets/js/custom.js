/* Custom JS File */
jQuery(document).ready(function () {
	// Slider JS
	jQuery('.polite_3carousel').slick({
		slidesToShow: 3,
		slidesToScroll: 2,
		dots: true,
		speed: 800,
		autoplaySpeed: 8000,
		autoplay: false,
		pauseOnHover: true,
		adaptiveHeight: true,
		prevArrow:
			'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
		nextArrow:
			'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});