﻿$(document).ready(function() {
		
		

			$("a.modalbox").fancybox(
			{						
"padding" : 20, // отступ контента от краев окна
"imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
			"zoomOpacity" : true,	// изменение прозрачности контента во время анимации (по умолчанию false)
			"zoomSpeedIn" : 500,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
			"zoomSpeedOut" : 500,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
			"zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
			"frameHeight":360,
			"frameWidth":540,
			"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
			"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
			"centerOnScroll" :true // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
				
			});
			$("a.modalbox1").fancybox(
			{						
"padding" : 10, // отступ контента от краев окна
"imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
			"zoomOpacity" : true,	// изменение прозрачности контента во время анимации (по умолчанию false)
			"zoomSpeedIn" : 500,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
			"zoomSpeedOut" : 500,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
			"zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
			"frameHeight":640,
			"frameWidth":760,
			"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
			"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
			"centerOnScroll" :true // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
				
			});
			
		
		$("#menu a, .anim").hover( function() {
      $(this).animate({"paddingLeft" : "10px"}, 300)},
	  function() {$(this).animate({"paddingLeft" : "0"}, 300);
});

		
		});