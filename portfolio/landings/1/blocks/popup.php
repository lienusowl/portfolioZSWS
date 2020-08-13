<!--заказ звонка-->
<div id="inline1" style="display:none;">
	<div class="popup">
	<br><h2>Заказать прайс</h2>
	<form class="popup-form" action="order.php" method="post" onsubmit="yaCounter25260155.reachGoal('form3'); return true;">
		<input type="hidden" name="tid" value="Заказ прайса">
		<input name="referer" type="hidden" value="<?=$referer?>">
<input name="phrase" type="hidden" value="<?=$phrase?>">

		<input name="name" type="text" tabindex="1" placeholder="Имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Телефон">
		<input class="button1 buttonss" id="submit" type="submit" name="submit" value="Заказать прайс">
	</form>
	<script type="text/javascript">
	jQuery(function($){
   $("input[name='number']").mask("8 (999) 999 99 99");
});
	</script>
</div>
</div>

<!--Оставить заявку-->
<div id="inline2" style="display:none;">
	<div class="popup">
	<br><h2>Заказ звонка</h2>
	<form class="popup-form" action="order.php" method="post" onsubmit="yaCounter25260155.reachGoal('form6'); return true;">
		<input type="hidden" name="tid" value="Заказ звонка">
		<input name="referer" type="hidden" value="<?=$referer?>">
<input name="phrase" type="hidden" value="<?=$phrase?>">

		<input name="name" type="text" tabindex="1" placeholder="Имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Телефон">
		<input class="button1 buttonss" id="submit" type="submit" name="submit" value="Заказать звонок">
	</form>
		<script type="text/javascript">
	jQuery(function($){
   $("input[name='number']").mask("8 (999) 999 99 99");
});
	</script>
</div>
</div>