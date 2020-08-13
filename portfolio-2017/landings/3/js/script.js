//плавный переход
$(function() {
       $('a.smooth, .navbar-nav a').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -0
      }, 1000);
    });
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
/*$(function() {
  $(window).scroll(function(){
    var distanceTop = $('#popup').offset().top - $(window).height();
    
    if  ($(window).scrollTop() > distanceTop)
      //$('#free').animate({'right':'25%'},300);
      $('#free').modal('show');
    else 
      //$('#free').stop(true).animate({'right':'-900px'},100);  
    $('#free').modal('hide');
  });
  $('#free .close').bind('click',function(){
    $(this).parent().remove();
  });
});*/
$(document).ready(function () {
  setTimeout(function() {
      $("#free").modal('show'); //показать модальное окно успешной отправки
    }, 15000);
});

