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
				<img src="img/catalog/sous/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Классический</h4>
				</div>
				<div class="info">
					<p>
						Соус 
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус Классический
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>По-татарски</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "По-татарски".
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Барбекю</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "Барбекю"
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Икорный</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					50&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "Икорный"
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Острый</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "Острый"
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>По-деревенски</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "По-деревенски"
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Тар-тар</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "Тар-тар"
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Француз</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "Француз"
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/sous/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Сырный</h4>
				</div>
				<div class="info">
					<p>
						Соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					50 мл
				</span>
				<span class="price">
					30&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sous/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Соус "Сырный"
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