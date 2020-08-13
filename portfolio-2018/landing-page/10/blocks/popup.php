<!--оставить заявку-->
<div class="modal fade" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставить заявку</h3>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя " name="inpt1">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Ваш E-mail" name="email" required>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<input type="tel" class="form-control" id="number" placeholder="Ваш телефон" name="number" required>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn" id="send" name="submit">Оставить заявку</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--оставить заявку2-->
<div class="modal fade" id="comebacker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Заголовок для камбекера</h3>
			<form class="form-horizontal ajax-form" id="form-modal">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя " name="inpt1">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Ваш E-mail" name="email" required>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<input type="tel" class="form-control" id="number" placeholder="Ваш телефон" name="number" required>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn" id="send" name="submit">Оставить заявку</button>
				</div>
			</form>
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