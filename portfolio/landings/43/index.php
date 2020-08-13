<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include("blocks/head.php");?>
<title>Workzilla</title>
</head>
<body>
<? include("blocks/header.php");?>
<div id="main-wrapper">	
	<div id="content">
		<div class="top-box">
			<img src="files/index/1.png" style="margin-left: 30px;">
			<? include("blocks/slider.php");?>
			<? include("blocks/timer.php");?>
			<? include("blocks/fancybox.php");?>
			<div class="products">
				<img src="files/index/prod1.jpg">
				<a href="order1.php" class="iframe"><span class="zakazat">Заказать</span></a>
				<a href="page.php"><span class="readon">Подробнее</span></a>
			</div>
			<div class="products">
				<img src="files/index/prod2.jpg">
				<a href="order2.php" class="iframe"><span class="zakazat">Заказать</span></a>
				<a href="page.php"><span class="readon">Подробнее</span></a>
			</div>
			<div class="products">
				<img src="files/index/prod3.jpg">
				<a href="order3.php" class="iframe"><span class="zakazat">Заказать</span></a>
				<a href="page.php"><span class="readon">Подробнее</span></a>
			</div>
			<div class="products">
				<img src="files/index/prod4.jpg">
				<a href="order4.php" class="iframe"><span class="zakazat">Заказать</span></a>
				<a href="page.php"><span class="readon">Подробнее</span></a>
			</div>
			
			<? include("blocks/sertif.php");?>	
			</div>
		</div>
		
	<? include("blocks/right.php");?>	
	</div>
</div>
<? include("blocks/footer.php");?>	

</body>
</html>