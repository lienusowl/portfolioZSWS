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
 $('.mmenu').click(function(){
    $('body').toggleClass('overlay');
    $('.overalay_bg').toggle();
    $('#mmenu').removeClass('hide');
    $('#mmenu').toggleClass('show');
  });
$('#mmenu .close').click(function(){
    $('body').removeClass('overlay');
    $('.overalay_bg').toggle();
    $('#mmenu').removeClass('show');
  });
$('.overalay_bg').click(function(){
    $('body').removeClass('overlay');
    $('.overalay_bg').toggle();
    $('#mmenu').removeClass('show');
  });
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
