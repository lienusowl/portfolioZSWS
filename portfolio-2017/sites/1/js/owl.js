/*Слайдер в шапке на главной*/
$(document).ready(function() {
	$('.header-slider').owlCarousel({
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
				items:1,
				nav:false,
				dots:true
			},
			600:{
				items:1

			},
			1000:{
				items:1
			}
		}
	});
	$('.info-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
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
				items:1,
				nav:false,
				dots:true
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$('.reviews-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
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
				items:1,
				nav:false,
				dots:true
			},
			600:{
				items:1
			},
			1000:{
				items:3
			}
		}
	});
	$('.class-slider').owlCarousel({
		loop:false, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		mouseDrag:false,
		touchDrag:true,
		navText: false,
		dots:false,
		autoplay:false, //Автозапуск слайдера
		smartSpeed:300, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsiveClass:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1,
				slideBy:1
			},
			600:{
				items:2,
				slideBy:2
			},
			1000:{
				items:3,
				slideBy:3
			}
		},
		
	});
	$('.teachers-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:60, //Отступ от картино если выводите больше 1
		nav:false, //Отключил навигацию
		navText: false,
		dots:true,
		mouseDrag:false,
		touchDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1,
				slideBy:1,
				margin:0
			},
			600:{
				items:2,
				slideBy:2,
				margin:20
			},
			1000:{
				items:3,
				slideBy:3
			}
		}
	});
});

