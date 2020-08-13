//плавный переход
$(function() {
       $('a.smooth').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -32
      }, 1000);
    });
});
//кнопка вверх
$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
  var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
   else $(scrollDiv).fadeIn("slow")
  });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "slow")
  })
 }
});
 
$(function() {
 $("#Go_Top").scrollToTop();
});
$(".nav-tabs .item").click(function(e) {
  e.preventDefault();
  $(".nav-tabs .item").removeClass('active');
  $(this).addClass('active');
})
// TODO: Add any custom classes with 'position: fixed' to the selector below
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
jQuery(function($){
   $(".phone").mask("+7 (999) 999-99-99");
});
$('input').on('change', function () {if ($(this).val()!='') $(this).addClass('not-empty')
;});
//фиксированное меню при скролле
$(document).ready(function () {
  var aboveHeight = $('#top').outerHeight();
  $(window).scroll(function () {
    if ($(window).scrollTop() > aboveHeight) {
      $('.nav-box').addClass('fixed');
    } else {
      $('.nav-box').removeClass('fixed');
    }
  });
});
