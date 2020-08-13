<div class="clear"></div>
<div class="box3">
	<div id="center">
		<h3 class="red">ПРИ ЗАКАЗЕ ДВУХ ОКОН</h3>
		<h3 style="text-align:left;font-size:24px;">ЛАМИНАТ В ПОДАРОК</h3>
		<div class="count">
			<? include("blocks/count.php");?>
		</div>
		<div id="forma">
				<div class="popup">
					<p class="red1">ОСТАВЬТЕ ЗАЯВКУ</p>
					<p>на установку и получите ламинат<br>в <b>ПОДАРОК</b>!</p><br>
					<form class="popup-form" action="order.php" method="post">
						<input type="hidden" name="tid" value="Заказ звонка">
						<input name="name" type="text" tabindex="1" placeholder="Введите Ваше имя">
						<input required="" type="text" name="number" tabindex="2" placeholder="Введите Ваш телефон">
						<p style="margin-top: 10px;font-size: 16px;"><i>* оставьте заявку на установку двух окон и получите в подарок ламинат 3м</i></p>
						<input class="button1" id="button3" type="submit" name="submit" value="Оставить заявку">
					</form>
				</div>
			</div>
	</div>
</div>