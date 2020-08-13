<div id="call" class="modal">
	<button type="button" class="close"></button>
    <div class="modal-content">
    	<h3>Заказать звонок</h3>
		<form action="order.php" method="POST" id="form-call">
			<input type="hidden" name="tid" value="Заказать звонок">
			<div class="form-group for-name">
				<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="inpt1" placeholder="Имя" name="inpt1">
			</div>
			<div class="form-group">
				<input type="tel" class="form-control phone" id="number" placeholder="+7 (___) ___-____" name="number" required="">
			</div>
			<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
		</form>
    </div>
</div>
<div id="modal-spec" class="modal">
	<button type="button" class="close"></button>
    <div class="modal-content">
    	<h3>Специальное предложение</h3>
		<form action="order.php" method="POST" id="form-spec">
			<input type="hidden" name="tid" value="Специальное предложение">
			<div class="form-group for-name">
				<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="inpt1" placeholder="Имя" name="inpt1">
			</div>
			<div class="form-group">
				<input type="tel" class="form-control phone" id="number" placeholder="+7 (___) ___-____" name="number" required="">
			</div>
			<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
		</form>
    </div>
</div>
<div id="overlay"></div>