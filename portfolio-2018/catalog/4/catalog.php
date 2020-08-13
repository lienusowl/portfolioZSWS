<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Каталог</title>
</head>
<body>
<?php include("blocks/top.php");?>
<div class="container">
	<div class="breadcrumbs">
		<ul class="B_crumbBox">
			<li><a href="./">Главная</a></li>
			<span class="separator"><i class="icon-angle-right"></i></span>
			<li>Каталог яхт</li>
		</ul>
	</div>
	<h1 class="pagetitle">Продажа катеров и яхт с доставкой по всей россии</h1>
	<?php include("blocks/catalog-filter.php");?>
	<div class="row">
		<div class="col-md-9">
			<div class="content">
				<div class="row cat-row">
					<?php include("blocks/cat-box.php");?>
					<?php include("blocks/cat-box.php");?>
					<?php include("blocks/cat-box.php");?>
					<?php include("blocks/cat-box.php");?>
				</div>
				<ul class="pageList"> 
					<li class="control"><a href="#"><i class="icon-angle-double-left"></i></a></li>
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li class="control"><a href="#"><i class="icon-angle-double-right"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3">
			<?php include("blocks/right-col.php");?>
		</div>
	</div>
</div>
<?php include("blocks/sell-form.php");?>
<div class="content-bottom">
	<div class="container">
		<p>Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём.</p>
	</div>
</div>
<?php include("blocks/footer.php");?>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3004/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>