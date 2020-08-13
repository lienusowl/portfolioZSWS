<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>LED</title>
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

	<script type="text/javascript" src="js/smoothscroll.js"></script>
	
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
	<script src="js/for_fancybox.js" type="text/javascript"></script>

</head>
<body>
<header>
	<?php include('blocks/nav.php');?>
<div id="center">	
	<div id="logo">
		<p>ledshopnn</p>
		<p class="intro">БЕГУЩИЕ СТРОКИ И LED ЭКРАНЫ В НИЖНЕМ НОВГОРОДЕ!</p>
	</div>
	<div id="header_line"></div>
	
	<div id="boxes">
		<div id="box">
			<img src="img/box/1.png" alt="">
			<p>Собственное<br>производство</p>
		</div>
		<div id="box">
			<img src="img/box/2.png" alt="">
			<p class="small_text">Продажа</p>
		</div>
		<div id="box">
			<img src="img/box/3.png" alt="">
			<p class="small_text">Доставка</p>
		</div>
		<div id="box">
			<img src="img/box/4.png" alt="">
			<p>Монтаж и<br>настройка</p>
		</div>
	</div>
	
</div>
</header>

<div id="info">
	<div id="center">
		<img src="img/info.png" alt="">
		<p>САМЫЕ НИЗКИЕ ЦЕНЫ В ГОРОДЕ!</p>
	</div>
</div>

<?php include('blocks/client.php');?>
<div id="clear"></div>
<?php include('blocks/slider.php');?>

<div id="clear"></div>
<?php include('blocks/otz.php');?>

<div id="clear"></div>
<?php include('blocks/partner.php');?>


<div id="clear"></div>
<?php include('blocks/footer.php');?>

</body>
</html>