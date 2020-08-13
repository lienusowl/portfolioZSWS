<div id="call" class="modal">
	<button type="button" class="close"></button>
    <div class="modal-content">
    	<h3>Оставить заявку</h3>
		<form class="form-horizontal" action="order.php" methot="POST" id="form-call">
			<input type="hidden" name="tid" value="Заявка с сайта">
			<div class="form-group for-name">
				<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="inpt1" placeholder="Имя" name="inpt1">
			</div>
			<div class="form-group">
				<input type="tel" class="form-control" id="number" placeholder="Телефон" name="number" required>
			</div>
			<button type="submit" class="btn" id="send" name="submit">Отправить</button>
		</form>
    </div>
</div>
<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3>Спасибо за Вашу заявку!</h3>
			<p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
			<br>
			<img src="assets/template/img/logo.png" alt="" class="m-auto">
		</div>
	</div>
</div>
<!-- Неудачная отправка -->
<div class="modal fade" id="fail-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3>Заявка не отправлена</h3>
			<p>Проверьте, пожалуйста, правильность<br>заполнения всех полей.</p>
			<img src="assets/template/img/logo.png" alt="" class="m-auto">
		</div>
	</div>
</div>
<div id="overlay"></div>