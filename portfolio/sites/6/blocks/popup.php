<!--заказ звонка-->
<div id="inline1" style="display:none;">
	<div class="popup">
	<div class="form2">
	<form class="popup-form" action="order.php" method="post" id="f-form1">
		<p>Рассчитать цену</p>
		<input type="hidden" name="tid" value="Заявка с сайта">
		<input name="name" type="text" tabindex="1" placeholder="Ваше имя">
		<input required="" type="text" name="site" tabindex="2" placeholder="Ваш сайт">
		<input required="" type="text" name="number" tabindex="3" placeholder="Ваш телефон">
		<input required="" type="text" name="email" tabindex="4" placeholder="Ваш e-mail">
		<input class="button1" id="submit" type="submit" name="submit" value="Отправить заявку">
	</form>
	<p class="small">Ваши контактные данные в безопасности<br>и не будут переданы третьим лицам</p>
</div>
</div>
</div>

<!--Оставить заявку-->
<div id="inline2" style="display:none;">
	<div class="popup">
	<div class="form3">
	<h2>Оставьте заявку</h2>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ звонка">
		<input name="name" type="text" tabindex="1" placeholder="Введите Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Введите Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
	</div>
</div>
</div>