<div class="container-fluid calc-container">
	<div class="container">
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="calc-form">
				<div class="calc-b1 pull-left"></div>
				<div class="calc-b1 pull-right"></div>
				<div class="calc-form-inn">
					<p class="big">Расчет стоимости строительства здания</p>
					<p class="small">Заполните форму ниже и уже через 15 минут Вам ответит наш менеджер</p>
					<form class="form-horizontal" action="order.php" method="post">
						<input type="hidden" name="tid" value="Расчитать стоимость">
						<div class="form-group for-name">
							<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Выберите тип постройки:</label>
								<select name="calc_type">
									<option value="Склад, ангар, хранилище" selected>Склад, ангар, хранилище</option>
									<option value="СТО, автоцентр, гараж">СТО, автоцентр, гараж</option>
									<option value="Магазин, торговый центр">Магазин, торговый центр</option>
									<option value="Цех, завод, производ. здание">Цех, завод, производ. здание</option>
									<option value="Вертолетный / самолетный ангар">Вертолетный / самолетный ангар</option>
									<option value="Здание сельхоз. назначения">Здание сельхоз. назначения</option>
									<option value="Другое здание">Другое здание</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Покрытие крыши здания:</label>
								<select name="calc_pokritie">
									<option value="Да" selected>Да</option>
									<option value="Нет">Нет</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Длина здания:</label>
								<input type="number" class="form-control" value="" name="calc_dlina" placeholder="м" min="1">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Ширина здания:</label>
								<input type="number" class="form-control" name="calc_shirina" placeholder="м" min="1">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Высота здания:</label>
								<input type="number" class="form-control" name="calc_visota" placeholder="м" min="1">
							</div>
						</div>
						<div class="clear"></div>
						<div class="col-sm-12">
							<div class="form-group">
								<label>Тип контура:</label>
								<div class="clear"></div>
								<div class="col-sm-6">
									<label class="radio-btn">
										<input name="calc_profile" type="radio" value="Теплый контур" checked/>
										<div></div>
										<p>Теплый контур</p>
									</label>
								</div>
								<div class="col-sm-6">
									<label class="radio-btn">
										<input name="calc_profile" type="radio" value="Холодный контур"/>
										<div></div>
										<p>Холодный контур</p>
									</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<label>Контактная информация:</label>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								
								<input type="text" class="form-control" name="calc_name" placeholder="Ваше имя" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="tel" class="form-control" name="calc_phone" placeholder="Ваш номер телефона" required>
							</div>
						</div>
						<div class="clear"></div>
						<div class="col-sm-12">
							<input class="btn dark" id="calc-send" type="submit" name="calc_submit" value="Заказать расчёт" >
							<p class="small copyright"><i class="fa fa-lock" aria-hidden="true"></i>Ваши данные в безопасности и не будут переданы 3-м лицам.</p>
						</div>
					</form>	
				</div>
				<div class="calc-b1 pull-left"></div>
				<div class="calc-b1 pull-right"></div>
			</div>
		</div>
		</div>
		<div class="col-md-6 col-sm-12 calc-man hidden-phone">

		</div>
	</div>
</div>