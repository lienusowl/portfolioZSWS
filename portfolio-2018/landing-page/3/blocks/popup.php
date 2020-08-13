<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call2" tabindex="-1" role="dialog">
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3 id="modal_title">Оставить заявку</h3>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта" id="tid">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="text" class="form-control field__input" id="inpt1" placeholder="Имя" name="inpt1">
						<span class="field__label-wrap">
							<span class="field__label">Имя</span>
						</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="tel" class="form-control field__input" id="number" placeholder="Телефон" name="number" required>
						<span class="field__label-wrap">
								<span class="field__label">Телефон</span>
							</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="text" class="form-control field__input" id="email" placeholder="Email" name="email">
						<span class="field__label-wrap">
								<span class="field__label">Email</span>
							</span>
					</label>
				</div>
				<button type="submit" class="btn" id="send" name="submit"><span class="blink_on">Отправить</span></button>
			</form>
			<p class="big">Мы перезвоним в <br>ближайшее время</p>
		</div>
	</div>
</div>
<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog">
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3>Оставить заявку</h3>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="text" class="form-control field__input" id="inpt1" placeholder="Имя" name="inpt1">
						<span class="field__label-wrap">
							<span class="field__label">Имя</span>
						</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="tel" class="form-control field__input" id="number" placeholder="Телефон" name="number" required>
						<span class="field__label-wrap">
								<span class="field__label">Телефон</span>
							</span>
					</label>
				</div>
				<div class="form-group">
					<label class="field field_type1">
						<input type="text" class="form-control field__input" id="email" placeholder="Email" name="email">
						<span class="field__label-wrap">
								<span class="field__label">Email</span>
							</span>
					</label>
				</div>
				<button type="submit" class="btn" id="send" name="submit"><span class="blink_on">Отправить</span></button>
			</form>
			<p class="big">Мы перезвоним в <br>ближайшее время</p>
		</div>
	</div>
</div>
<div class="modal fade modal-feedback" id="video-popup" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close video-show video-pause" data-dismiss="modal"></button>
			<div id="popupVid">
				<iframe width="100%" height="385" src="https://www.youtube.com/embed/j8cDAD9UVDw?enablejsapi=1" frameborder="0" gesture="media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3 class="mb-10">Спасибо <br>за Вашу заявку!</h3>
			<p class="title2">Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
			<br>
		</div>
	</div>
</div>
<!-- Неудачная отправка -->
<div class="modal fade" id="fail-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3 class="mb-10">Заявка <br>не отправлена</h3>
			<p class="title2">Проверьте, пожалуйста, правильность<br>заполнения всех полей.</h3>
			<br>
		</div>
	</div>
</div>