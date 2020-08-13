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
				<img src="img/t8.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Цезарь с курицей</h4>
				</div>
				<div class="info">
					<p>
						Классический салат на основе<br />
						овощей и сыра пармезана, <br />
						с куриным филе с мангала
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t8.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Салат "Цезарь с курицей" - классический салат на основе овощей и сыра пармезана, с куриным филе с мангала, оттененный секретным соусом от нашего шеф-повара. Цезарь – королевское украшение Вашего стола!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/1.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Цезарь с сёмгой</h4>
				</div>
				<div class="info">
					<p>
						лист салата<br />
						помидор<br />
						гренки<br />
						сыр пармезан<br />
						малосольное филе семги<br />
						соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					180&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/1b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Салат "Цезарь с семгой" - классический салат на основе овощей и сыра пармезана, с малосольным филе семги, оттененный секретным соусом от нашего шеф-повара. Цезарь – царское украшение Вашего стола.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/2.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Цезарь с креветками</h4>
				</div>
				<div class="info">
					<p>
						Лист салата<br />
						помидор<br />
						гренки<br />
						сыр пармезан<br />
						креветки<br />
						соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					180&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/2b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Салат "Цезарь с креветками" - классический салат на основе овощей и сыра пармезана, с креветками, оттененный секретным соусом от нашего шеф-повара. Цезарь – королевское украшение Вашего стола!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/3.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Греческий</h4>
				</div>
				<div class="info">
					<p>
						свежие овощи<br />
						маслины<br />
						сыр «фетакса»<br />
						оливковое масло
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/3b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Салат «Греческий» - Известный по всему миру средиземноморский салат с ярким вкусом на основе свежих овощей с маслинами и сыром «фетакса» оттеняет оливковое масло первой выжимки. Хорошее дополнение к мясным и рыбным блюдам.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/4.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Наслаждение</h4><span class="new">new</span>
				</div>
				<div class="info">
					<p>
						курица<br />
						ветчина<br />
						болгарский перец<br />
						сыр<br />
						фирменный соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/4b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Легкий салат из курицы и ветчины с болгарским перцем, сыром и фирменным соусом, истинное наслаждение
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/5.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>C Сёмгой и Икрой</h4><span class="new">new</span>
				</div>
				<div class="info">
					<p>
						Кусочки семги с икрой<br />
						картофель<br />
						лист салата<br />
						черри<br />
						дижонская горчица<br />
						оливковое масло
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					200&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/5b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>		
						Кусочки семги с икрой, картофель. Дольками, листом салата , черри , заправленные соком лимона, дижонской горчицей и оливковым маслом.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/t9.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Салат с жареными баклажанами</h4><span class="green"></span>
				</div>
				<div class="info">
					<p>
						жареные баклажаны<br />
						черри<br />
						лук<br />
						корейская заправка.
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t9.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Тонкий утонченный вкусный салат из  баклажанов с сочетании с помидором Черри, лучком и кореской заправкой.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/t10.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Фирменный</h4><span class="new">new</span>
				</div>
				<div class="info">
					<p>
						3 вида мяса<br />
						[курица, свинина, ветчина]
					</p>
					<p>
						Маринованный огурчик<br />
						опята<br />
						Сыр
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					180&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/t10.jpg" alt="item" />
				</div>
				<div class="description">
					<p>
						Фирменный салат от нашего шеф-повара 3 вида мяса курица, свинина и ветчина в сочетании с маринованным огурчиком опятами и сыром, под пикантным соусом не оставят Вас равнодушными.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/6.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Охотничий</h4><span class="new">new</span>
				</div>
				<div class="info">
					<p>
						Охотничьи колбаски<br />
						картофельные дольки<br />
						черри<br />
						сыр и красный лук<br />
						фирменный соус
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					170&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/6b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>		
						Теплый салат с охотничьими колбасками, картофельными дольками, черри, сыром и красным луком, заправленный фирменным соусом
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/7.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Овощной</h4>
				</div>
				<div class="info">
					<p>
						свежий огурец<br />
						помидор<br />
						болгарский перец
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
					<img src="img/catalog/salads/7b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>		
						Салат «Овощной» - любимый салат из свежих огурцов, помидоров и болгарского перца идеальное дополнение к шашлыку.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/8.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Закусочный</h4>
				</div>
				<div class="info">
					<p>
						Свежие огурчики<br />
						сыр<br />
						колбаска
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					140&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/8b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>		
						Салат «Закусочный» - Свежие огурчики, сыр и колбаска – для истинных ценителей вкусной кухни!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/9.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Огурчики малосольные</h4>
				</div>
				<div class="info">
					<p>
						Огурчики малосольные
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
					<img src="img/catalog/salads/9b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>		
						Огурчики малосольные – Приятно похрустывающие малосольные огурчики так и просятся на вилку. Отличное дополнение Вашего стола!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/10.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Морковь по-корейски</h4>
				</div>
				<div class="info">
					<p>
						Морковь<br />
						соус для корейской марковки
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
					<img src="img/catalog/salads/10b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>		
						Салат «Морковь по-корейски». Тонко нашинкованная морковь, заправленная особых горячим соусом придется по вкусу ценителям азиатской кухни
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/11.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Витаминный</h4>
				</div>
				<div class="info">
					<p>
						свежая капуста<br />
						морковь<br />
						зелень<br />
						заправка
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
					<img src="img/catalog/salads/11b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>			
						Салат «Витаминный» - тонко нашинкованная свежая капуста, морковь и зелень в деликатной заправке – кладезь витаминов и море вкусового удовольствия
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/12.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Спаржа</h4>
				</div>
				<div class="info">
					<p>
						Спаржа<br />
						морковь по-корейски<br />
						кунжут
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
					<img src="img/catalog/salads/12b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>			
						Спаржа – нежнейшая фучжоу с морковью по-корейски, удивительно оттененная мягким вкусом кунжута будет необычным дополнением к вашему заказу.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/13.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Свинина по-корейски</h4>
				</div>
				<div class="info">
					<p>
						свинина<br />
						шампиньоны<br />
						маринованные огурцы<br />
						морковь по-корейски<br />
						кунжут<br />
						заправка
					</p>
				</div>
			</div>
			<div class="lb-info">
				<span class="netto">
					150 г
				</span>
				<span class="price">
					150&#8399;
				</span>
			</div>
			<a class="buy" href="#">в корзину</a>
			<div class="alter-info hide">
				<div class="img">
					<img src="img/catalog/salads/13b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>			
						Представляем Вашему вниманию классику азиатской кухни! Нежнейшая свинина в сочетании с шампиньонами, маринованными огурцами, морковью по-корейски, кунжутом и секретной заправкой приятно удивит самых изысканных гурманов!
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/14.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Фунчоза</h4>
				</div>
				<div class="info">
					<p>
						Фунчоза
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
					<img src="img/catalog/salads/14b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>			
						Салат "Фунчоза". Классический корейский салат с фунчозой необычное дополнение к Вашему столу
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/15.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Черные древесные грибы</h4>
				</div>
				<div class="info">
					<p>
						древесные грибы<br />
						кунжут<br />
						заправка<br />
						морковка<br />
						заправка
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
					<img src="img/catalog/salads/15b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>			
						Нежные, пикантно похрустывающие древесные грибы. Оттенены деликатным вкусом кунжута будут экзотическим добавлением к Вашему заказу
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/16.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>Со свиными ушками</h4>
				</div>
				<div class="info">
					<p>
						свинные ушки<br />
						морковь<br />
						кунжут<br />
						заправка
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
					<img src="img/catalog/salads/16b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>			
						Салат "Со свиными ушками". Знаменитый корейский салат со свиными ушками приготовленный в лучших традициях корейской кухни.
					</p>
				</div>
			</div>
		</div>
		
		<div class="block x2">
			<div class="img">
				<img src="img/catalog/salads/17.jpg" alt="item" />
			</div>
			<div class="lt-info">
				<div class="title-export">
					<h4>С куриными желудками</h4>
				</div>
				<div class="info">
					<p>
						куриные желудки<br />
						морковь<br />
						кунжут<br />
						заправка
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
					<img src="img/catalog/salads/17b.jpg" alt="item" />
				</div>
				<div class="description">
					<p>			
						Салат "С куриными желудками". Знаменитый корейский салат с куриными желудками приготовленный в лучших традициях корейской кухни.
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