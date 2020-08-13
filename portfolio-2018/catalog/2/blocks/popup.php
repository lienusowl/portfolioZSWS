<!--оставить заявку-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставить заявку</h3>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group name">
					<input type="text" class="form-control" id="inpt1" placeholder="Имя" name="inpt1">
				</div>
				<div class="form-group number">
					<input type="tel" class="form-control" id="number" placeholder="Телефон" name="number" required>
				</div>
				<div class="form-group message">
					<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
				</div>
				<button type="submit" class="btn" id="send" name="submit">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!--заказать звонок-->
<div class="modal fade" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Заказать звонок</h3>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заказать звонок">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group name">
					<input type="text" class="form-control" id="inpt1" placeholder="Имя" name="inpt1">
				</div>
				<div class="form-group number">
					<input type="tel" class="form-control" id="number" placeholder="Телефон" name="number" required>
				</div>
				<button type="submit" class="btn" id="send" name="submit">Отправить</button>
			</form>
		</div>
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