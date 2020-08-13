/*Слайдер в шапке на главной*/
$(document).ready(function() {
	$('.products-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:30, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		navText: false,
		dots:true,
		mouseDrag:true,
		touchDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:500, //Время движения слайда
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
				items:5,
				slideBy:1
			}
		}
	});
	$('.reviews-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		navText: false,
		dots:true,
		mouseDrag:true,
		touchDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:500, //Время движения слайда
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
				items:1,
				slideBy:1
			}
		}
	});
});

