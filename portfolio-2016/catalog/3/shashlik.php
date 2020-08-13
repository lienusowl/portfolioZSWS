<?php
include "config/system.php";
?>

<!DOCTYPE html>
<html>
<?php include "config/header.php"; ?>
<body>
	<div class="bodyshadow hide"></div>
	
	<div class="panel">
		<a href="/">
			<img src="img/logo.png" alt="..." />
		</a>
		<a href="#" id="opencart">
			<span id="item-count">
				<?=$_SESSION['itemcount']?>
			</span>
		</a>
	</div>

<?php include "form.php"; ?>
<?php include "alterinfo.php"; ?>


<div class="header-two">
	<a href="index.php" class="logo">
		Доставка <span class="fire"><span><!--background-fire--></span>горячего</span> шашлыка, настоящих бургеров и сытной пиццы в Иркутске
	</a>
	<div class="right-content right">
		<a href="#" class="callme">Заказать звонок</a>
		<span class="tel">8 (3952) 99-77-88</span>
	</div>
</div>
<div class="b-main-content">

    <div class="side-bar-left">
       <div class="left-menu">
			<?php include "config/menu.php"; ?>
	   </div>
	   <div class="banners">
		<div class="banner">
			<a href="#">
				<img src="img/banners/1.jpg" alt="..." />
			</a>
		</div>
		<div class="banner">
			<a href="#">
				<img src="img/banners/2.jpg" alt="..." />
			</a>
		</div>
	   </div>
    </div>

    <div class="main-menu">

    <div class="items">
		
		<div class="block x2">
			<div class="img">
				<img src="img/t1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Шашлык из свинины</h4><span class="hit">хит</span>
				</div>
				<div class="info">
					<p>
						Мягкий и сочный шашлык
					</p>
					<p>
			 			Лаваш<br />
						Маринованный лучок<br />
						Свежие овощи
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					220 г
				</span>
				<span class="price">
					290&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t1.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Предлагаем Вам сочный шашлык из свинины от российских производителей.
					</p>
					<p>
						Мягкий и сочный шашлык удовлетворит вкус самого притязательного гурмана.<br />
					К шашлыку подается лаваш, маринованный лучок, свежие овощи.<br />
					Соус по Вашему выбору.
					</p>
					<p>
					Вам захочется добавки!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x3">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9392.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Шашлык куриный</h4>
				</div>
				<div class="info">
					<p>
						Курица<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					220 г
				</span>
				<span class="price">
					270&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9392.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Готовится из диетического белого куриного мяса отечественных производителей. Отличается сочностью и изысканным вкусом. Сервируется фирменным соусом на Ваш выбор, маринованным лучком, свежими овощами и лавашем.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9338.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Шашлык из баранины</h4>
				</div>
				<div class="info">
					<p>
						Баранина<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					200 г
				</span>
				<span class="price">
					400&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9338.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Это классика древних блюд Востока.<br />
						Мы знаем тонкости приготовления шашлыка из баранины и успешно их реализуем. Попробуйте – не останетесь равнодушными!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9348.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Люля-Кебаб</h4>
				</div>
				<div class="info">
					<p>
						Фарш из 2 видов мяса<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					220 г
				</span>
				<span class="price">
					250&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9348.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Наивысший пилотаж поварского искусства. Наш люля-кебаб приготовлен по секретному ассирийскому рецепту – приобщитесь к тайнам Востока! Люля-кебаб сервируется фирменным соусом на Ваш выбор, маринованным лучком, свежими овощами и лавашем.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9340.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Чалагач</h4>
				</div>
				<div class="info">
					<p>
						Свинина на косточке<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					250 г
				</span>
				<span class="price">
					300&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9340.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						К Вашему вниманию – чалагач – волшебное сочетание нежного вкуса и аромата пожаренного на мангале мяса на косточке с тонкой хрустящей корочкой. К шашлыку подается лаваш, маринованный лучок, свежие овощи, соус по Вашему выбору.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9401.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Крылышки куриные</h4>
				</div>
				<div class="info">
					<p>
						Крылышки куриные<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					<p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					300 г
				</span>
				<span class="price">
					280&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9401.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Хрустящие, горячие с золотистой корочкой куриные крылышки, маринованные секретным способом, будут для Вас приятным популярным блюдом на долгое время! Сервируется фирменным соусом на Ваш выбор, маринованным лучком, свежими овощами и лавашем.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9371.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Бедрышки куриные</h4>
				</div>
				<div class="info">
					<p>
						Бедрышки куриные<br />
						соус<br />
						маринованный лук<br />
						Свежие помидор и огурец<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					300 г
				</span>
				<span class="price">
					280&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9371.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Порадуют Вас нежным вкусом, сочностью и аппетитным ароматом дымка. Куриные бедрышки любят, как дети, так и взрослые. Сервируется фирменным соусом на Ваш выбор, маринованным лучком, свежими овощами и лавашем.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9385.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Ребрышки свиные</h4>
				</div>
				<div class="info">
					<p>
						Свинные ребра<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					400 г
				</span>
				<span class="price">
					350&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9385.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Отличная мясная закуска и украшение Вашего стола. Приготовленные на мангале свиные ребрышки отличаются нежной и тающей текстурой, сервируется фирменным соусом на Ваш выбор, маринованным лучком, свежими овощами и лавашем.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sh1/IMG_1774.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Цыпленок-Гриль</h4>
				</div>
				<div class="info">
					<p>
						Цыпленок гриль<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					500 г
				</span>
				<span class="price">
					450&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_1774.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Цыпленок, приготовленный на мангале, со свежими овощами, зеленым луком и тремя соусами на выбор + лаваш
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/rulka.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Рулька</h4>
				</div>
				<div class="info">
					<p>
						Рулька<br />
						маринованный лук<br />
						свежие помидор и огурец<br />
						соус<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					1000 г
				</span>
				<span class="price">
					900&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/rulka.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Свиная рулька, для ценителей мяса, секретный маринад, делает ее сочной и мягкой. Подается с 4 видами соуса и тушенной капустой.
					</p>
				</div>
			</div>
		</div>
		
    </div>


    </div>

    <?php include "config/rightbar.php"; ?>

</div>

<?php include "config/metrika.php"; ?></body>
</html>