<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/head.php");?>
<title>Карточка товара | Детский магазин "Сова"</title>
</head>
<body>
<div class="main">
	<? include("blocks/header.php");?>
	<div class="clear"></div>
	<? include("blocks/nav.php");?>
	<div class="container">
		<div class="breadcrumbs">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><a href="#">Каталог</a></li>
				<li><a href="#">Кровати-машинки</a></li>
				<li>«Romack Kiddy»</li>
			</ul>
		</div>
		<div class="content">
			<h1 class="pagetitle">Кровать-машинка «Romack Kiddy»</h1>
			<div class="row">
			<? include("blocks/cat-filter.php");?>
			
				<div class="col-md-9 right-content">
					<div class="box">
						<div class="row">
							<div class="col-md-8 cart-gal">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="i_1"><a href="assets/images/catalog/1.jpg" data-lightbox="example-set"><img src="assets/images/catalog/1.jpg"></a></div>
									<div role="tabpanel" class="tab-pane" id="i_2"><a href="assets/images/catalog/2.jpg" data-lightbox="example-set"><img src="assets/images/catalog/2.jpg"></a></div>
									<div role="tabpanel" class="tab-pane" id="i_3"><a href="assets/images/catalog/1.jpg" data-lightbox="example-set"><img src="assets/images/catalog/1.jpg"></a></div>
									<div role="tabpanel" class="tab-pane" id="i_4"><a href="assets/images/catalog/2.jpg" data-lightbox="example-set"><img src="assets/images/catalog/2.jpg"></a></div>
									<div role="tabpanel" class="tab-pane" id="i_5"><a href="assets/images/catalog/1.jpg" data-lightbox="example-set"><img src="assets/images/catalog/1.jpg"></a></div>
									<div role="tabpanel" class="tab-pane" id="i_6"><a href="assets/images/catalog/2.jpg" data-lightbox="example-set"><img src="assets/images/catalog/2.jpg"></a></div>
								</div>
								<div class="clear"></div>
								<div class="carousel-pr">
									<div class="nav-tabs owl-carousel cart-slider" role="tablist">
										<div class="item active"><a href="#i_1" role="tab" data-toggle="tab"><img src="assets/images/catalog/1.jpg"></a></div>
										<div class="item"><a href="#i_2" role="tab" data-toggle="tab"><img src="assets/images/catalog/2.jpg"></a></div>
										<div class="item"><a href="#i_3" role="tab" data-toggle="tab"><img src="assets/images/catalog/1.jpg"></a></div>
										<div class="item"><a href="#i_4" role="tab" data-toggle="tab"><img src="assets/images/catalog/2.jpg"></a></div>
										<div class="item"><a href="#i_5" role="tab" data-toggle="tab"><img src="assets/images/catalog/1.jpg"></a></div>
										<div class="item"><a href="#i_6" role="tab" data-toggle="tab"><img src="assets/images/catalog/2.jpg"></a></div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="col-md-4 cart-info">
								<div class="row">
									<!--<div class="col-sm-12">
										<a href="#comments" class="smooth">Оставить отзыв</a>
									</div>-->
									<div class="col-sm-12">
										<div class="rating" style="text-align: left;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
								</div>
								<div class="clear"></div>
								<p><b>Краткое описание:</b></p>
								<p class="cart-introtext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
								<form class="ajax-form" id="cart-form">
									<label for="color">Выберите цвет:</label>
									<select class="form-control">
										<option>Синий</option>
										<option>Красный</option>
										<option>Зелёный</option>
										<option>Оранжевый</option>
									</select>
									
									<div class="price font-alt">10 500</div>
									<a href="#" data-toggle="modal" data-target="#buy" class="btn d-blue">Сделать заказ</a>
								</form>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				
					<h2 class="h1"><i class="fa fa-star-o"></i>Похожие товары:</h2>
					<? include("blocks/cat-box-catalog.php");?>
					<div class="clear"></div>
					<hr>
					<div class="row">
						<div class="col-md-7">
							<p style="font-size: 18px;"><b>Почему за 4 года мы стали так популярны?</b></p>
							<ul>
								<li>Уникальные детские кроватки</li>
								<li>Делаем по ГОСТу, поэтому качество на высоте</li>
								<li>Конструкция очень прочная и выдерживает 200 кг!</li>
								<li>Прямая фотопечать не требует ламинации, повредить не получится</li>
								<li>Доставляем до двери, оплата при получении</li>
								<li>Прямая фотопечать не требует ламинации, повредить не получится</li>
							</ul>
						</div>
						<div class="col-md-4"><img src="assets/images/index/info.png" alt="" class="w-100"></div>
					</div>
					<div class="clear"></div>
					<br>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>
	</div>
	<? include("blocks/footer.php");?>
</div>
<? include("blocks/popup.php");?>
<? include("blocks/scripts.php");?>
</body>
</html>