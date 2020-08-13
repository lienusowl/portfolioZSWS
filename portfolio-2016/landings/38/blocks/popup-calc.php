<div class="modal fade" id="calc" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
				<h4 class="modal-title" id="refModalLabel">Узнать стоимость</h4>
			</div> 
			<div class="modal-body"> 
				<form action="order.php" method="post">
					<input type="hidden" name="tid" value="Расчитать стоимость">
					<div class="form-group for-name">
                    	<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
                    </div>
					<div class="tab-content calc-slider">
						<div role="tabpanel" class="tab-pane active" id="c-tab1">
							<a href="#c-tab2" role="tab" data-toggle="tab" class="calc-prev disabled"><i class="fa fa-angle-left"></i></a>
							<p class="num-step">1 шаг из 3</p>
							<p class="big">Выберите тип постройки:</p>
							<div class="step1-box col-sm-6 col-xs-12">
								<label class="step1-label">
									<input name="calc_type" type="radio" value="Склад, ангар, хранилище" checked>
									<div>
										<img src="img/popup-calc/1.jpg" alt="">
										<p>Склад, ангар, хранилище</p>
									</div>
								</label>
							</div>
							<div class="step1-box col-sm-6 col-xs-12">
								<label class="step1-label">
									<input name="calc_type" type="radio" value="СТО, автоцентр, гараж">
									<div>
										<img src="img/popup-calc/2.jpg" alt="">
										<p>СТО, автоцентр, гараж</p>
									</div>
								</label>
							</div>
							<div class="step1-box col-sm-6 col-xs-12">
								<label class="step1-label">
									<input name="calc_type" type="radio" value="Магазин, торговый центр">
									<div>
										<img src="img/popup-calc/3.jpg" alt="">
										<p>Магазин, торговый центр</p>
									</div>
								</label>
							</div>
							<div class="step1-box col-sm-6 col-xs-12">
								<label class="step1-label">
									<input name="calc_type" type="radio" value="Цех, завод, производ. здание">
									<div>
										<img src="img/popup-calc/4.jpg" alt="">
										<p>Цех, завод, производ. здание</p>
									</div>
								</label>
							</div>
							<div class="step1-box col-sm-6 col-xs-12">
								<label class="step1-label">
									<input name="calc_type" type="radio" value="Вертолетный/самолетный ангар">
									<div>
										<img src="img/popup-calc/5.jpg" alt="">
										<p>Вертолетный / самолетный ангар</p>
									</div>
								</label>
							</div>
							<div class="step1-box col-sm-6 col-xs-12">
								<label class="step1-label">
									<input name="calc_type" type="radio" value="Здание сельхоз. назначения">
									<div>
										<img src="img/popup-calc/6.jpg" alt="">
										<p>Здание сельхоз. назначения</p>
									</div>
								</label>
							</div>
							<div class="step1-box col-sm-6 col-xs-12">
								<label class="step1-label">
									<input name="calc_type" type="radio"value="Другое здание">
									<div>
										<img src="img/popup-calc/7.jpg" alt="">
										<p>Другое здание</p>
									</div>
								</label>
							</div>
							<div class="clear"></div>
							<a href="#c-tab2" role="tab" data-toggle="tab" class="calc-next">Следующий шаг <i class="fa fa-angle-right"></i></a>
						</div>
						<div role="tabpanel" class="tab-pane" id="c-tab2">
							<a href="#c-tab1" role="tab" data-toggle="tab" class="calc-prev"><i class="fa fa-angle-left"></i></a>
							<p class="num-step">2 шаг из 3</p>
							<div class="step2-box">
								<p class="big">Введите площадь здания</p>
								<input type="text" class="form-control" name="calc_sq" placeholder="кв.м">
							</div>
							<div class="step2-box">
								<p class="big">Утепленное или холодное здание?</p>
								<div class="step2-box-inn col-sm-6 col-xs-6">
									<label class="step2-label">
										<input name="calc_profile" type="radio" value="Теплый контур"/>
										<div></div>
										<p>Теплый контур</p>
									</label>
								</div>
								<div class="step2-box-inn col-sm-6 col-xs-6">
									<label class="step2-label">
										<input name="calc_profile" type="radio" value="Холодный контур"/>
										<div></div>
										<p>Холодный контур</p>
									</label>
								</div>
							</div>
							<a href="#c-tab3" role="tab" data-toggle="tab" class="calc-next">Следующий шаг <i class="fa fa-angle-right"></i></a>
						</div>
						<div role="tabpanel" class="tab-pane" id="c-tab3">
							<a href="#c-tab2" role="tab" data-toggle="tab" class="calc-prev"><i class="fa fa-angle-left"></i></a>
							<p class="num-step">3 шаг из 3</p>
							<p class="big">Готово! Теперь введите свой телефон и получить стоимость Вашего объекта. Наш менеджер свяжется с Вами в течении 5 минут:</p>
							<div class="form-group">
								<input type="text" class="form-control" name="calc_name" placeholder="Ваше имя" required>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" name="calc_phone" placeholder="Ваш номер телефона" required>
							</div>
							<div class="form-group">
        						<textarea cols="30" rows="6" name="message" id="message" class="form-control" placeholder="Дополнительная информация"></textarea>
        					</div>
							<input class="btn btn-default" id="calc-send" type="submit" name="calc_submit2" value="Расчитать">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>