<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Главная | Детский магазин "Сова"</title>
</head>
<body>
<div class="main">
	<? include("blocks/header.php");?>
	<div class="clear"></div>
	<? include("blocks/nav.php");?>
	<? include("blocks/index-sale.php");?>
	<div class="content">
		<? include("blocks/index-cat.php");?>
		<? include("blocks/index-info.php");?>
		<? include("blocks/index-reviews.php");?>
	</div>
	<? include("blocks/footer.php");?>
</div>
<? include("blocks/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>