/*Слайдер в шапке на главной*/
$(document).ready(function() {
	$('.gallery-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:30, //Отступ от картино если выводите больше 1
		nav:false, //Отключил навигацию
		navText: false,
		dots:true,
		mouseDrag:true,
		touchDrag:true,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1,
				dots:true,
				nav:false
			},
			700:{
				items:1,
				dots:true,
				nav:false

			},
			1000:{
				items:3
			}
		}
	});
});

