<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Каталог | Детский магазин "Сова"</title>
</head>
<body>
<div class="main">
	<? include("blocks/header.php");?>
	<div class="clear"></div>
	<? include("blocks/nav.php");?>
	<div class="container">
		<div class="breadcrumbs">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><a href="#">Каталог</a></li>
				<li>Все модели</li>
			</ul>
		</div>
		<div class="content">
			<h1 class="pagetitle">Все модели</h1>
			<div class="row">
				<? include("blocks/cat-filter.php");?>
				<div class="col-md-9 right-content">
					<? include("blocks/cat-box-catalog.php");?>
					<? include("blocks/cat-box-catalog.php");?>
				</div>
			</div>
		</div>
	</div>
	<? include("blocks/footer.php");?>
</div>
<? include("blocks/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>