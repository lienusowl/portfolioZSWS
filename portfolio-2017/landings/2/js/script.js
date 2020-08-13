//плавный переход
$(function() {
     $('a.smooth, .navbar-nav a').click(function(event) {
    event.preventDefault();
    var href=$(this).attr('href');
    var target=$(href);
    var top=target.offset().top;
    $('html,body').animate({
      scrollTop: top -114
    }, 1000);
  });
});
$(document).ready(function () {
  var aboveHeight = 770;
  $(window).scroll(function () {
    if ($(window).scrollTop() > aboveHeight) {
      $('#top').addClass('fixed');
    } else {
      $('#top').removeClass('fixed');
    }
  });
});
$('.navbar-nav a').on('click', function () {
   $('.navbar-collapse').removeClass('in');
 return false;
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

$(function() {
    $('#tooltip-icon1').click(function(event) {
        $('.tooltip1').toggle();
    });
    $(document).click(function (event) {
        if ($(event.target).closest('.tooltip1').length == 0 && $(event.target).attr('id') != 'tooltip-icon1') {
            $('.tooltip1').hide();
        }
    });
});
$(function() {
    $('#tooltip-icon2').click(function(event) {
        $('.tooltip2').toggle();
    });
    $(document).click(function (event) {
        if ($(event.target).closest('.tooltip2').length == 0 && $(event.target).attr('id') != 'tooltip-icon2') {
            $('.tooltip2').hide();
        }
    });
});
$(function() {
    $('#tooltip-icon3').click(function(event) {
        $('.tooltip3').toggle();
    });
    $(document).click(function (event) {
        if ($(event.target).closest('.tooltip3').length == 0 && $(event.target).attr('id') != 'tooltip-icon3') {
            $('.tooltip3').hide();
        }
    });
});