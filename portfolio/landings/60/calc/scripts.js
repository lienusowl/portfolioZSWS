// JavaScript Document
$(document).ready(function() {
	//Немного оформления в стиле зебры
	$("#calculate").find("tr:odd").css({"background":"#fbdd59", "opacity":"0.8"});
	
	//Калькулятор
	$("#tableSelect").change(function() {
		var totalSum = 0;
		
		$("input[id^='pos'], select[id^='pos']").each(function() {
			var idElement = "#"+$(this).attr("id"), //Получаем id элемента
				priceField = parseInt($(idElement+"_price").text()), //Стоимость позиции
				countField = parseInt($(this).val()); //значение элемента
			
			$(idElement+"_count").text(priceField * countField); //Выводим сумму по позиции
			totalSum += priceField * countField;
		});
		$("#count_price span").text(totalSum);
	});
});