<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Контакты</title>
</head>
<body>
<div class="nav-page"><? include("blocks/nav.php");?></div>
<? include("blocks/header-page.php");?>
<div class="container content">
	<div class="row">
		<div class="col-md-6">
			<div class="contacts-info">
				<h3>Контактная информация</h3>
				<div class="box">
					<div class="icon">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="text">+7 (910) 742-79-92</div>
				</div>
				<div class="box">
					<div class="icon">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="text">Город Липецк, Советская, 64 офис 610, 6 этаж</div>
				</div>
				<div class="box">
					<div class="icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="text"><a href="mailto:realty-lipetsk@mail.ru">realty-lipetsk@mail.ru</a></div>
				</div>
				<div class="box">
					<div class="icon">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
					</div>
					<div class="text">Ежедневно с 9.00-19.00</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h3>Задать вопрос</h3>
			<form class="form-horizontal ajax-form" id="form-contacts">
		        <input type="hidden" name="tid" value="Задать вопрос">
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
		        <div class="clear"></div>
		        <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
		        <div class="clear"></div>
		      </form>
		</div>
	</div>
	<div class="map">
		<iframe class="actAsDiv" width="100%" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;q=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D0%BA%D1%80%D0%B5%D0%BC%D0%BB%D1%8C&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
	</div>
</div>
<? include("blocks/footer.php");?>
<? include("blocks/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>