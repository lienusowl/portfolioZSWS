<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<form class="form-horizontal" id="form-call" enctype="multipart/form-data" method="POST" action="order.php">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="row">
					<div class="col-md-7">
						<h2><span>Отправьте заявку</span> <br>и получите цены</h2>
						<div class="row">
							<div class="col-sm-7">
								<div class="file-text">
									<b>Загрузите</b> ваши реквизиты, <br>фото запчасти или любой <br>другой файл...
								</div>
							</div>
							<div class="col-sm-5">
								<label class="file-label">
									Загрузить файл
									<input type="file" name="fileforsending" id="fileforsending">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<hr>
						<div class="textarea-group">
							<p><b>Вы можете отправить</b> нам описание в любом <br>удобном формате: прикрепить фото, тех.описание <br>оборудование, его назначение или написать артикул</p>
							<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Введите текст"></textarea>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group name">
							<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Ваше имя" required>
						</div>
						<div class="form-group phone">
							<input type="tel" class="form-control phone-input" id="number" name="number" placeholder="+7 (___) ___-__-__" required>
						</div>
						<div class="form-group email">
							<input type="email" class="form-control" id="email" name="email" placeholder="Ваш Email">
						</div>
						<button type="submit" class="send" id="send" name="submit">Отправить
							<span class="send-shadow"></span>
						</button>
						<div class="conf text-center">
							Нажимая на кнопку, вы принимаете <a href="politics.php" target="_blank">Положение <br>и Согласие</a> на обработку персональных данных.
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