$(document).ready(function() {
	$('.otz-slider').owlCarousel({
		loop:true, //Зацикливаем слайдер
		margin:20, //Отступ от картино если выводите больше 1
		nav:true, //Отключил навигацию
		mouseDrag:false,
		touchDrag:true,
		navText: false,
		dots: false,
		pagination:true,
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
var fixedCls = '.navbar-fixed-top,.navbar-fixed-bottom, .calc-fixed';
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
