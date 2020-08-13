<section id="form">
	<div class="container">
		<h2 class="h2 text-center">Расчет стоимости строительства здания</h2>
		<p class="text-center">Заполните форму ниже и уже через 15 минут Вам ответит наш менеджер</p>
		<form class="form-horizontal" id="form-calc" action="order.php" method="POST">
			<input type="hidden" name="tid" value="Расчитать стоимость">
			<div class="form-group for-name" style="display: none;">
				<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group size1">
						<label>Длина:</label>
						<input type="number" class="form-control" value="" name="calc_dlina" placeholder="м" min="1">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group size2">
						<label>Ширина:</label>
						<input type="number" class="form-control" name="calc_shirina" placeholder="м" min="1">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group size3">
						<label>Или площадь:</label>
						<input type="number" class="form-control" name="calc_square" placeholder="м" min="1">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label class="radio-btn">
							<input name="calc_profile" type="radio" value="Холодный контур" checked="">
							<div></div>
							<p>Холодный контур</p>
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="radio-btn">
							<input name="calc_profile" type="radio" value="Теплый контур">
							<div></div>
							<p>Теплый контур</p>
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group name">
						<input type="text" class="form-control" name="inpt1" placeholder="Ваше имя" required="">
					</div>
					<div class="form-group phone">
						<input type="tel" class="form-control" name="number" placeholder="Ваш номер телефона" required="">
					</div>
					<div class="form-group email">
						<input type="email" class="form-control" name="email" placeholder="Ваш Email">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group message">
						<textarea cols="30" rows="4" name="calc_message" id="calc_message" class="form-control" placeholder="Дополнительная информация"></textarea>
					</div>
				</div>
			</div>
			<div class="row align-center">
				<div class="col-sm-auto">
					<button class="btn small" id="calc-send" type="submit" name="calc_submit">Заказать расчёт</button>
				</div>
				<div class="col-sm">
					<div class="conf">
						<div class="icon-lock"></div>
						Нажимая на кнопку, вы даете <a href="politics.php" target="_blank">согласие</a> на обработку своих персональных данных
					</div>	
				</div>
			</div>
		</form>
	</div>
</section>