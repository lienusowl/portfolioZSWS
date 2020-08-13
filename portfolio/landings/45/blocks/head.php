<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/style.css" />
<!--[if lt IE 7]>
    <link rel="stylesheet" media="screen" type="text/css" title="Style" href="css/ie7.css">
<![endif]-->
<!--[if lt IE 8]>
    <link rel="stylesheet" media="screen" type="text/css" title="Style" href="css/ie8.css">
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$("a.gallery, a.iframe").fancybox();
		


			$("a.gallery2").fancybox(
			{						
"padding" : 0, // отступ контента от краев окна
"imageScale" : true, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
			"zoomOpacity" : false,	// изменение прозрачности контента во время анимации (по умолчанию false)
			"zoomSpeedIn" : 1000,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
			"zoomSpeedOut" : 1000,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
			"zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
			"frameWidth" : 670,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 400, // высота окна, px(355px - по умолчанию)
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
			"frameWidth" : 800,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 600 // высота окна, px(355px - по умолчанию)
								  
});

		
		});
	</script>
	<!--слайдшоу-->
<script type="text/javascript" src="js/cycle.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
	<!--плавная навигация-->
<script src="js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/navbar2.js" type="text/javascript"></script>



  


<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>

<script>
jQuery(function($){
   $("#phone").mask("+7(999) 999-9999");
   
});
</script>