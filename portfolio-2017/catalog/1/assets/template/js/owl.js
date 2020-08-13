$(document).ready(function() {
	$('.comm-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		navText: false,
		mouseDrag:true,
		touchDrag:false,
		dots:false,
		autoplayHoverPause: true,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1500, //Время движения слайда
		autoplayTimeout:6000, //Время смены слайда
		//lazyLoad:true,
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
		autoplayHoverPause:true
	});
});
/*Слайдер проекты - контент*/
$(".nav-tabs .item").click(function(e) {
  e.preventDefault();
  $(".nav-tabs .item").removeClass('active');
  $(this).addClass('active');
})
$(document).ready(function() {
	$('.work-content-slider').owlCarousel({
		loop:false, //Зацикливаем слайдер
		margin:12, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		mouseDrag:false,
		touchDrag:true,
		navText: false,
		dots:false,
		lazyLoad:true,
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
				items:3,
				slideBy:3
			},
			1000:{
				items:3,
				slideBy:3
			}
		},
		
	});
});