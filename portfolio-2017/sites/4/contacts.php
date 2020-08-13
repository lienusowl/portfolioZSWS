<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Ok - Contacts</title>
</head>
<body>
<div id="wrapper" class="page">
	<div class="for-nav-box bg-blue">
		<? include("blocks/for_template/nav.php");?>
	</div>
	<!--контент-->
	<div class="content">
		<div class="container">
			<div class="bg-light mt-60 mb-100 box-round contacts-box">
				<div class="p-45">
					<div class="row">
						<div class="col-md-8">
							<p class="phone"><i class="fa fa-phone"></i> +9 (999) 999 99 99</p>
							<p class="address"><i class="fa fa-map-pin"></i> Москва, Площадь Победы, дом 1, корпус Д</p>
							<div class="clear"></div>
							<p class="email"><i class="fa fa-envelope"></i> <a href="mailto:info@olesyakuklina.ru">info@olesyakuklina.ru</a></p>
						</div>
						<div class="col-md-4">
							<div class="soc">
								<a href="#"><i class="fa fa-vk"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-odnoklassniki"></i></a>
								<a href="#"><i class="fa fa-youtube-play""></i></a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="form-cont">
						<form class="form-horizontal ajax-form" id="form-contacts">
					        <input type="hidden" name="tid" value="Оставить заявку">
					        <div class="form-group for-name">
					          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					        </div>
					        <div class="row">
					        	<div class="col-md-6 col-sm-6 col-xs-12">
					        		<div class="form-group">
										<label>ваше имя</label>
							        	<input type="text" class="form-control" id="inpt1" placeholder="Имя" name="inpt1">
							        </div>
					        	</div>
					        	<div class="col-md-6 col-sm-6 col-xs-12">
					        		<div class="form-group">
										<label>ваш E-mail</label>
							        	<input type="text" class="form-control" id="email" placeholder="E-mail" name="email" required="">
							        </div>
					        	</div>
					        </div>
					        <div class="form-group">
					        	<label>напишите мне сообщение</label>
					        	<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Ваше сообщение"></textarea>
					        </div>
					        <center><button type="submit" class="btn blue" id="send" name="submit">Отправить</button></center>
					      </form>
					</div>
				</div>
				<div class="ya-map box-round">
					ya-map
				</div>
			</div>
		</div>
	</div>
</div>
<? include("blocks/for_template/footer.php");?>
<? include("blocks/for_template/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>