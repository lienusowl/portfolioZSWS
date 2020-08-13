$(document).ready(function() {
	$('.slider-1').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:20, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		mouseDrag:false,
		touchDrag:true,
		navText: false,
		dots: true,
		autoplay:false, //Автозапуск слайдера
		smartSpeed:300, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsiveClass:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:2,
				slideBy:2
			},
			600:{
				items:2,
				slideBy:2
			},
			1000:{
				items:4,
				slideBy:4
			}
		},
		
	});
});
$(document).ready(function() {
	$('.slider-2').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:0, //Отступ от картино если выводите больше 1
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav:false, //Отключил навигацию
		mouseDrag:false,
		touchDrag:false,
		navText: false,
		dots: false,
		autoplay:true, //Автозапуск слайдера
		smartSpeed:1000, //Время движения слайда
		autoplayTimeout:4000, //Время смены слайда
		responsiveClass:true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1,
				slideBy:1
			},
			600:{
				items:1,
				slideBy:1
			},
			1000:{
				items:1,
				slideBy:1
			}
		},
		
	});
});
//фикс бага с position:fixed и модальными окнами bootstrap
// TODO: Add any custom classes with 'position: fixed' to the selector below
var fixedCls = '.navbar-fixed-top,.navbar-fixed-bottom, .fixed-top';
var oldSSB = $.fn.modal.Constructor.prototype.setScrollbar;
$.fn.modal.Constructor.prototype.setScrollbar = function () {
	oldSSB.apply(this);
	if (this.bodyIsOverflowing && this.scrollbarWidth)
		$(fixedCls).css('padding-right', this.scrollbarWidth);
}
var oldRSB = $.fn.modal.Constructor.prototype.resetScrollbar;
$.fn.modal.Constructor.prototype.resetScrollbar = function () {
	oldRSB.apply(this);
	$(fixedCls).css('padding-right', '');
}