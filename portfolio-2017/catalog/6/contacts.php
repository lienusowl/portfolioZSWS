<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Ключ оптсервис - Контакты</title>
</head>
<body>
<div class="wrapper">
<section id="header" class="header-page">
	<?php include("blocks/top.php");?>
	<div class="clear"></div>
	<div class="container">
		<div class="title">
			<h1>Контакты</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Главная</a></li>
					<span class="separator">/</span>
					<li>Контакты</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="contacts-info">
					info
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="contacts-map">
					map
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="contacts-form">
					<h3>Задать вопрос</h3>
					<form class="form-horizontal ajax-form" id="form-contacts">
				        <input type="hidden" name="tid" value="Оставить заявку">
				        <div class="form-group for-name">
				          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				        </div>
				        <div class="form-group">
				          <input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
				        </div>
				        <div class="form-group">
				          <input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
				        </div>
				        <div class="form-group">
				          <textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
				        </div>
				        <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
				      </form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include("blocks/footer.php");?>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
</div>
</body>
</html>