//плавный переход меню
$(function() {
               $('ul.navbar-nav a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -80
            }, 1000);
            });
            });
			
$(function() {
               $('a.all-proj-header, a.logo').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -80
            }, 1000);
            });
            });
