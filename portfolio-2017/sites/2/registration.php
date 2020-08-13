<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Регистрация</title>
</head>
<body>
<section id="header" class="index-header registration-page">
	<div class="container text-center">
		<div class="logo">
			<a href="./"><img src="img/logo.png" alt=""></a>
		</div>
		<a href="advertisers.php" class="link">Вы рекламодатель?</a>
		<div class="reg-form main">
			<h3>Регистрация партнера</h3>
			<form class="form-horizontal ajax-form" id="form-reg">
				<div class="form-group">
					<label class="field field_type1">
						<input type="email" class="form-control field__input" id="email" placeholder="Email" name="email" required="">
						<span class="field__label-wrap">
							<span class="field__label">Email</span>
						</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="text" class="form-control field__input" id="name" placeholder="Имя" name="name" required="">
						<span class="field__label-wrap">
							<span class="field__label">Имя</span>
						</span>
					</label>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="field field_type1">
								<input type="text" class="form-control field__input" id="skype" placeholder="Skype" name="skype">
								<span class="field__label-wrap">
									<span class="field__label">Skype</span>
								</span>
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="field field_type1">
								<input type="number" class="form-control field__input" id="icq" placeholder="ICQ" name="icq">
								<span class="field__label-wrap">
									<span class="field__label">ICQ</span>
								</span>
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="password" class="form-control field__input" id="password" placeholder="Пароль" name="password">
						<span class="field__label-wrap">
							<span class="field__label">Пароль</span>
						</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="password" class="form-control field__input" id="password2" placeholder="Повторите пароль" name="password2">
						<span class="field__label-wrap">
							<span class="field__label">Повторите пароль</span>
						</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="text" class="form-control field__input" id="wmr" placeholder="WMR кошелек" name="wmr">
						<span class="field__label-wrap">
							<span class="field__label">WMR кошелек</span>
						</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="text" class="form-control field__input" id="wmz" placeholder="WMZ кошелек" name="wmz">
						<span class="field__label-wrap">
							<span class="field__label">WMZ кошелек</span>
						</span>
					</label>
				</div>
				<button type="submit" class="btn send mb-30 w-100" id="send" name="submit">Зарегистрироваться</button>
				<br>
				<a href="./" class="lost-password">Вернуться на главную</a>
			</form>
		</div>
	</div>
</section>
<?php include("blocks/index/footer.php");?>
<?php include("blocks/scripts.php");?>
</body>
</html>
 
 
 
 