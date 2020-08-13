<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Ok - 404</title>
</head>
<body>
<div id="wrapper" class="page">
	<section id="header">
		<div class="vh-100" style="background-image: url(./assets/images/404/bg.jpg);">
			<div class="for-nav-box bg-blue">
				<? include("blocks/for_template/nav.php");?>
			</div>
			<div class="container content">
				<h1 class="title big">Страница<br>не найдена</h1>
				<div class="info">
					<p>К сожалению, неправильно набран адрес<br>или такой страницы на сайте больше не существует.</p>
					<a href="./" class="btn blue border">перейти на главную</a>
				</div>
			</div>
		</div>
	</section>
</div>
<? include("blocks/for_template/footer.php");?>
<? include("blocks/for_template/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>