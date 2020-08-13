//плавный переход
$(function() {
       $('.navbar-nav a').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -0
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
//ïëàâíûé ïåðåõîä ìåíþ
/*$(function() {
   $('#h-menu a').click(function(event) {
	event.preventDefault();
	var href=$(this).attr('href');
	var target=$(href);
	var top=target.offset().top;
	$('html,body').animate({
	  scrollTop: top -50
	}, 1000);
});
});*/
