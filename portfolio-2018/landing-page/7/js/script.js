//плавный переход
$(function() {
       $('a.smooth').click(function(event) {
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

jQuery(function($){
   $(".number").mask("+7 (999) 999-99-99");
});


$('.icon-menu').click(function(){
    $('body').toggleClass('overlay');
    $('.overalay_bg').toggle();
    $('.menu').removeClass('hide');
    $('.menu').toggleClass('show');
  });
$('.menu .icon-close').click(function(){
    $('body').removeClass('overlay');
    $('.overalay_bg').toggle();
    $('.menu').removeClass('show');
    $('.overalay_bg').toggleClass('nahui');
    $('.menu').animate({left: '-285px'}, 200);
  });
$('.overalay_bg').click(function(){
    $('body').removeClass('overlay');
    $('.overalay_bg').toggle();
    $('.menu').removeClass('show');

    $('.menu').animate({left: '-285px'}, 200);

  });


$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$(".nav-tabs .item").click(function(e) {
  e.preventDefault();
  $(".nav-tabs .item").removeClass('active');
  $(this).addClass('active');
})
$(function() {
    $("#etap .box1").click(function() {
        $("#etap .box1").removeClass("active");         
        $(this).toggleClass("active");
    })
});
