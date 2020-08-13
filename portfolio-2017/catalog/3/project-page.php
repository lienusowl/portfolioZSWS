<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Проект #1</title>
</head>
<body>
<div class="nav-page"><? include("blocks/nav.php");?></div>
<? include("blocks/header-page.php");?>
<div class="container content">
	<div class="row">
		<div class="col-md-8">
			<div class="owl-carousel project-page-slider">
				<div class="item">
					<img src="assets/images/projects/1/1.jpg" alt="">
				</div>
				<div class="item">
					<img src="assets/images/projects/1/1.jpg" alt="">
				</div>
				<div class="item">
					<img src="assets/images/projects/1/1.jpg" alt="">
				</div>
				<div class="item">
					<img src="assets/images/projects/1/1.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="project-page-info">
				<p>Линейные размеры: <b>3х4 м</b></p>
				<p>Площадь застройки: <b>12.71 м.кв.</b></p>
				<p>Общая площадь: <b>9.51 м.кв.</b></p>
                <div class="widget-soc">
                	widget-soc
                </div>
                <a href="#" class="btn">Узнать цену</a>
			</div>
		</div>
	</div>
</div>
<? include("blocks/footer.php");?>
<? include("blocks/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>