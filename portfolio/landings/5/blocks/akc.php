<div class="box1">
			<img src="img/gal.png" class="foto">
			<div id="forma">
				<div class="popup">
					<h2>Оставьте заявку для заказа<br>Деда Мороза<br>(До 25 декабря всего 1300 руб!)</h2><br>
					<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ звонка">
		<input name="name" type="text" tabindex="1" placeholder="Введите Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Введите Ваш телефон">
		<input class="button1" id="button2" type="submit" name="submit" value="Отправить">
	</form>
				</div>
			</div>
			<div class="clear"></div>
			<div class="akc">
				<div class="akciya">
					<p class="akc1">Акция: <span>Подарок!</span></p>
					<p class="akc2">Оставьте заявку прямо сейчас<br>и получите подарок на Новый год!</p>
					<p><a href="#inline1" class="modalbox" id="button1">Оставить заявку<img src="img/tree.png" class="ding"></a></p>
				</div>
				<div class="count">
					<? include("blocks/count.php");?>
				</div>
			</div>
		</div>