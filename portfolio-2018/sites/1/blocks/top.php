<section id="top" class="desktop">
	<div class="container">
		<div class="top-nav">
			<div class="box">
				<div class="row">
					<div class="col-sm">
						<i class="fa fa-handshake-o" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#modal" onclick="document.getElementById('tid').value='Пригласить на тендер';document.getElementById('modal_title').innerHTML='Пригласить на тендер';">Пригласить на тендер</a>
					</div>
					<div class="col-sm">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#modal" onclick="document.getElementById('tid').value='Записаться на замер';document.getElementById('modal_title').innerHTML='Записаться на замер';">Записаться на замер</a>
					</div>
					<div class="col red">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#modal" onclick="document.getElementById('tid').value='Заказать звонок';document.getElementById('modal_title').innerHTML='Заказать звонок';">Заказать звонок</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="nav-box">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<a class="logo img-svg" href="#">
					<img src="assets/template/img/logo.svg" alt="">
				</a>
				<a class="logo img-svg logo-fixed" href="#">
					<img src="assets/template/img/logo_fant_color_scroll.svg" alt="">
				</a>
				<div class="city">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#city-modal">Волжск</a>
				</div>
				<div class="collapse navbar-collapse hidden-xs" id="nav-desktop">
					<?php include("blocks/nav.php");?>
				</div>
				<div class="nav-right">
					<div class="row">
						<div class="col-sm-5">
							<div class="nav-calc">
								<div class="img-svg">
									<img src="assets/template/img/icons/calculator.svg" alt="">
								</div>
								<div class="text">
									<a href="#">Калькулятор</a>
								</div>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="phone">
								<div class="img-svg">
									<img src="assets/template/img/icons/phone.svg" alt="">
								</div>
								<div class="text">
									<a href="tel:+78363161341">+7 (83631) 6-13-41</a>
									<p class="address">ул. Ленина, 49</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-desktop">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</nav>
		</div>
	</div>
</section>
<!--mobile top-->
<section id="top" class="mobile">
	<div class="container">
		<div class="top-nav">
			<div class="box">
				<div class="row">
					<div class="col">
						<a class="logo img-svg" href="#">
							<img src="assets/template/img/logo_fant_color_scroll.svg" alt="">
						</a>
					</div>
					<div class="col">
						<div class="nav-calc">
							<div class="img-svg">
								<a href="#"><img src="assets/template/img/icons/calculator.svg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="phone">
							<div class="img-svg">
								<a href="tel:+78363161341"><img src="assets/template/img/icons/phone.svg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-mobile">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				</div>
				<div class="city">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#city-modal">Волжск</a>
				</div>
				<div class="phone">
					<div class="text">
						<a href="tel:+78363161341">+7 (83631) 6-13-41</a>
						<p class="address">ул. Ленина, 49</p>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="nav-box">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="collapse navbar-collapse hidden-xs" id="nav-mobile">
					<?php include("blocks/nav.php");?>
				</div>
			</nav>
		</div>
	</div>
</section>