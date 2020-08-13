<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content text-center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<p>Оставьте Ваш номер телефона <br>наш специалист перезвонит Вам <br>в течении 15 минут</p>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group name">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя">
				</div>
				<div class="form-group phone">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<button type="submit" class="btn small" id="send" name="submit"  onclick="yaCounter49749856.reachGoal('button_zakaz_zvonok'); return true;">Заказать звонок</button>	
			</form>
		</div>
	</div>
</div>
<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content text-center">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal"></button>
				<h3 class="h3">Спасибо за Вашу заявку!</h3>
				<p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
				<br>
				<img src="assets/images/logo.png" alt="" class="m-auto">
			</div>
		</div>
	</div>
</div>
<!-- Неудачная отправка -->
<div class="modal fade" id="fail-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content text-center">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal"></button>
				<h3 class="h3">Заявка не отправлена</h3>
				<p>Проверьте, пожалуйста, правильность<br>заполнения всех полей.</p>
				<img src="assets/images/logo.png" alt="" class="m-auto">
			</div>
		</div>
	</div>
</div>