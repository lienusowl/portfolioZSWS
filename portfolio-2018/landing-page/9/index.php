<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Renovation Atelier</title>
</head>
<body>
<?php include("blocks/top.php");?>
<form action="order-test.php" method="POST" id="form-main" onkeypress="if(event.keyCode == 13) return false;">
	<input type="hidden" name="tid" value="Результат теста">
	<div class="form-group for-name">
		<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
	</div>
	<div class="main-slider slider">
		<?php include("blocks/slide-1.php");?>
		<?php include("blocks/slide-2.php");?>
		<?php include("blocks/slide-3.php");?>
		<?php include("blocks/slide-4.php");?>
		<?php include("blocks/slide-5.php");?>
		<?php include("blocks/slide-6.php");?>
		<?php include("blocks/slide-7.php");?>
	</div>
</form>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3002/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>