//плавный переход меню
$(function() {
               $('a.slow-menu').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -0
            }, 1000);
            });
            });
	
	
	