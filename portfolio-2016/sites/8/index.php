<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
	<title>Internet</title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href="css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.ico">

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="//cdnjs.bootcss.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<!-- Плавный скрол контента -->
<script type="text/javascript" src="js/smoothscroll.js"></script>
	
<!-- Всплывающие окна -->	
<script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script src="js/for_fancybox.js" type="text/javascript"></script>


<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div id="center">
			
			<div id="logo">
				<p>profmen</p>
				<span>Лучший беспроводной интернет</span>
			</div>
			
			<nav>
				<ul>
					<li><a href="#">Главная</a></li>
					<li><a href="#">Вопросы и ответы</a></li>
					<li><a href="#">Тарифы и цены</a></li>
					<li><a href="#">Технология</a></li>
					<li><a href="#">Подключение</a></li>
					<li><a href="#">Оплата услуг</a></li>
					<li><a href="#">Зона покрытия</a></li>
					<li><a href="#">О компании</a></li>
				</ul>
			</nav>
			
			<div id="number">
			
				<p>+7 <span>(965)</span> 888 88 88</p>
				<p class="adr">ул. Улица, 109, оф. 23</p>
				<a href="#inline1" class="modalbox">Заказать звонок</a>
			</div>
		
		<div id="clear"></div>	
		
		<div id="usl">
			<div id="center">
				<div class="box" id="box1"><p>Легко подключиться</p></div>
				
				<div class="box" id="box2"><p>Вопрос ответ</p></div>
				
				<div class="box" id="box3"><p class="usl_text">Большой выбор тарифных планов</p></div>
				
			</div>
		</div>
		
		</div>

	</header>
	




<div id="clear"></div>
	
	<div id="content">
		<div id="center">
			<div id="left">
				<h3>Интернет в загородный дом</h3>
				<a href="#"><img src="img/left/1.jpg" alt="" class="big_b"></a>
				<h3>Интернет для всей семьи</h3>
				<a href="#"><img src="img/left/2.jpg" alt="" class="big_b"></a>
				<h3>Безлимитные тарифы</h3>
				<a href="#"><img src="img/left/3.jpg" alt="" class="big_b"></a>
			<div id="clear"></div>
			</div>
			<div id="main">
				<?php include('blocks/text.php');?>
				<div id="clear"></div>
			</div>
		</div>
		<div id="clear"></div>
	</div>
	
	<div id="clear"></div>
	
	
	
<footer>
	<div id="center">
	
		<form action="order.php" method="post">
			<p class="big">Онлайн заявка на подключение</p>
			<input type="hidden" name="tid">
			<input type="text" placeholder="Ваше имя" name="name">
			<input type="text" placeholder="Ваш телефон" name="number">
			<input type="submit" id="sub">
		</form>
		
		<nav>
			<ul>
				<li><a href="#">Главная</a></li>
				<li><a href="#">Вопросы и ответы</a></li>
				<li><a href="#">Тарифы и цены</a></li>
				<li><a href="#">Технология</a></li>
				<li><a href="#">Подключение</a></li>
				<li><a href="#">Оплата услуг</a></li>
				<li><a href="#">Зона покрытия</a></li>
				<li><a href="#">О компании</a></li>
			</ul>
		</nav>
		
		<div id="copy">
			<p>© "PROFMEN"<br><span>ЛУЧШИЙ БЕСПРОВОДНОЙ ИНТЕРНЕТ</span></p>
		</div>
	
	<img src="img/footer_img.png" alt="" class="footer">
	</div>
</footer>	
	
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
	
	
</body>
</html>