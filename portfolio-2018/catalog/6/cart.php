<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Опт43 - карточка товара</title>
</head>
<body>
<?php include("blocks/header.php");?>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-8 order-md-2">
			<div class="content">
				<div class="breadcrumbs">
					<ul class="B_crumbBox">
						<li><a href="#">Каталог продукции </a></li>
						<span class="separator">/</span>
						<li><a href="#">Детская одежда</a></li>
						<span class="separator">/</span>
						<li><a href="#">Носки</a></li>
						<span class="separator">/</span>
						<li>Носки детские "Jujube" №Y017-1 (7/411) </li>
					</ul>
				</div>
				<div class="cart">
					<h1 class="cart-title">Носки детские "Jujube" №Y017-1 (7/411) </h1>
					<div class="row cart-row">
						<div class="col-md-6">
							<div class="cart-img">
								<a href="assets/images/cart/main.jpg" data-lightbox="img1"><img src="assets/images/cart/main.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="cart-desc">
								<p><b>Артикул:</b> Носки детские "Jujube" №Y017-1 (7/411)</p>
								<p><b>Состав:</b> 85% бамбук, 12,5% полиамид, 2,5% эластан.</p>
								<p><b>Размер:</b> 16-18, 18-20 (указан размер обуви).</p>
								<p><b>Цена указана за 1 пару.</b></p>
								<p><b>В упаковке 12 пар (разные цвета).</b></p>
							</div>
							<div class="price">
								10.4 руб.
							</div>
							<a href="#" data-toggle="modal" data-target="#cart-buy" class="btn">Купить</a>
						</div>
					</div>
				</div>
			</div>
			<div id="recommend">
				<div class="title-line text-center">
					<h2>Посмотреть другие товары</h2>
				</div>
				<div class="row">
					<div class="col-md-3">
						<?php include("blocks/recommend-box.php");?>
					</div>
					<div class="col-md-3">
						<?php include("blocks/recommend-box.php");?>
					</div>
					<div class="col-md-3">
						<?php include("blocks/recommend-box.php");?>
					</div>
					<div class="col-md-3">
						<?php include("blocks/recommend-box.php");?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-4">
			<?php include("blocks/left-col.php");?>
		</div>
	</div>
</div>
<?php include("blocks/footer.php");?>
<div class="modal fade modal-feedback" id="cart-buy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставить заявку</h3>
			<p>[[*pagetitle]]</p>
			<form class="form-horizontal ajax-form" id="form-cart-buy">
				<input type="hidden" name="tid" value="Купить: [[*pagetitle]]">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
				<div class="conf">
					<label class="checkbox-btn text-center">
						<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
						<p class="politics">Согласен с политикой конфиденциальности</p>
					</label>
				</div>		
			</form>
		</div>
	</div>
</div>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>