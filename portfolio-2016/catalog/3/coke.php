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
				<img src="img/catalog/drink/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>KOZEL темное</h4>
				</div>
				<div class="info">
					<p>
						Пиво темное
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					0.5 л
				</span>
				<span class="price">
					100&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/drink/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Пиво KOZEL темное
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/drink/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>KOZEL светлое</h4>
				</div>
				<div class="info">
					<p>
						Пиво светлое
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					0.5 л
				</span>
				<span class="price">
					100&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/drink/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Пиво KOZEL светлое
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/drink/3.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>HEINEKEN</h4>
				</div>
				<div class="info">
					<p>
						Пиво
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					0.5 л
				</span>
				<span class="price">
					120&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/drink/3b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Пиво HEINEKEN
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/drink/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>EFES</h4>
				</div>
				<div class="info">
					<p>
						Пиво
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					0.5 л
				</span>
				<span class="price">
					100&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/drink/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Пиво EFES
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/drink/5.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Сок</h4>
				</div>
				<div class="info">
					<p>
						В ассортименте
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					1 л
				</span>
				<span class="price">
					120&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/drink/5b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Сок в ассортименте
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