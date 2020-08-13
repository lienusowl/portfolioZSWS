<!--оставить заявку-->
<div class="modal modal-feedback fade" id="call" tabindex="-1" role="dialog">
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3 class="mb-0">Оставить заявку</h3>
			<p class="text-center">И мы сами вам перезвоним!</p>
			<form class="form-horizontal ajax-form" id="form-call">
				<input type="hidden" name="tid" value="Оставить заявку">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
				</div>
				<button type="submit" class="btn send" id="send" name="submit">Заказать звонок</button>
			</form>
		</div>
	</div>
</div>
<div class="modal modal-feedback fade" id="video-popup" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<iframe width="100%" height="600" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
		</div>
	</div>
</div>
<div class="modal modal-feedback fade" id="anketa" tabindex="-1" role="dialog">
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3>Анкета для беременных</h3>
			<form class="form-horizontal ajax-form" id="form-anketa">
				<input type="hidden" name="tid" value="Анкета для беременных">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" class="form-control" id="inpt1" placeholder="Фамилия Имя Отчество" name="inpt1">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group age">
								<select name="age" id="age" class="form-control">
									<option value="Возраст" selected="selected">Возраст</option>
									<option value="18 – 25">18 – 25</option>
									<option value="26 – 30">26 – 30</option>
									<option value="31 – 35">31 – 35</option>
									<option value="36 – 40">36 – 40</option>
									<option value="41 – 45">41 – 45</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="e-mail" name="email">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="instagram2" placeholder="Instagram" name="instagram">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group area">
								<select name="area" id="area" class="form-control">
									<option value="Район проживания" selected="selected">Район проживания</option>
									<option value="адлерский">адлерский</option>
									<option value="центральный">центральный</option>
									<option value="хостинский">хостинский</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group activity">
								<select name="activity" id="activity" class="form-control">
									<option value="Сфера деятельности" selected="selected">Сфера деятельности</option>
									<option value="офис">офис</option>
									<option value="обслуживание">обслуживание</option>
									<option value="производство">производство</option>
									<option value="не работаю">не работаю</option>
									<option value="прочее">прочее</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="doctor" placeholder="Ваш врач" name="doctor">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group pregnancies">
								<select name="pregnancies" id="pregnancies" class="form-control">
									<option value="Количество беременностей" selected="selected">Количество беременностей</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5 и более ">5 и более </option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group birth">
								<select name="birth" id="birth" class="form-control">
									<option value="Из них родов" selected="selected">Из них родов</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5 и более ">5 и более </option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group term">
								<select name="term" id="term" class="form-control">
									<option value="Срок беременности" selected="selected">Срок беременности</option>
									<option value="11 – 14 недель">11 – 14 недель</option>
									<option value="15 – 20 недель">15 – 20 недель</option>
									<option value="21 – 25 недель">21 – 25 недель</option>
									<option value="26 – 31 неделя">26 – 31 неделя</option>
									<option value="32 – 35 недель">32 – 35 недель</option>
									<option value="36 – 40 недель">36 – 40 недель</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" id="date" placeholder="Дата родов" name="date">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group height">
								<select name="height" id="height" class="form-control">
									<option value="Рост" selected="selected">Рост</option>
									<option value="145-150">145-150</option>
									<option value="150-155">150-155</option>
									<option value="160-165">160-165</option>
									<option value="170-175">170-175</option>
									<option value="180-185">180-185</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="form-group weight">
								<select name="weight" id="weight" class="form-control">
									<option value="Вес" selected="selected">Вес</option>
									<option value="45-50 кг">45-50 кг</option>
									<option value="50-55 кг">50-55 кг</option>
									<option value="60-65 кг">60-65 кг</option>
									<option value="70-75 кг">70-75 кг</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Диагноз"></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="form-group complaints">
								<select name="complaints" id="complaints" class="form-control">
									<option value="Жалобы" selected="selected">Жалобы</option>
									<option value="отёки">отёки</option>
									<option value="боль в спине">боль в спине</option>
									<option value="анемия">анемия</option>
									<option value="варикоз">варикоз</option>
									<option value="изжога">изжога</option>
									<option value="судороги">судороги</option>
									<option value="тонус">тонус</option>
									<option value="вес">вес</option>
									<option value="прочее ">прочее</option>
								</select>
							</div>
							<div class="form-group">
								<div class="form-group where">
									<select name="where" id="where" class="form-control">
										<option value="Откуда узнали о нашем центре" selected="selected">Откуда узнали о нашем центре</option>
										<option value="реклама в обменной карте">реклама в обменной карте</option>
										<option value="рекомендации врача">рекомендации врача</option>
										<option value="Instagram">Instagram</option>
										<option value="интернет">интернет</option>
										<option value="блоги">блоги</option>
										<option value="рекомендации друзей / знакомых">рекомендации друзей / знакомых</option>
										<option value="прочее">прочее</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn send" id="send" name="submit" width="230">Отправить</button>
			</form>
		</div>
	</div>
</div>
<!--1-->
<div class="modal modal1 fade" id="s1" tabindex="-2" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/1m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3>Экспресс – курс</h3>
					<p>Экспресс-курс создан для беременных женщин, не успевших посетить основной лекционный курс, а срок беременности уже большой. В экспресс – курс входит всё самое необходимое для подготовки к родам и уходу за новорожденным.</p>
					<h3>Список лекций:</h3>
					<p>1.	Первая встреча матери и ребенка. <br>
						2.	«Мягкие роды». Что взять в роддом. <br>
						Предвестники родов. Когда ехать в роддом. <br>
						3.	Грудное вскармливание. <br>
						4.	«Мягкие роды» Разновидности дыхания. <br>
						Страх. Напряжение. Боль. <br>
						5.	Уход за новорожденным в роддоме. <br>
						6.	«Мягкие роды». Периоды родов. Законы
						родов. Особенности течения. Работа с болью. <br>
						7.	Уход за новорожденным дома.</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Экспресс – курс';
				document.getElementById('tid_s').value='Экспресс – курс';
			">Записаться</a>
		</div>
	</div>
</div>
<!--2-->
<div class="modal modal1 fade" id="s2" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/2m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Аквааэробика</h3>
					<p>Заниматься аквааэробикой можно с 16 недели беременности. Занятия проходят в воде температурой 28 градусов, включают в себя аэробные силовые упражнения на все группы мышц, упражнения направленные на формирование правильной осанки, дыхательные упражнения. Занятия улучшают обмен веществ, снимают отёки, боли в спине и суставах, стабилизируют вес, способствуют профилактике варикозного расширения вен.</p>
					<h3>Аквагимнастика</h3>
					<p>Проходит в детском бассейне на ул. Виноградная. Заниматься аквагимнастикой можно начинать с 12-13 недели беременности. Занятия проходят в теплой воде температурой 31 - 32 градуса, включают в себя упражнения с умеренной нагрузкой на все группы мышц в спокойном темпе, упражнения на растяжку и расслабление.</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Аквааэробика';
				document.getElementById('tid_s').value='Аквааэробика';
			">Записаться</a>
		</div>
	</div>
</div>
<!--3-->
<div class="modal modal1 fade" id="s3" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/3m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Фитнес для беременных</h3>
					<ul>
						<li><b>Гимнастика для беременных.</b> Начинать занятия можно с 8-9 недели. Гимнастика для беременных включает в себя: дыхательные упражнения, элементы йоги и пилатеса, упражнения на фитболе, силовые упражнения, элементы ЛФК, стретчинг (растяжка), релаксирующие упражнения.</li>
						<li><b>Йога на фитболе «Здоровая спина».</b> С помощью этойудивительной программы улучшается общее самочувствие, подвижность суставов, разрабатывается гибкость и пластика, проходят боли в спине. Занятия направленны на формирование красивой осанки, укрепление дыхательной мускулатуры и основных мышц спины. Мы не просто делаем упражнения, укрепляющие мышечный корсет, а мягко корректируем осанку.</li>
					</ul>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Фитнес для беременных';
				document.getElementById('tid_s').value='Фитнес для беременных';
			">Записаться</a>
		</div>
	</div>
</div>
<!--4-->
<div class="modal modal1 fade" id="s4" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/4m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Мягкие роды</h3>
					<p>Рекомендовано проходить курс в 30-32 недели беременности. Занятия проходят в режиме информационно-практического тренинга. Квалифицированные практикующие специалисты познакомят вас с основной полезной информацией: дыхание при родах, расслабление, работа с болью, грудное вскармливание, уход за новорожденным, школа отцовства, а так же лекции по вопросам детской неврологии и психологии. На лекциях просматриваются обучающие фильмы. На практических занятиях отрабатываются до автоматизма дыхание и расслабление при родах. Выдаются рабочие тетради для записей. </p>
					<h3>Список лекций:</h3>
					<p>
						1.	«Мягкие роды». Что взять в роддом. Предвестники родов. Когда ехать в роддом.<br>
						2.	Первая встреча матери и ребенка<br>
						3.	«Мягкие роды» Разновидности дыхания. Страх. Напряжение. Боль.<br>
						4.	Грудное вскармливание. Часть 1<br>
						5.	Послеродовая психологическая адаптация матери и ребенка.<br>
						6.	«Мягкие роды». Периоды родов. Законы родов. Особенности течения. Работа с болью.<br>
						7.	Грудное вскармливание. Часть 2.<br>
						8.	Уход за новорожденным в роддоме.<br>
						9.	Рефлексы и актуальные вопросы неврологии.<br>
						10.	 Позиция в родах. Просмотр кинофильма. Работа с болью. Тренировка дыхания. <br>
						11.	Уход за новорожденным дома<br>
						12.	Первая медицинская помощь ребенку<br>
						13.	Школа отцовства. Как встретить маму из роддома. Как пеленать, купать малыша. Питание
						мамы после родов. Встреча с роженицами. Чаепитие в группе.<br>
						14.	 Введение прикорма. Первый год жизни.<br>
						15.	Отклонения от нормального течения родовой деятельности.<br>
						16.	 Гимнастика и плавание для малыша дома.
					</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Мягкие роды';
				document.getElementById('tid_s').value='Мягкие роды';
			">Записаться</a>
		</div>
	</div>
</div>
<!--5-->
<div class="modal modal1 fade" id="s5" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/5m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Школа отцовства</h3>
					<p>В Школе Отцовства будущие папочки не только научатся пеленать, купать, одевать малыша, играть с ним, но и активно подготовятся к достойной встрече мамы и малыша!</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Школа отцовства';
				document.getElementById('tid_s').value='Школа отцовства';
			">Записаться</a>
		</div>
	</div>
</div>
<!--6-->
<div class="modal modal1 fade" id="s6" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/6m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Баня для беременных</h3>
					<p>Баня способствует профилактике варикозного расширения вен, уменьшению боли в суставах и связках, снижениюотёков и чрезмерного мышечного напряжения. Баня положительно влияетна нервную систему, улучшает сон и общее самочувствие.</p>
					<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
						document.getElementById('modal_title').innerHTML='Баня для беременных';
						document.getElementById('tid_s').value='Баня для беременных';
					">Записаться</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--7-->
<div class="modal modal1 fade" id="s7" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3 class="mb-10">Массаж для беременных</h3>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/7m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Массаж для беременных</h3>
					<p>Наш центр предоставляет как общий массаж, так и массаж по зонам. Массаж рекомендован на любом сроке беременности. Массаж для беременных способствует снижению отеков, профилактике растяжек на коже, снимает боль и усталость в спине, расслабляет, успокаивает нервную систему.</p>
					<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
						document.getElementById('modal_title').innerHTML='Массаж для беременных';
						document.getElementById('tid_s').value='Массаж для беременных';
					">Записаться</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--8-->
<div class="modal modal1 fade" id="s8" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/8m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Конкурс <br>«Я - Супер мама»</h3>
					<p>«Я – Супер Мама» - ежегодный конкурс среди будущих мам, посвященный дню матери. В конкурсную программу входят: презентация, танец, дефиле в вечерних платьях, навыки по уходу за новорожденным, конкурсы для пап, викторины и многое другое.</p>
					<p>Приглашаем побороться за звание «Я – Супер Мама» в конкурсе, который пройдет 26 ноября 2017 г. Ждём всех беременных сроком 28 – 32 недели (на момент конкурса)! Мы гарантируем море незабываемых эмоций и множество сюрпризов от партнеров конкурса!</p>
					<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
						document.getElementById('modal_title').innerHTML='Конкурс «Я - Супер мама»';
						document.getElementById('tid_s').value='Конкурс «Я - Супер мама»';
					">Записаться</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--9-->
<div class="modal modal1 fade" id="s9" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/9m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Бесплатная консультация</h3>
					<p>На бесплатной консультации специалист даст рекомендации по программам центра согласно течению беременности. После этой встречи вы перестанете сомневаться в выборе программы и уверенно приступите к занятиям.</p>
					<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
						document.getElementById('modal_title').innerHTML='Бесплатная консультация';
						document.getElementById('tid_s').value='Бесплатная консультация';
					">Записаться</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--10-->
<div class="modal modal1 fade" id="s10" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/10m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Восстановление после родов</h3>
					<h4>Восстанавливающая послеродовая гимнастика</h4>
					<p>Послеродовая гимнастика поможет вам быстрее прийти в форму и предотвратит развитие патологических последствий. Послеродовая гимнастика помогает вернуть телу стройность, укрепить мышцы живота, промежности, нормализовать функции желудочно-кишечного тракта и мочевого пузыря. Регулярное выполнение упражнений оказывает благотворное влияние на состояние позвоночника, помогает укрепить мышцы спины, улучшить осанку, препятствует появлению болевых ощущений в области поясницы, повышает общий тонус организма, положительно влияет на качество сна, наполняет организм женщины энергией и бодростью.</p>
				</div>
			</div>
			<h4>Фитнес «Мама и Малыш»</h4>
			<p>Программа групповых занятий «Мама и Малыш» создана для мам, которые хотят быстрее прийти в форму после родов, но не с кем оставить малыша. Занятия построены таким образом, что мама выполняет комплекс упражнений, направленных на все группы мышц, а малыш в качестве дополнительной нагрузки помогает маме быстрее прийти в форму.</p>
			<h4>Послеродовая аквагимнастика</h4>
			<p>К аквагимастике рекомендуется приступать через 1-2 месяца после родов. Занятия направлены на укрепление всех групп мышц, растяжку и расслабление. Занятия проходят в спокойном темпе, с умеренной нагрузкой, в теплой воде, с последующим посещением сауны. Программа позволяет за короткие сроки прийти в форму после родов.</p>
			<h4>Массаж для мам</h4>
			<p>Наш центр предоставляет как расслабляющий оздоровительный массаж, так и антицеллюлитный, что актуально для женщины после родов. Послеродовыймассаж способствует улучшению физической формы, восстановлению эластичности кожи,снижению отеков, профилактике растяжек на коже, снимает боль и усталость в спине, расслабляет, успокаивает нервную систему.</p>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Восстановление после родов';
				document.getElementById('tid_s').value='Восстановление после родов';
			">Записаться</a>
		</div>
	</div>
</div>
<!--11-->
<div class="modal modal1 fade" id="s11" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/11m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Дневник будущей мамы</h3>
					<p>Дневник будущей мамы создан для записи самых счастливых и запоминающихся моментов беременности. С помощью него Вы сможете избежать трудности, предупредить осложнения и проявления беременности.</p>
					<p>Практические рекомендации, данные в дневнике, помогут Вам оставаться активной, красивой, верящей в себя женщиной!</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Дневник будущей мамы';
				document.getElementById('tid_s').value='Дневник будущей мамы';
			">Записаться</a>
		</div>
	</div>
</div>
<!--12-->
<div class="modal modal1 fade" id="s12" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/12m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Индивидуальная консультация по грудному вскармливанию и уходу за ребенком</h3>
					<p>Квалифицированный специалист познакомит вас с техникой правильного прикладывания и положения при кормлении ребенка, расскажет об основных проблемах и правилах вскармливания. Вы получите полезную информацию о правильном питании кормящей мамы, сцеживании молока, искусственном вскармливании.</p>
					<p>Специалист поделится с вами основными правилами по уходу за новорожденным, научит правильному пеленанию, подмыванию, и ношению ребенка, расскажет о первых прививках, обработке пуповины, а так же поможет с организацией питания и сна ребенка.</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Индивидуальная консультация';
				document.getElementById('tid_s').value='Индивидуальная консультация';
			">Записаться</a>
		</div>
	</div>
</div>
<!--13-->
<div class="modal modal1 fade" id="s13" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/13m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Сопутствующие товары для будущих мам</h3>
					<p>Мы с радостью поможем вам подобрать бандаж, подушку для кормления, собрать сумку в роддом (включая сорочки, тапочки, средства гигиены и т.д.)</p>
					<p>У нас вы найдете самую полезную продукцию для мам! В продаже есть плавательные трусики для грудничков, детские круги и шапочки для плавания, фитболы для беременных.</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Сопутствующие товары для будущих мам';
				document.getElementById('tid_s').value='Сопутствующие товары для будущих мам';
			">Записаться</a>
		</div>
	</div>
</div>
<!--14-->
<div class="modal modal1 fade" id="s14" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/14m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Грудничковое плавание</h3>
					<p>Плавание необходимо для улучшения здоровья и защиты малыша от заболеваний. Заниматься плаванием можно начинать с 2-3 недель, когда заживет пупочная рана. Наш центр предлагает спецпрограмму по грудничковому плаванию, которая включает в себя легкий разминочный массаж, динамическую гимнастику, упражнения, направленные на развитие навыков раннего плавания. Все упражнения подбираются опытными инструкторами по плаванию индивидуально по возрасту, относительно периода физического и нервно-психического развития ребенка и степени его адаптации в воде.</p>
				</div>
			</div>
			<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
				document.getElementById('modal_title').innerHTML='Грудничковое плавание';
				document.getElementById('tid_s').value='Грудничковое плавание';
			">Записаться</a>
		</div>
	</div>
</div>
<!--15-->
<div class="modal modal1 fade" id="s15" tabindex="-1" role="dialog">
	<div class="modal-dialog big"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<div class="row">
				<div class="col-sm-6 left">
					<div class="popup-img">
						<img src="img/services/popup/15m.jpg" alt="">
					</div>
					<div class="popup-video">
						<iframe width="100%" height="265" src="https://www.youtube.com/embed/djV11Xbc914" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6 right">
					<h3 class="mb-10">Детский массаж</h3>
					<p>Наш центр предоставляет лечебный и точечный массаж, общеукрепляющий и сегментарный, а также многие другие виды, которые необходимы грудничкам. Массаж в самом раннем возрасте стимулирует развитие детской нервной системы, а также памяти малыша и его мозга. Лечебный массаж позволяет напрочь избавиться от многих заболеваний. Например, мышечная кривошея, которой страдает большое количество грудничков, поддается лечению с помощью массажа. Также массаж показан недоношенным детям, масса тела которых не дотягивает до 2,5 кг. Врожденная дисплазия тазобедренного сустава и врожденная гидроцефалия, гипотонус и гипертонус – это только малая часть заболеваний, которые поддаются лечению лечебным массажем. Так же, благодаря массажу, координация движения ребенка заметно улучшается и повышается его уверенность в себе.</p>
					<a href="#" data-toggle="modal" data-target="#call-s" class="btn send close-modal" onclick="
						document.getElementById('modal_title').innerHTML='Детский массаж';
						document.getElementById('tid_s').value='Детский массаж';
					">Записаться</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--заявка для курса-->
<div class="modal modal-feedback fade" id="call-s" tabindex="-1" role="dialog">
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3 id="modal_title"></h3>
			<form class="form-horizontal ajax-form" id="form-call-s">
				<input type="hidden" name="tid_s" id="tid_s" value="">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
				</div>
				<button type="submit" class="btn send" id="send" name="submit">Записаться на курс</button>
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
			<br>
		</div>
	</div>
</div>