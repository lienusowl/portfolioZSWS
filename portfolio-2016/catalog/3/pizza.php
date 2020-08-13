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
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Мясная</h4><span class="hit">хит</span>
				</div>
				<div class="info">
					<p>
						фарш из трех видов мяса<br />
						бекон<br />
						томатный соус<br />
						свежие помидоры<br />
						грибы<br />
						сыр «Моцарелла» и петрушка
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					790 г 30 см
				</span>
				<span class="price">
					400&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Аппетитная пицца с фаршем из трех видов мяса, беконом, фирменным томатным соусом, свежими помидорами, грибами, сыром «Моцарелла» и петрушкой.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Гурман</h4>
				</div>
				<div class="info">
					<p>
						филе свинины<br />
						бекон<br />
						свежие помидоры<br />
						маринованный огурчик<br />
						сыр «Моцарелла»<br />
						прованские травы<br />
						петрушка<br />
						соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					650 г 30 см
				</span>
				<span class="price">
					390&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Сытная пицца на классическом тесте с фирменным томатным соусом. В начинку входит: филе свинины, приготовленное на мангале, бекон, свежие помидоры, маринованный огурчик, сыр «Моцарелла», с добавлением прованских трав и петрушки.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/3.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Пепперони</h4>
				</div>
				<div class="info">
					<p>
						салями<br />
						сладкий перец<br />
						сыр «Моцарелла»<br />
						маринованный огурчик<br />
						петрушка
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					630 г 30 см
				</span>
				<span class="price">
					350&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/3b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Для любителей пикантной остроты. Главным ингредиентом этой пиццы является колбаска «Пепперони» – острая разновидность салями итало-американского происхождения, которая в сочетании с сочным сладким перцем, сыром «Моцарелла», маринованным огурчиком и петрушкой создает уникальный вкус пиццы «Пепперони», столь популярной во всем мире.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Дуэт</h4>
				</div>
				<div class="info">
					<p>
						бекон, ветчина<br />
						свежие помидоры<br />
						брокколи<br />
						опятами<br />
						сыр «Моцарелла»<br />
						томатный соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					680 г 30 см
				</span>
				<span class="price">
					390&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Прекрасное сочетание бекона и ветчины со свежими помидорами, брокколи, опятами, сыром «Моцарелла» и петрушкой на фирменном томатном соусе и классическом тесте
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/8.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Маргарита</h4>
				</div>
				<div class="info">
					<p>
						сыр «Моцарелла»<br />
						свежие помидоры<br />
						томатный соус<br />
						прованские травы
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					680 г 30 см
				</span>
				<span class="price">
					280&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/8b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Идеальное сочетание расплавленного сыра «Моцарелла», свежих помидоров и фирменного томатного соуса с добавлением прованских трав – все, что нужно для наслаждения чистым вкусом этой классической пиццы.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/9.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Нептун</h4>
				</div>
				<div class="info">
					<p>
						филе семги<br />
						морской коктейль<br />
						сыр «Моцарелла»<br />
						маслины<br />
						петрушка<br />
						соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					640 г 30 см
				</span>
				<span class="price">
					450&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/9b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Пицца для настоящих любителей морепродуктов. В начинке: нежные кусочки филе семги, морской коктейль, сыр «Моцарелла», маслины, петрушка, а также соус «1000 островов».
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/10.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Куриная</h4>
				</div>
				<div class="info">
					<p>
						куриное филе<br />
						жаренные грибы<br />
						сыр «Моцарелла»<br />
						маслины<br />
						петрушка<br />
						соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					700 г 30 см
				</span>
				<span class="price">
					360&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/10b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Ароматная пицца с кусочками куриного филе, приготовленного на мангале, жаренными грибами, сыром «Моцарелла», маслинами, петрушкой и соусом «1000 островов»
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/pizza/14.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Сырные палочки</h4>
				</div>
				<div class="info">
					<p>
						чесночное масло<br />
						сыр «Моцарелла»<br />
						сыр «Эдам» <br />
						сыр «Пармезан»<br />
						соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					580 г 30 см
				</span>
				<span class="price">
					270&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/pizza/14b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Интересная закуска в виде палочек из классического теста, смазанного чесночным маслом, с тремя видами сыра: «Моцарелла», «Эдам» и «Пармезан» и соусом «1000 островов».
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