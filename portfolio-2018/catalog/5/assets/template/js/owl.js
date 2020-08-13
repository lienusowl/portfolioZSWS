/*Слайдер в шапке на главной*/
$(document).ready(function() {
	$('.header-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		navText: false,
		dots:true,
		mouseDrag:true,
		touchDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		},
		animateIn: 'fadeIn',
		animateOut: 'fadeOutLeft'
	});
	//var owl = $('.owl-carousel.works-slider');
	$('.works-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		navText: false,
		dots:false,
		mouseDrag:true,
		touchDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		},
		animateIn: 'fadeIn',
		animateOut: 'fadeOutLeft'
		/*onInitialized: function(e) {
		    $('.counter').text('1 из ' + this.items().length)
		    console.log();
		  }*/
	});
	/*owl.on('changed.owl.carousel', function(e) {
	  $('.counter').text(++e.page.index + ' из ' + e.item.count)
	});*/
});

