/*Слайдер в шапке на главной*/
$(document).ready(function() {
	$('.gallery-slider').owlCarousel({
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
		thumbs: true,
    	thumbsPrerendered: true,
		responsive:{
			0:{
				items:1,
				nav:false
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
				items:1,
				nav:false
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

