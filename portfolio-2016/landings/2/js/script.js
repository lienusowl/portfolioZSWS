//плавный переход меню
$(function() {
               $('ul.nav a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -90
            }, 1000);
            });
            });

			


		

