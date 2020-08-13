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
				<img src="img/t6.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Картофель фри</h4>
				</div>
				<div class="info">
					<p>
						Картофель фри
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					100 г
				</span>
				<span class="price">
					70&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t6b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Хрустящие, подсоленные картофельные палочки - классика гарниров. Идеально подходит для мясных и рыбных блюд.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/garnirs/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Картофельные дольки</h4>
				</div>
				<div class="info">
					<p>
						Картофельные дольки
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					100&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/garnirs/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Хрустящие, подсоленные картофельные дольки - классика гарниров. Идеально подходит для мясных и рыбных блюд.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/garnirs/3.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Рис Ризотто</h4>
				</div>
				<div class="info">
					<p>
						Рис ризотто<br />
						Овощи
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					100&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/garnirs/3b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Является идеальным гарниром для мясных и рыбных блюд. Высококачественный рис, приготовленный на пару, оттеняется вкусом свежих, чуть обжаренных овощей.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/t7.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Фасоль с морковкой</h4><span class="green"></span>
				</div>
				<div class="info">
					<p>
						Стручковая фасоль<br />
						Обжареная с морковью<br />
						Лук<br />
						Чеснок
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					100 г
				</span>
				<span class="price">
					130&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t7b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Гарнир из стручковой фасоли, обжареной с морковью, луком и чесноком, подойдет как к мясным , так и рыбным блюдам.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/t11.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Овощи гриль</h4><span class="new">new</span>
				</div>
				<div class="info">
					<p>
						Балгарский перчик<br />
						Цукини<br />
						Баклажан<br />
						Морковь
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					200 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t11.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Порадуйте себя свежими овощами. Болгарский перчик, цукини, баклажан и морковь, приготовленные на мангале особым способом сохраняют свою сочность, приобретая неповторимый вкус, который не оставит Вас равнодушным.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x1">
			<div class="img">
				<img src="img/catalog/garnirs/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Картофельные шарики</h4>
				</div>
				<div class="info">
					<p>
						Картофельные шарики<br />
						соус «Француз»
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					130&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/garnirs/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Картофельные шарики с соусом "Француз"
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