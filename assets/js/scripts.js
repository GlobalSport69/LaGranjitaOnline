$(document).ready(()=>{
    $('.carouselAnimalsSlider').slick({
        infinite: false,
	 	slidesToShow: 6,
	 	slidesToScroll: 1,
		edgeFriction: 5,
		prevArrow: '<img src="/assets/img/arrow-right.png" class="slide-arrow prev-arrow" />',
		nextArrow: '<img src="/assets/img/arrow-left.png" class="slide-arrow next-arrow" />',
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
    });

	$('#datepicker').datepicker({
		language: 'es'
	});
	$(".datepicker").datepicker({
		onSelect: function(dateText) {
			console.log("Selected date: " + dateText + "; input's current value: " + this.value);
		}
	});
})