<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставьте заявку</h3>
			<p>И мы свяжемся с Вами в ближайшее время</p>
			<form class="form-horizontal ajax-form text-center" id="form-call">
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
				<button type="submit" class="btn small" id="send" name="submit" onclick="validate(this.form)">Отправить</button>
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

<!--Рассчитать стоимость-->
<div class="modal fade modal-feedback" id="rasch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<form class="form-horizontal text-center" action="order.php" method="POST" id="form-rasch">
				<input type="hidden" name="tid" value="Рассчитать стоимость">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-item" id="tab-content4">
						<a class="tab-label btn-back" href="#tab-content3"></a>
						<h3>Введите номер своего <br>телефона и получите расчет:</h3>
						<div class="form-group phone">
							<input type="tel" class="form-control" id="number" name="number" required placeholder="+7 (___) ___-____">
						</div>
						<button type="submit" class="btn small" id="send" name="submit" onclick="validate(this.form)">Отправить</button>
						<div class="conf">
							<label class="checkbox-btn">
								<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
								<p>Согласен с политикой конфиденциальности</p>
							</label>
						</div>	
					</div>
					<div class="tab-item" id="tab-content2">
						<h3>Укажите количетсво розеток <br>и выключателей:</h3>
						<div class="row">
							<div class="col-sm-6">
								<label class="radio-btn">
									<input name="opt2" type="radio" value="10-20 шт" checked><div></div>
									<p>10-20 шт</p>
								</label>
								<label class="radio-btn">
									<input name="opt2" type="radio" value="от 40 до 60 шт"><div></div>
									<p>от 40 до 60 шт</p>
								</label>
							</div>
							<div class="col-sm-6">
								<label class="radio-btn">
									<input name="opt2" type="radio" value="от 20 до 40 шт"><div></div>
									<p>от 20 до 40 шт</p>
								</label>
								<label class="radio-btn">
									<input name="opt2" type="radio" value="от 60 шт и Выше"><div></div>
									<p>от 60 шт и Выше</p>
								</label>
							</div>
						</div>
						<a class="tab-label btn-back" href="#tab-content1"></a>
						<a class="tab-label btn small" href="#tab-content3">Далее</a>
					</div>
					<div class="tab-item" id="tab-content3">
						<h3>Укажите приблизительную <br>площадь Вашего объекта:</h3>
						<div class="row">
							<div class="col-9">
								<div class="form-group resize">
									<input type="text" class="form-control" id="opt3" name="opt3" placeholder="2000">
								</div>
							</div>
							<div class="col-3">
								<div class="t1">кв.м</div>
							</div>
						</div>
						<a class="tab-label btn-back" href="#tab-content2"></a>
						<a class="tab-label btn small" href="#tab-content4">Далее</a>
					</div>
					<div class="tab-item" id="tab-content1">
						<h3>Укажите тип Вашего помещения:</h3>
						<label class="radio-btn">
							<input name="opt1" type="radio" value="Новое Строительство" checked><div></div>
							<p>Новое Строительство</p>
						</label>
						<label class="radio-btn">
							<input name="opt1" type="radio" value="Реконструкция"><div></div>
							<p>Реконструкция</p>
						</label>
						<a class="tab-label btn small" href="#tab-content2">Далее</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content text-center">
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