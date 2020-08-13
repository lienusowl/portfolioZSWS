//верхнее меню
jQuery(function(f){
    var element = f('.top-scroll');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 0 ? 'In': 'Out')](800);           
    });
}); 

//плавная навигация
$(function() {
               $('ul.menu a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -22
            }, 1500);
            });
 });

$(function() {
               $('.reasons a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -22
            }, 1500);
            });
 });


//активное меню

