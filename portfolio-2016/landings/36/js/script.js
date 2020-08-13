//для статей
$(function(){
    
    var current_index = null;    
    
   
    
        
    $('a.title1').click(function(){        
        
             
        
        if($(this).parent().next().attr('class') == 'collapse1'){
            
            if($(this).parent().next().is(":hidden")){
                $(this).addClass('selected');
            } else if($(this).parent().next().is(":visible")) {
                $(this).removeClass('selected');
            }
            $(this).parent().next().slideToggle(500);
        }
        
        current_index = $('a.title1').index(this);        
    });
});

//плавный переход меню
$(function() {
               $('ul.nav a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -50
            }, 1000);
            });
            });



//ассортимент
$(document).ready(function () {
    $('[shape=poly]').click(function () {   /*кликаем */
        $(".hidden").not($("#text-" + $(this).attr("id"))).hide(); // скрываем
		$("#text-" + $(this).attr("id")).toggle(); // показываем / скрываем
    });
});


$(function() {
$('.nav2 li a').click(function(e){
e.preventDefault();
$('.nav2 li a').removeClass('active');
$(this).addClass('active');
});
  });