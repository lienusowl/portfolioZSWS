<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Ok - Book</title>
</head>
<body>
<div id="wrapper" class="page">
	<section id="header" class="header-book">
		<div class="">
			<div class="slide slide-4">
				<div class="for-nav-box bg-blue">
					<? include("blocks/for_template/nav.php");?>
				</div>
				<div class="container">
					<div class="inn">
						<div class="row2">
							<div class="col-md-6 col-sm-6 col-xs-12 left">
								<div class="cat-name-main bg-pink">Секреты успешных отношений</div>
								<h2 class="title">Мужчина & Женщина</h2>
								<div class="info">
									<p>В этой книге я делюсь полезными рекомендациями, фишками и примерами,<br>как построить гармоничные отношения и стать счастливой<br>и наполненной женщиной в повседневной жизни!</p>
								</div>
								<form class="form-horizontal ajax-form" id="form-slide-4">
							        <input type="hidden" name="tid" value="Получить книгу бесплатно Мужчина & Женщина">
							        <div class="form-group for-name">
							          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
							        </div>
							        <div class="form-group">
							          <input type="text" class="form-control text-center" id="email" placeholder="Введите ваш E-mail" name="email" required="">
							        </div>
							        <button type="submit" class="btn send blue border" id="send" name="submit">Получить книгу бесплатно</button>
							     </form>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 right">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</section>
	<!--контент-->
</div>
<? include("blocks/for_template/footer.php");?>
<? include("blocks/for_template/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>









