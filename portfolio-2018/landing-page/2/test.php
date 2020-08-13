<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<link href="assets/template/css/media-page.css" rel="stylesheet"/>
<title>Пройти тест</title>
</head>
<body>
<div class="wrapper test page">
<?php include("blocks/top-page.php");?>	
<div class="bg3">
	<form action="order.php" method="POST" id="form-main" onkeypress="if(event.keyCode == 13) return false;">
	<input type="hidden" name="tid" value="Результат теста">
	<div class="form-group for-name">
		<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
	</div>
	<section id="test">
		<div class="container">
			<div class="test-slider slider">
				<div class="item step-1" id="step-1">
					<?php include("blocks/test/step-1.php");?>
				</div>
				<div class="item step-2" id="step-2">
					<?php include("blocks/test/step-2.php");?>
				</div>
				<div class="item step-3" id="step-3">
					<?php include("blocks/test/step-3.php");?>
				</div>
				<div class="item step-4" id="step-4">
					<?php include("blocks/test/step-4.php");?>
				</div>
				<div class="item step-5" id="step-5">
					<?php include("blocks/test/step-5.php");?>
				</div>
				<div class="item step-6" id="step-6">
					<?php include("blocks/test/step-6.php");?>
				</div>
				<div class="item step-7" id="step-7">
					<?php include("blocks/test/step-7.php");?>
				</div>
				<div class="item step-8" id="step-8">
					<?php include("blocks/test/step-8.php");?>
				</div>
				<div class="item step-final" id="step-final">
					<?php include("blocks/test/final.php");?>
				</div>
			</div>
		</div>
	</section>
	</form>
</div>
<div class="footer-inv">
	<?php include("blocks/footer-page.php");?>
</div>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
</div>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3002/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>