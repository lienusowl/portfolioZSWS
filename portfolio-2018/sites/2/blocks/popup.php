<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3 class="mb-0">Оставьте заявку</h3>
			<p class="mb-15">И мы свяжемся с Вами в ближайшее время</p>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group name">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя">
				</div>
				<div class="form-group number">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<div class="row align-center">
					<div class="col-auto">
						<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
					</div>
					<div class="col">
						<div class="conf">
							<label class="checkbox-btn">
								<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
								<p class="politics">Согласен с политикой конфиденциальности</p>
							</label>
						</div>
					</div>
				</div>	
			</form>
		</div>
	</div>
</div>
<div class="modal fade modal-feedback" id="price-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Заказать прайс</h3>
			<form class="form-horizontal ajax-form" id="form-price-popup">
				<input type="hidden" name="tid" value="Заказать прайс">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group name">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя">
				</div>
				<div class="form-group number">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<div class="row align-center">
					<div class="col-auto">
						<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
					</div>
					<div class="col">
						<div class="conf">
							<label class="checkbox-btn">
								<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
								<p class="politics">Согласен с политикой конфиденциальности</p>
							</label>
						</div>
					</div>
				</div>
				
						
			</form>
		</div>
	</div>
</div>
<div class="modal fade modal-feedback" id="question-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Задать вопрос</h3>
			
			<form class="form-horizontal ajax-form" id="form-question-popup">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group name">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя">
				</div>
				<div class="form-group number">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<div class="form-group message">
					<textarea name="message" cols="30" rows="10" class="form-control" placeholder="Ваш вопрос"></textarea>
				</div>
				<div class="row align-center">
					<div class="col-auto">
						<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
					</div>
					<div class="col">
						<div class="conf">
							<label class="checkbox-btn">
								<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
								<p class="politics">Согласен с политикой конфиденциальности</p>
							</label>
						</div>
					</div>
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