<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставьте заявку</h3>
			<p class="text-center">И мы свяжемся с Вами в ближайшее время</p>
			<form class="form-horizontal" method="POST" action="order.php">
				<input type="hidden" name="tid" value="Обратный звонок">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="number" name="number" placeholder="Введите номер телефона" required>
				</div>
				<center>
					<button type="submit" class="btn small" id="send" name="submit">Отправить</button>
				</center>
				<div class="conf-row">
					<p class="politics text-center">Нажимая на кнопку Отправить, вы даете согласие на обработку своих <a href="politics.php" target="_blank">персональных данных</a></p>
				</div>	
			</form>
		</div>
	</div>
</div>