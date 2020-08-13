
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$("a.gallery, a.iframe").fancybox({"padding" : 0});
		

			$("a.modalbox").fancybox(
			{						
"padding" : 0, // отступ контента от краев окна
"imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
			"zoomOpacity" : true,	// изменение прозрачности контента во время анимации (по умолчанию false)
			"zoomSpeedIn" : 500,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
			"zoomSpeedOut" : 500,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
			"zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
			"frameHeight":300,
			"frameWidth":320,
			"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
			"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
			"centerOnScroll" : false // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
				
			});
			
		
		$("#menu a, .anim").hover( function() {
      $(this).animate({"paddingLeft" : "10px"}, 300)},
	  function() {$(this).animate({"paddingLeft" : "0"}, 300);
});

		
		});
	</script>