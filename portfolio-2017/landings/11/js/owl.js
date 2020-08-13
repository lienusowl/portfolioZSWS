/*Слайдер в шапке на главной*/
$(document).ready(function() {
	$('.sale-slider').owlCarousel({
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
		}
	});
		$('.reviews-slider').owlCarousel({
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
		}
	});
	/*Слайдер в карточке товара*/
	$('.cart-slider').owlCarousel({
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
				items:3,
				slideBy:3
			},
			600:{
				items:3,
				slideBy:3
			},
			1000:{
				items:4,
				slideBy:4
			}
		},
		
	});
});

