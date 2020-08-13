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
				<img src="img/t5.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Рыбное ассорти</h4>
				</div>
				<div class="info">
					<p>
						Нежная форель<br />
						Судак<br />
						Стейк из семги<br />
						Тигровые креветки
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					1000 г
				</span>
				<span class="price">
					1500&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t5.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Для любителей вкусного и изысканного. Ассорти состоит из форели рна огоньке, судака, стейка из семги, и тигровых креветок. Дополнится это блюдо лимончиком, маринованным огурчиком, маринованным лучком, фирменным соусовм "Икорный", лавашом.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/t3.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Куриное лакомство</h4><span class="new">new</span>
				</div>
				<div class="info">
					<p>
						Нежный куриный шашлык
					</p>
					<p>
						Куриные крылышки и бедрышки
					</p>
					<p>
						Цыпленок табака
					</p>
					<p>
						Фирменный рулет от шеф повара, фаршированый беконом и сыром
					</p>
					<p>
						5 соусов на выбор
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					2000 г
				</span>
				<span class="price">
					2000&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t3.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Основным составляющим мясом данного блюда является курица, нежный шашлык из куриного филе, куриные крылышки и бедрышки, цыпленок табака и в дополнение фирменный куриный рулет от шеф-повара, фаршированный беконом и сыром. Подается с 5 соусами на выбор
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/company/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Мясное ассорти</h4>
				</div>
				<div class="info">
					<p>
						чалагач, люля-кебаб<br />
						шашлык из свиной вырезки<br />
						куриные крылышки<br />
						куриный шашлык<br />
						лаваш<br />
						маринованный лучок<br />
						свежие огурец<br />
						помидор, соусы
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					1500 г
				</span>
				<span class="price">
					1450&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/company/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Мясное ассорти. Удивите своих гостей разнообразием! В мясное ассорти входит: чалагач, люля-кебаб, шашлык из свиной вырезки, куриные крылышки, куриный шашлык. Мясо приготовлено на мангале. Маринад выполнен по старинным рецептам от нашего шеф-повара. Подается лаваш, маринованный лучок, свежие овощи, соусом по Вашему выбору.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/company/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Рог изобилия</h4>
				</div>
				<div class="info">
					<p>
						Шашлык из свинины<br />
						свиные ребрышки, чалагач<br />
						люля-кебаб,рулька<br />
						куриные бедрышки<br />
						шашлык из курицы<br />
						куриный рулет, овощи гриль<br />
						картофель фри<br />
						соусы, лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					4000 г
				</span>
				<span class="price">
					3500&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/company/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						 Настоящее мясное изобилие, для любителей мяса и больших компаний, шашлык из свинины, свиные ребрышки, чалагач, люля-кебаб, очень вкусная рулька по фирменному рецепту, куриные бедрышки, шашлык из курицы, куриный рулет. Все эти блюда придутся по вкусу в любой компании. Подается с гарниром из овощей гриль, карт. долек и картофелем фри. 10 соусов на выбор.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/company/3.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Ассорти из колбасок</h4>
				</div>
				<div class="info">
					<p>
						Нюрбергеры "Гурман" красные<br />
						Кноби с сыром<br />
						Нюрбергеры белые<br />
						Нюрбергеры улитка<br />
						тушенная капуста, лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					600 г
				</span>
				<span class="price">
					800&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/company/3b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						4 вида аппетитных колбасок: Нюрбергеры "Гурман" красные, Кноби с сыром, Нюрбергеры белые, Нюрбергеры улитка. Подается с тушенной капустой и тремя вида соуса.
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