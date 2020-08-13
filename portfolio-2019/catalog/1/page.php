<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Новое решение< - страница</title>
</head>
<body class="body-page">
<?php include("blocks/header.php");?>
<div class="container">
	<div class="wrapper">
		<div class="row cart-row align-center">
			<div class="col-md-6">
				<div class="img-main">
					<img src="assets/images/cart/1.jpg" alt="" class="w-100">
				</div>
			</div>
			<div class="col-md-6">
				<div class="introtext">
					<p><b>Качественные пеноблоки, предлагаемые компанией «Новое решение»</b> – это современный, эффективный, экологически чистый и экономичный при строительстве и эксплуатации материал. Их популярность в последнее время обусловлена рядом преимуществ перед другими материалами. Обладая плотностью древесины, они абсолютно не горючи, химически нейтральны. По сравнению с традиционными строительными материалами (камень, кирпич, бетон) пеноблоки превышают их по тепло- и звукоизоляционным характеристикам. Имея большие размеры, они позволяют значительно уменьшить время и трудозатраты на возведение наружных стен и внутренних перегородок.</p>
				</div>
				<!--<a href="#content" class="readmore smooth">Читать подробнее</a><br>-->
				<a href="#" data-toggle="modal" data-target="#buy" class="btn big">Заказать</a>
			</div>
		</div>
		<div id="content">
			<p><b>Пеноблоки легкие и более крупные по сравнению с кирпичом.</b> Это упрощает процесс погрузки, транспортировки и выгрузки. Такой вес материала позволяет сделать менее массивный фундамент и значительно сократить время на кладку стен. Это уже большая экономия средств на транспортировке, фундаменте и оплате труда каменщиков.</p>

			<p>Легкая обработка пеноблоков предоставляет неограниченные возможности для дизайна при проектировании и упрощает внутренние работы, такие как установка сантехники, проведение электропроводки и т.д.</p>

			<p>Пенобетонные блоки огнеупорные и морозоустойчивые, не подвержены гниению и за счет созревания материала с годами становятся прочнее. Пенобетонные блоки не выделяют в окружающую среду вредных химических соединений.</p>

			<p>За счет пористой структуры пенобетона в домах, построенных из пеноблоков, устанавливается такой же микроклимат, как в деревянном доме. Благодаря низкому коэффициенту теплопроводности, который имеют пенобетонные блоки, в таком доме зимой будет тепло, а летом прохладно. Дополнительный комфорт создается за счет хорошей звукоизоляции.</p>
			<img src="assets/images/cart/2.jpg" alt="" class="img-center">
			<p class="text-center"><b>Компания «Новое решение» предлагает пенобетонные блоки (блоки из пенобетона) в г. Кирове. <br>Размер 500х300х200 марка Д600. Идеальная геометрия, высокое качество. При заказе более 20 м3, скидка.</b></p>
			<p class="big text-center mt-30">Для получения технического описания продукции, скидках и способах доставки пеноблоков <br>свяжитесь с нашими специалистами по телефону  8-922-995-99-66</p>
		</div>
	</div>
</div>
<?php include("blocks/contacts-index.php");?>
<?php include("blocks/footer.php");?>
<!--заказать-->
<div class="modal fade modal-feedback" id="buy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Заказать</h3>
			<p>[[*pagetitle]]</p>
			<form class="form-horizontal ajax-form" id="form-buy">
				<input type="hidden" name="tid" value="Заказать: [[*pagetitle]]">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="volume" name="volume" placeholder="Объём, куб.м">
				</div>
				<div class="row align-center">
					<div class="col-md-auto">
						<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
					</div>
					<div class="col-md">
						<div class="conf">
							<label class="checkbox-btn text-center">
								<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
								<p class="politics">Согласен с <a href="[[~1]]">политикой конфиденциальности</a></p>
							</label>
						</div>
					</div>
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