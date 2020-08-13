<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Опт43 - главная</title>
</head>
<body>
<?php include("blocks/header.php");?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-8 order-md-2">
			<div class="content">
				<div class="row">
					<?php include("blocks/cat-box.php");?>
					<?php include("blocks/cat-box.php");?>
					<?php include("blocks/cat-box.php");?>
					<?php include("blocks/cat-box.php");?>
				</div>
				<ul class="pageList">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 col-sm-4">
			<?php include("blocks/left-col.php");?>
		</div>
	</div>
</div>
<?php include("blocks/footer.php");?>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>