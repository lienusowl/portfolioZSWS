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
				<img src="img/catalog/desert/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Чизкейк «Ванильный»</h4>
				</div>
				<div class="info">
					<p>
						Классический чизкейк с приятным ванильным вкусом
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					100 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/desert/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Классический чизкейк с приятным ванильным вкусом
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/desert/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Чизкейк «Клубничный»</h4>
				</div>
				<div class="info">
					<p>
						Классический чизкейк с приятным клубничным вкусом
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					100 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/desert/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Классический чизкейк с приятным клубничным вкусом
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/t12.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Блинчики</h4><span class="hit">хит</span>
				</div>
				<div class="info">
					<p>
						Повара. Блины подаются с клубничным или шоколадным топпингом или сосгущенкой по выбору.
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					90&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/desert/3b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Блины, приготовленные по фирменому рецепту от нашего Шеф- Повара. Блины подаются с клубничным или шоколадным топпингом или сосгущенкой по выбору. (3 шт на порцию)
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