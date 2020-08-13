<section id="header" class="index-header">
	<div class="container-fluid">
		<div class="top">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="logo index-logo">
						<a href="./"><img src="img/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-7 col-sm-5">
					<?php include("blocks/index/nav.php");?>
				</div>
				<div class="col-md-2 col-sm-3 text-right">
					<a href="registration.php" class="btn">Регистрация</a>
					<a href="#" class="btn transparent visible-xs">Вход</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="inn">
				<div class="row">
					<div class="col-md-8 col-sm-7">
						<h1 class="header-title text-left">Эффективно<br>монетизируем трафик</h1>
						<div class="box">
							<div class="icon"><img src="img/index/header-img.png" alt=""></div>
							<div class="text">
								<p class="mb-30">Привет! Если ты работаешь с любым видом <br>трафика — тебе будет это интересно.</p>
								<a href="#" class="link">Вы рекламодатель?</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-5 hidden-xs">
						<div class="reg-form">
							<p class="pull-left"><b>Авторизация</b></p>
							<p class="pull-right reg-a">
								<i class="fa fa-plus"></i>
								<a href="registration.php">Регистрация</a>
							</p>
							<div class="clear mb-30"></div>
							<form class="form-horizontal ajax-form" id="form-auth">
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
										<input type="password" class="form-control field__input" id="password" placeholder="Пароль" name="password">
										<span class="field__label-wrap">
											<span class="field__label">Пароль</span>
										</span>
									</label>
								</div>
								<a href="#" class="lost-password mb-30">Забыли пароль?</a>
								<br>
								<button type="submit" class="btn send" id="send" name="submit">Войти</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>