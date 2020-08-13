<section id="sell-form">
	<div class="container">
		<h2 class="pagetite">Хотите продать или купить яхту? <br><span>
		Оставьте заявку и получите наше предложение в течении часа</span></h2>
		<ul class="nav nav-tabs">
			<li><a id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true" class="active">Купить</a></li>
		  	<li><a id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Продать</a></li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
				<form class="form-horizontal ajax-form" id="form-buy">
					<input type="hidden" name="tid" value="Купить яхту">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="form-group name">
								<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt1" name="opt1" placeholder="Модель и марка яхты">
							</div>
							<div class="form-group">
								<select name="opt2" id="opt2" class="form-control">
									<option value="Материал корпуса">Материал корпуса</option>
									<option value="Материал корпуса 2">Материал корпуса 2</option>
									<option value="Материал корпуса 3">Материал корпуса 3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt2" id="opt2" class="form-control">
									<option value="Материал корпуса">Год производства</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt3" id="opt3" class="form-control">
									<option value="Материал корпуса">Страна производитель</option>
									<option value="2010">Россия</option>
									<option value="2011">Великобритания</option>
									<option value="2012">Китай</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt4" name="opt4" placeholder="Моточасы">
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group phone">
								<input type="text" class="form-control" id="number" name="number" placeholder="Введите Ваш телефон" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt5" name="opt5" placeholder="Длина (м)">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt6" name="opt6" placeholder="Ширина (м)">
							</div>
							<div class="form-group">
								<select name="opt7" id="opt7" class="form-control">
									<option value="Материал корпуса">Количество кают</option>
									<option value="Материал корпуса 2">1-4</option>
									<option value="Материал корпуса 3">4-6</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt8" id="opt8" class="form-control">
									<option value="Тип яхты">Тип яхты</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt9" id="opt9" class="form-control">
									<option value="Местонахождение">Местонахождение</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group email">
								<input type="text" class="form-control" id="email" name="email" placeholder="Введите e-mail">
							</div>
							<div class="form-group">
								<select name="opt10" id="opt10" class="form-control">
									<option value="Марка двигателя">Марка двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt11" id="opt11" class="form-control">
									<option value="Мощность двигателя">Мощность двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt12" id="opt12" class="form-control">
									<option value="Объем двигателя">Объем двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt13" id="opt13" class="form-control">
									<option value="Привод двигателя">Привод двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt14" id="opt14" class="form-control">
									<option value="Состояние">Состояние</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group email">
								<input type="text" class="form-control" id="opt15" name="opt15" placeholder="Скорость (узлы/км.ч)">
							</div>
							<div class="form-group">
								<select name="opt16" id="opt16" class="form-control">
									<option value="">Пассажировместимость</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt17" id="opt117" class="form-control">
									<option value="">Число спальных мест</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Дополнительные параметры"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-auto">
							<button type="submit" class="btn" id="send" name="submit">Оставить заявку</button>
						</div>
						<div class="col">
							<div class="conf">
								<label class="checkbox-btn">
									<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
									<p class="politics">Даю согласие на обработку персональных данных <br>и соглашаюсь с <a href="#">политикой конфиденциальности</a></p>
								</label>
							</div>	
						</div>
					</div>	
				</form>
			</div>
			<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
				<form class="form-horizontal ajax-form" id="form-sell">
					<input type="hidden" name="tid" value="Продам яхту">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="form-group name">
								<input type="text" class="form-control" id="inpt1" name="inpt1" placeholder="Введите ваше имя" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt1" name="opt1" placeholder="Модель и марка яхты">
							</div>
							<div class="form-group">
								<select name="opt2" id="opt2" class="form-control">
									<option value="Материал корпуса">Материал корпуса</option>
									<option value="Материал корпуса 2">Материал корпуса 2</option>
									<option value="Материал корпуса 3">Материал корпуса 3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt2" id="opt2" class="form-control">
									<option value="Материал корпуса">Год производства</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt3" id="opt3" class="form-control">
									<option value="Материал корпуса">Страна производитель</option>
									<option value="2010">Россия</option>
									<option value="2011">Великобритания</option>
									<option value="2012">Китай</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt4" name="opt4" placeholder="Моточасы">
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group phone">
								<input type="text" class="form-control" id="number" name="number" placeholder="Введите Ваш телефон" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt5" name="opt5" placeholder="Длина (м)">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="opt6" name="opt6" placeholder="Ширина (м)">
							</div>
							<div class="form-group">
								<select name="opt7" id="opt7" class="form-control">
									<option value="Материал корпуса">Количество кают</option>
									<option value="Материал корпуса 2">1-4</option>
									<option value="Материал корпуса 3">4-6</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt8" id="opt8" class="form-control">
									<option value="Тип яхты">Тип яхты</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt9" id="opt9" class="form-control">
									<option value="Местонахождение">Местонахождение</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group email">
								<input type="text" class="form-control" id="email" name="email" placeholder="Введите e-mail">
							</div>
							<div class="form-group">
								<select name="opt10" id="opt10" class="form-control">
									<option value="Марка двигателя">Марка двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt11" id="opt11" class="form-control">
									<option value="Мощность двигателя">Мощность двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt12" id="opt12" class="form-control">
									<option value="Объем двигателя">Объем двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt13" id="opt13" class="form-control">
									<option value="Привод двигателя">Привод двигателя</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt14" id="opt14" class="form-control">
									<option value="Состояние">Состояние</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="form-group email">
								<input type="text" class="form-control" id="opt15" name="opt15" placeholder="Скорость (узлы/км.ч)">
							</div>
							<div class="form-group">
								<select name="opt16" id="opt16" class="form-control">
									<option value="">Пассажировместимость</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<select name="opt17" id="opt117" class="form-control">
									<option value="">Число спальных мест</option>
									<option value="2010">text1</option>
									<option value="2011">text2</option>
									<option value="2012">text3</option>
								</select>
							</div>
							<div class="form-group">
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Дополнительные параметры"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-auto">
							<button type="submit" class="btn" id="send" name="submit">Оставить заявку</button>
						</div>
						<div class="col">
							<div class="conf">
								<label class="checkbox-btn">
									<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
									<p class="politics">Даю согласие на обработку персональных данных <br>и соглашаюсь с <a href="#">политикой конфиденциальности</a></p>
								</label>
							</div>	
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>
</section>
