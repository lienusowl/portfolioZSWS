var owl = $('.reviews-slider');

$(document).ready(function() {
	$('.reviews-slider').owlCarousel({
	loop:true, //Зацикливаем слайдер
	margin:0, //Отступ от картино если выводите больше 1
	nav:true, //Отключил навигацию
	navText: false,
	dots:false,
	mouseDrag:true,
	touchDrag:false,
	autoplay:false, //Автозапуск слайдера
	smartSpeed:450,
	autoplayTimeout:5000,
	onInitialized: function(e) {
	    $('.counter').text('1 из ' + this.items().length)
	    console.log();
	  },
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
	$('.timetable-slider').owlCarousel({
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
			items:1,
			dots:false
		},
		600:{
			items:1,
			dots:false
		},
		1000:{
			items:3
		}
	}
	});
	$('.price-slider').owlCarousel({
	loop:false, //Зацикливаем слайдер
	margin:30, //Отступ от картино если выводите больше 1
	nav:false, //Отключил навигацию
	navText: false,
	dots:false,
	mouseDrag:false,
	touchDrag:false,
	autoplay:false, //Автозапуск слайдера
	smartSpeed:1500, //Время движения слайда
	autoplayTimeout:6000, //Время смены слайда
	autoplayHoverPause:true,
	responsive:{
		0:{
			items:1,
			dots:true
		},
		600:{
			items:3,
			dots:false,
			margin:10
		},
		1000:{
			items:3
		}
	}
	});
	$('.faq-slider').owlCarousel({
	loop:true, //Зацикливаем слайдер
	margin:30, //Отступ от картино если выводите больше 1
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
			items:1,
			nav:false
		},
		600:{
			items:1,
			nav:false
		},
		1000:{
			items:3
		}
	}
	});
});
owl.on('changed.owl.carousel', function(e) {
  $('.counter').text([6,7,1,2,3,4,5,6,7,1,2][e.item.index]  + ' из ' + e.item.count)
});