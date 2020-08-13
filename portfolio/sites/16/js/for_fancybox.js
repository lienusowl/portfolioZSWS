$(document).ready(function() {
		
		

			$("a.modalbox").fancybox(
			{						
"padding" : 0, // отступ контента от краев окна
"imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
			"zoomOpacity" : true,	// изменение прозрачности контента во время анимации (по умолчанию false)
			"zoomSpeedIn" : 0,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
			"zoomSpeedOut" : 0,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
			"zoomSpeedChange" : 0, // скорость анимации в мс при смене фото (по умолчанию 0)
			
			"frameWidth":1000,
			"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.9,	 // Прозрачность затенения 	(0.3 по умолчанию)
			"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
			"centerOnScroll" :false // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
				
			});
			
			
		
		$("#menu a, .anim").hover( function() {
      $(this).animate({"paddingLeft" : "10px"}, 300)},
	  function() {$(this).animate({"paddingLeft" : "0"}, 300);
});

		
		});