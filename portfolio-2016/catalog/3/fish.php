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
				<img src="img/catalog/sh1/IMG_9334.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Стейк из семги</h4>
				</div>
				<div class="info">
					<p>
						Стейк из семги<br />
						Маринованный лук<br />
						икорный соус<br />
						долька лимона и маслины<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					200 г
				</span>
				<span class="price">
					450&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9334.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						 Предлагаем Вашему вниманию стейк из дальневосточной семги. Притомленную в духовке и поджаренную на углях. Стейк невероятно нежный и сочный, оттеняется изысканным вкусом икорного соуса, долькой лимона и маслинами.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9361.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Форель на мангале</h4>
				</div>
				<div class="info">
					<p>
						Форель<br />
						Маринованный лук<br />
						икорный соус<br />
						долька лимона и маслины<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					200 г
				</span>
				<span class="price">
					350&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9361.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Дальневосточная форель, замаринованная в белом вине и приготовленная на березовых углях, обладает незабываемым вкусом и тонким ароматом. Украшена долькой лимона и маслинами. Подается с лавашем, лучком и фирменным икорным соусом.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/IMG_9351.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Омуль горячего копчения</h4>
				</div>
				<div class="info">
					<p>
						Омуль горячего копчения<br />
						картофельные дольки<br />
						обжаренным лимон и соусом "Тар-тар"<br />
						лаваш
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					250&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/IMG_9351.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Байкальский омуль, приготовленный по старым традициям, с картофельными дольками, обжаренным лимоном и соусом "Тар-тар".
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/sh1/semga_malos.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Семга малосольная</h4>
				</div>
				<div class="info">
					<p>
						Семга малосольная<br />
						лимон<br />
						оливки<br />
						лист салата
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					230&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/sh1/semga_malos.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Необычайно нежная присоленная тузлком с морской солью семга будет для Вас рыбным откровением. Попробуйте!
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