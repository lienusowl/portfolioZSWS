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
			

$(document).ready(function() { // Ждём загрузки страницы	   
	$("input[name=send]").click( function () { // Событие нажатия на кнопку "Расчёт"
		var action = $("select[name=action]").val(); // Получаем значение действия, которое нужно выполнить
		var first = $("input[name=first]").val() * 1; // Переменная первого числа
		var second = $("input[name=second]").val() * 1; // Переменная второго числа
		var result; // Переменная результата
		 // Если действие - сложение
			result = (first + second)*300; //  складываем
		
		
		$('.summa').html(result); // записываем результат
	});
});
$(function($){
   $("#time2").mask("99:99");
   $("#time3").mask("99:99");
});

