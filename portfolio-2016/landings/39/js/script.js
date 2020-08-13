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
var delay_popup = 5000;
	setTimeout("document.getElementById('parent_popup').style.display='block'", delay_popup);
	