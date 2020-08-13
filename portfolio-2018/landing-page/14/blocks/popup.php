<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставьте заявку</h3>
			<p>И мы свяжемся с Вами в ближайшее время</p>
			<form class="form-horizontal" id="form-calc" action="order.php" method="POST">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name" style="display: none;">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group name">
					<input type="text" class="form-control" name="inpt1" placeholder="Ваше имя" required="">
				</div>
				<div class="form-group phone">
					<input type="tel" class="form-control" name="number" placeholder="Ваш номер телефона" required="">
				</div>
				<!--<div class="form-group email">
					<input type="email" class="form-control" name="email" placeholder="Ваш Email">
				</div>-->
				<div class="form-group size3">
					<input type="number" class="form-control" name="calc_square" placeholder="Площадь, м" min="1">
				</div>
				<button class="btn" id="submit" type="submit" name="submit">Отправить</button>
				<div class="conf">
					<div class="icon-lock"></div>
					Нажимая на кнопку, вы даете <a href="politics.php" target="_blank">согласие</a> на обработку своих персональных данных
				</div>
			</form>
		</div>
	</div>
</div>