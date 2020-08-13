//плавный переход меню
$(function() {
               $('ul.nav a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -40
            }, 1000);
            });
            });
	$(document).ready(function () {
	    var aboveHeight = $('section').outerHeight();
	    $(window).scroll(function () {
	        if ($(window).scrollTop() > aboveHeight) {
	            $('.nav-fix').addClass('fixed container');
	        } else {
	            $('.nav-fix').removeClass('fixed container');
	        }
	    });
	});
	
	