$(document).ready(()=>{
	$('.carouselAnimales').slick({
		infinite: true,
	 	slidesToShow: 7,
	 	slidesToScroll: 1,
		prevArrow: '<img src="/assets/img/arrow-right.png" class="slide-arrow prev-arrow" />',
		nextArrow: '<img src="/assets/img/arrow-left.png" class="slide-arrow next-arrow" />',
		
	})
	$('#datepicker').datepicker({
		language: 'es'
	});
})