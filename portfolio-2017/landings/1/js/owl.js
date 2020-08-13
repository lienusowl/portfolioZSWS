/*Слайдер наши работы - контент*/
$(document).ready(function() {
	$('.types-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		dots:false,
		mouseDrag:true,
		touchDrag:true,
		nav:true,
		navText:false,
		lazyLoad:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:150, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		responsiveClass:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:2,
				slideBy:2
			},
			600:{
				items:4,
				slideBy:4
			},
			1000:{
				items:6,
				slideBy:6
			}
		},
		
	});
	$('.certificates-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		dots:false,
		mouseDrag:true,
		touchDrag:true,
		nav:true,
		navText:false,
		lazyLoad:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
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
	$('.storage-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		dots:false,
		mouseDrag:true,
		touchDrag:true,
		nav:true,
		navText:false,
		lazyLoad:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
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
	$('.office-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		dots:false,
		mouseDrag:true,
		touchDrag:true,
		nav:true,
		navText:false,
		lazyLoad:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
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
				items:2,
				slideBy:2
			}
		},
		
	});
	$('.team-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		dots:false,
		mouseDrag:true,
		touchDrag:true,
		nav:true,
		navText:false,
		lazyLoad:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
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
});