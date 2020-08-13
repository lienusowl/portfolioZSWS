<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставьте заявку</h3>
			<p class="text-center">И мы свяжемся с Вами в ближайшее время</p>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
				<div class="conf">
					<label class="checkbox-btn text-center">
						<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
						<p class="politics">Согласен с политикой конфиденциальности</p>
					</label>
				</div>		
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
			<img src="assets/images/logo.png" alt="" class="m-auto">
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
			<img src="assets/images/logo.png" alt="" class="m-auto">
		</div>
	</div>
</div>