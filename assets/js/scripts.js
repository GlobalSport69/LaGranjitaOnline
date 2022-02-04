$(document).ready(()=>{
	$('.carouselAnimales').slick({
		infinite: true,
	 	slidesToShow: 8,
	 	slidesToScroll: 1,
		prevArrow: '<img src="/assets/img/arrow-right.png" class="slide-arrow prev-arrow" />',
		nextArrow: '<img src="/assets/img/arrow-left.png" class="slide-arrow next-arrow" />',
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 4,
			}
		}]
	})
	$('#datepicker').datepicker({
		language: 'es'
	});
})