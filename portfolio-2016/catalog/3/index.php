<?php include "config/system.php";?>
<!DOCTYPE html>
<html>
<? include("blocks/head.php");?>
<?php include "config/header.php"; ?>
<body>
<? include("blocks/popup.php");?>
<? include("blocks/top.php");?>
<? include("blocks/nav.php");?>
<? include("blocks/slide.php");?>
<div class="line1"></div>
<? include("blocks/b1.php");?>
<div class="line2"></div>
<? include("blocks/best.php");?>
<? include("blocks/what.php");?>
<div class="line1"></div>
<? include("blocks/more.php");?>
<div class="line1"></div>
<? include("blocks/shema.php");?>
<? include("blocks/akc.php");?>
<? include("blocks/dostavka.php");?>
<? include("blocks/complect.php");?>
<div class="line2"></div>
<? include("blocks/how.php");?>


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
<!--
<div class="b-main-top">
	<div class="header">
		<a href="index.php" class="logo">
			Доставка <span class="fire"><span></span>горячего</span> шашлыка, настоящих бургеров и сытной пиццы в Иркутске
		</a>
		<div class="right-content right">
			<a href="#" class="callme">Заказать звонок</a>
			<span class="tel">8 (3952) 99-77-88</span>
		</div>
	</div>
	<div class="info">
		<p class="descriptor">
			Закажите горячий шашлык, бургер или пиццу. При заказе на сумму от <span>700 рублей</span> – доставка бесплатно.
		</p>
		<p class="delivery">
			*доставка в отдаленные районы + 100<span>&#8399;</span>
		</p>
		<a href="shashlik.php" class="order">Заказать шашлычка</a>
	</div>
</div>
-->
<div id="zakaz"></div>
<?php include "index-top.php"; ?>
<div class="main-new">
	<div class="b-main-content">
		<div class="side-bar-left">
			<?php include "index-left.php"; ?>
		</div>
		<div class="main-menu">
			<div class="items">
				<?php include "index-content.php"; ?>

			</div>
		
					<? include("blocks/about.php");?>
<? include("blocks/price.php");?>
<? include("blocks/clients.php");?>
<? include("blocks/footer.php");?>
		</div>
		<?php include "config/rightbar.php"; ?>
		
	</div>
	
</div>
<?php include "config/metrika.php"; ?></body>

</html>