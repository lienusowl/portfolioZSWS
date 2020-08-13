<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
	<title>Карепрост</title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.ico">

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="//cdnjs.bootcss.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<!-- Плавный скрол контента -->
<script type="text/javascript" src="js/smoothscroll.js"></script>
	
<!-- Всплывающие окна 	
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script src="js/for_fancybox.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>-->
<?php include('blocks/fancy.php');?>
</head>
<body>

<header>
	<div id="center">
		<img src="img/logo.png" alt="">
		<div id="box">
			<p><b>Десятки тысяч клиентов</b><br>
			по всей России<br>
			выбрали нас</p>
		</div>
		<div id="box">
			<p>Сотрудничаем напрямую<br>
			с производителем,<br>
			<b>без посредников</b></p>
		</div>
		<div id="box">
			<p><b>Низкая цена</b>, скидки,<br>
			<span>доставка по всей России</span><br>
			всего за 200 руб.</p>
		</div>
	</div>
</header>

<div id="header">
	<div id="center">
		<a href="http://ok.ru/kareprostm" target="_blank"><img src="img/ok.png" class="ok"></a>
		<p class="h1">По-настоящему</p>
		<p class="h2">густые и длинные<br>ресницы</p>
		<p class="h3">Доказано</p>
		<p class="h4">Ошеломляющий<br>результат<br>всего через<br><span>4 недели!</span></p>
		<img src="img/bottle.png" class="bottle">
		<p class="h5">700 р.</p>
		<a class="modalbox" id="ord" href="#inline1"><img src="img/order.png" alt=""></a>
		<p class="h6">8-929-977-26-04</p>
	</div>
</div>
<div id="clear"></div>
<div id="content">
	<div id="center">
		<img src="img/raznica.jpg" alt="">
		
		<div id="right_block">
			<h2>Естественное наращивание ресниц с Карепростом</h2>
			<p>Мы предлагаем безопасную методику удлинения ваших ресниц с помощью Карепроста. Вытяжка из морских кораллов, полученная путем научных разработок усиленно питает волосяные луковички.</p>
			
			<p>Короткие и слабые реснички обретают заветный объем, достигая максимальной длины всего через месяц использования.</p>
			
			<p>Вам выпал уникальный шанс оценить труд индийских фармакологов, создавших аналог знаменитого американского средства для роста ресниц Latisse. Разница в применении обоих препаратов заметна лишь в цене – Careprost в разы дешевле.</p>
		</div>
		
		<div id="right_red">
			<img src="img/red.jpg" class="img_red">
			<p><b>Безопасная альтернатива</b><br>
			Карепрост безопасен и безотказно работает на красоту ваших глаз. Капли средства, наносимой каждый вечер на ресничный край верхнего века, хватит для того, чтобы ваши ресницы стали пушистыми.<br>
			<b>1 флакона Карепроста хватает на 8-12 недель.</b></p>
		</div>
	</div>
</div>
<div id="clear"></div>

<div id="center">
	<img src="img/kak.jpg" alt="">
	
	<table class="hovered">
		<tr>
			<td><img src="img/tovar.png" alt=""></td>
			<td class="big">1шт. 700 р.</td>
			<td><a class="modalbox" href="#t1">Заказать</a></td>
		</tr>
		<tr>
			<td><img src="img/tovar.png" alt=""></td>
			<td class="big">2шт. 1400 р.</td>
			<td><a class="modalbox" href="#t2">Заказать</a></td>
		</tr>
		<tr>
			<td><img src="img/tovar.png" alt=""></td>
			<td class="big">3шт. 1950 р.(по 650 р.\шт.)</td>
			<td><a class="modalbox" href="#t3">Заказать</a></td>
		</tr>
		<tr>
			<td><img src="img/tovar.png" alt=""></td>
			<td class="big">10-20шт. по 600 р.</td>
			<td><a class="modalbox" href="#t4">Заказать</a></td>
		</tr>
		<tr>
			<td><img src="img/tovar.png" alt=""></td>
			<td class="big">более 30шт. по 500 р!!!</td>
			<td><a class="modalbox" href="#t5">Заказать</a></td>
		</tr>
		
	</table>
	
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<div id="inline1" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<h2>Оставить заявку</h2>
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заявка c шапки сайта">
		<input name="name" type="text" tabindex="1" placeholder="Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>




<div id="t1" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<h2>Оставить заявку</h2>
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ 1шт">
		<input name="name" type="text" tabindex="1" placeholder="Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>

<div id="t2" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<h2>Оставить заявку</h2>
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ 2шт">
		<input name="name" type="text" tabindex="1" placeholder="Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>

<div id="t3" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<h2>Оставить заявку</h2>
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ 3шт">
		<input name="name" type="text" tabindex="1" placeholder="Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>

<div id="t4" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<h2>Оставить заявку</h2>
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ 10-20шт">
		<input name="name" type="text" tabindex="1" placeholder="Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>

<div id="t5" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<h2>Оставить заявку</h2>
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ более 30шт">
		<input name="name" type="text" tabindex="1" placeholder="Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>




	
	
	
	
	
	
	
	
</body>
</html>