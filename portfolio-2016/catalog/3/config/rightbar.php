<div class="side-bar-right">
        <div class="order">
			<h3>Ваш заказ</h3>
			<div class="positions">
				<?php getPositions() ?>
			</div>
		</div>
		<div class="order-price">
			<p>
				Итого товаров на сумму:
			</p>
			<p class="price">
				<?php echo $_SESSION['price']; ?>&#8399;
			</p>
			<a href="#" class="order-finish">заказать</a>
			<p class="recommendation">
				Рекомендуем к вашему заказу
			</p>
		</div>
		<div class="banner-right">
			<h4>Напитки</h4>
			<p>
				Закажи напиток
			</p>
			<div class="img">
				<img src="img/sok.jpg" />
			</div>
			<a class="buy-banner" href="coke.php">Заказать</a>
		</div>
		<!--<div class="banner-right-two">
			<img src="img/banner2.jpg" />
		</div>-->
    </div>