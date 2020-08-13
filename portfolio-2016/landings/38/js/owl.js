$(document).ready(function() {
	$('.slider-header').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:false,
		touchDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:15500, //Время движения слайда
		autoplayTimeout:5000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
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

});
/*Слайдер наши работы*/
$(document).ready(function() {
	$('.works-slider-0').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});

	$('[href="#tab1"]').click() ;   
	$('.works-slider-1').owlCarousel({
		loop:false, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});

	$('[href="#tab2"]').click() ;
	$('.works-slider-2').owlCarousel({
		loop:false, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
	$('[href="#tab3"]').click() ;
	$('.works-slider-3').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
	$('[href="#tab4"]').click() ;
	$('.works-slider-4').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
	$('[href="#tab5"]').click() ;
	$('.works-slider-5').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:15, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
	$('[href="#tab0"]').click() ;
});
/*Слайдер комментариев на главной*/
$(document).ready(function() {
	$('.comm-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:false,
		stopOnHover:true, //Остановить прокрутку при наведении мышки
		mouseDrag:true,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:2
			}
		}
	});
});
/*Слайдер наши партнёры*/
$(document).ready(function() {
	$('.partners-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:60, //Отступ от картинок если выводите больше 1
		nav:true,
		navText: false,
		pagination:true,
		stopOnHover:true,
		mouseDrag:true,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:3000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:2
			},
			600:{
				items:4
			},
			1000:{
				items:5
			}
		}
	});
});
/*Слайдер спецпредложения*/
$(document).ready(function() {
	$('.sale-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		nav:true,
		navText: false,
		pagination:false,
		stopOnHover:true, //Остановить прокрутку при наведении мышки
		mouseDrag:false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:50000, //Время смены слайда
		responsive:{ //Адаптация в зависимости от разрешения экрана
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
});