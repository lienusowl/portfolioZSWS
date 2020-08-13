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
	<div class="clear"></div>
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
				<img src="img/t2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Чизбургер</h4><span class="hit">хит</span>
				</div>
				<div class="info">
					<p>
			 			Классическая булка<br />
			 			Котлета<br />
			 			Лист салата<br />
			 			Помидор<br />
			 			Сыр<br />
			 			и два секретных соуса<br />
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					<!--netto быть всегда, даже если пустой-->
				</span>
				<span class="price">
					270&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						По Вашим многочисленным заявкам, наш шеф-повар разработал фирменный рецепт знаменитого «Чизбургера». Классическая булка, котлета из настоящего мяса, лук красный, лист салата, помидор, сыр, два секретных вида соуса – попробуйте, оцените.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			
			<div class="img">
				<img src="img/catalog/burgers/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Фирменный бургер + Cola</h4>
				</div>
				<div class="info">
					<p>
						котлета<br />
						булка<br />
						бекон<br />
						лист салата<br />
						сыр<br />
						помидор<br />
						красный лук<br />
						соус 1000 островов
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					<!--netto быть всегда, даже если пустой-->
				</span>
				<span class="price">
					330&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/burgers/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Фирменный бургер с сочной котлетой и беконом! Подается с соусом Барбекю, картофелем фри и бутылочкой колы!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			
			<div class="img">
				<img src="img/catalog/burgers/3.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Чикен-Бургер</h4>
				</div>
				<div class="info">
					<p>
						булка<br />
						салат<br />
						филе куриное<br />
						сыр<br />
						маринованный огурец<br />
						красный лук<br />
						соус, кетчуп
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					<!--netto быть всегда, даже если пустой-->
				</span>
				<span class="price">
					290&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/burgers/3b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Чикен-Бургер с котлетой из куриного филе! Подается с соусом Барбекю и картофелем фри.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			
			<div class="img">
				<img src="img/catalog/burgers/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Биг-Бургер</h4>
				</div>
				<div class="info">
					<p>
						булка<br />
						лист салата<br />
						2 котлеты<br />
						красный лук<br />
						2 сыра<br />
						помидор<br />
						соус 1000 островов<br />
						кетчуп
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					<!--netto быть всегда, даже если пустой-->
				</span>
				<span class="price">
					350&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/burgers/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Биг-Бургер! Большой бургер с двумя сочными мясными котлетами! Подается с картофелем фри и соусом Барбекю!
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