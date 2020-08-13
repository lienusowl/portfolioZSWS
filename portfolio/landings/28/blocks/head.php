<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" media="screen" type="text/css" title="Style" href="fancybox/jquery.fancybox.css">
<script src="fancybox/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("a.gallery, a.iframe").fancybox({"hideOnContentClick" :false,
			"frameWidth" : 235,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 208, // высота окна, px(355px - по умолчанию)
			"padding" : 0
			});
		
url = $("a.modalbox").attr('href').replace("for_spider","content2");
$("a.modalbox").attr("href", url);	
$("a.modalbox").fancybox(
{								  
			"frameWidth" : 235,	 
			"frameHeight" : 210 
								  
});

			$("a.gallery2").fancybox(
			{						
"padding" : 10, // отступ контента от краев окна
"imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
			"zoomOpacity" : false,	// изменение прозрачности контента во время анимации (по умолчанию false)
			"zoomSpeedIn" : 1000,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
			"zoomSpeedOut" : 1000,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
			"zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
			"frameWidth" : 235,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 208, // высота окна, px(355px - по умолчанию)
			"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
			"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
			"centerOnScroll" : false // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
				
			});
		
		$("#menu a, .anim").hover( function() {
      $(this).animate({"paddingLeft" : "10px"}, 300)},
	  function() {$(this).animate({"paddingLeft" : "0"}, 300);
});

$("a.iframe").fancybox(
{								  
			"frameWidth" : 235,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 208 // высота окна, px(355px - по умолчанию)
								  
});

		
		});
	</script>
