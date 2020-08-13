<section id="contacts">
	<div class="container">
		<h2 class="text-center">Оставить контакты менеджеру</h2>
		<form class="form-horizontal ajax-form" id="form-call">
			<input type="hidden" name="tid" value="Оставить заявку">
			<div class="form-group for-name">
				<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<input type="tel" class="form-control" id="number" placeholder="Ваш номер телефона" name="number" required="">
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<button type="submit" class="btn yellow w-100" id="send" name="submit">Оставить заявку</button>
				</div>
			</div>
		</form>
	</div>
</section>
<div id="popup"></div>