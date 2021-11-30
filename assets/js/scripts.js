$(document).ready(()=>{
	$('.carouselAnimales').slick({
		infinite: true,
	 	slidesToShow: 8,
	 	slidesToScroll: 1,
		prevArrow: '<img src="/assets/img/Ventana_ResultadosDiarios_Carrusel_Derecha_LG_HD.png" class="slide-arrow prev-arrow" />',
		nextArrow: '<img src="/assets/img/Ventana_ResultadosDiarios_Carrusel_Izquierda_LG_HD.png" class="slide-arrow next-arrow" />'
	})
})