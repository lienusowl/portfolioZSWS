/*Слайдер в шапке на главной*/
$(document).ready(function() {
	$('.cottages-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		nav:false, //Отключил навигацию
		navText: false,
		dots:false,
		mouseDrag:false,
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
		}
	});
	var owl = $('.cottages-slider');
	owl.owlCarousel();
	// Go to the next item
	$('.cottages-slider-next').click(function() {
	    owl.trigger('next.owl.carousel');
	})
	$('.reviews-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:30, //Отступ от картино если выводите больше 1
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
		}
	});
	$('.page-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:30, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		navText: false,
		dots:false,
		mouseDrag:true,
		touchDrag:false,
		autoplay:false, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:6
			}
		}
	});
});

