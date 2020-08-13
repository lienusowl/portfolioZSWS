<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Оставьте свой номер телефона <br>и мы свяжемся с Вами в ближайшее время </h3>
			<form class="form-horizontal text-center" action="order.php" method="POST" id="form-call">
				<input type="hidden" name="tid" value="Заявка с сайта">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="row align-middle">
					<div class="col-md-12">
						<div class="form-group phone">
							<input type="tel" class="form-control" id="number" name="number" required placeholder="+7 (___) ___-____">
						</div>
					</div>
					<div class="col-md-12 text-center">
						<button type="submit" class="btn small" id="send" name="submit">Связаться!</button>
					</div>
				</div>
				<div class="conf">
					<label class="checkbox-btn">
						<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
						<p>Согласен с политикой конфиденциальности</p>
					</label>
				</div>		
			</form>
		</div>
	</div>
</div>

<!--Рассчитать стоимость-->
<div class="modal fade modal-feedback" id="rasch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<form class="form-horizontal text-center" action="order.php" method="POST" id="form-rasch">
				<input type="hidden" name="tid" value="Рассчитать стоимость">
				<div class="form-group for-name">
					<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-item" id="tab-content4">
						<a class="tab-label btn-back" href="#tab-content3"></a>
						<h3>Введите номер своего <br>телефона и получите расчет:</h3>
						<div class="form-group phone">
							<input type="tel" class="form-control" id="number" name="number" required placeholder="+7 (___) ___-____">
						</div>
						<button type="submit" class="btn small" id="send" name="submit" onclick="validate(this.form)">Отправить</button>
						<div class="conf">
							<label class="checkbox-btn">
								<input type="checkbox" name="accept" class="accept" required checked="checked"><div></div>
								<p>Согласен с политикой конфиденциальности</p>
							</label>
						</div>	
					</div>
					<div class="tab-item" id="tab-content2">
						<h3>Укажите количетсво розеток <br>и выключателей:</h3>
						<div class="row">
							<div class="col-sm-6">
								<label class="radio-btn">
									<input name="opt2" type="radio" value="10-20 шт" checked><div></div>
									<p>10-20 шт</p>
								</label>
								<label class="radio-btn">
									<input name="opt2" type="radio" value="от 40 до 60 шт"><div></div>
									<p>от 40 до 60 шт</p>
								</label>
							</div>
							<div class="col-sm-6">
								<label class="radio-btn">
									<input name="opt2" type="radio" value="от 20 до 40 шт"><div></div>
									<p>от 20 до 40 шт</p>
								</label>
								<label class="radio-btn">
									<input name="opt2" type="radio" value="от 60 шт и Выше"><div></div>
									<p>от 60 шт и Выше</p>
								</label>
							</div>
						</div>
						<a class="tab-label btn-back" href="#tab-content1"></a>
						<a class="tab-label btn small" href="#tab-content3">Далее</a>
					</div>
					<div class="tab-item" id="tab-content3">
						<h3>Укажите приблизительную <br>площадь Вашего объекта:</h3>
						<div class="row">
							<div class="col-9">
								<div class="form-group resize">
									<input type="text" class="form-control" id="opt3" name="opt3" placeholder="2000">
								</div>
							</div>
							<div class="col-3">
								<div class="t1">кв.м</div>
							</div>
						</div>
						<a class="tab-label btn-back" href="#tab-content2"></a>
						<a class="tab-label btn small" href="#tab-content4">Далее</a>
					</div>
					<div class="tab-item" id="tab-content1">
						<h3>Укажите тип Вашего помещения:</h3>
						<label class="radio-btn">
							<input name="opt1" type="radio" value="Новое Строительство" checked><div></div>
							<p>Новое Строительство</p>
						</label>
						<label class="radio-btn">
							<input name="opt1" type="radio" value="Реконструкция"><div></div>
							<p>Реконструкция</p>
						</label>
						<a class="tab-label btn small" href="#tab-content2">Далее</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!--Информация о политике конфиденциальности-->
<div class="modal fade modal-feedback" id="politics" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<h3>Политика конфиденциальности</h3>
			Общества с ограниченной ответственностью ООО «АЛПА-ИНВЕСТ» в отношении обработки и защиты персональных данных пользователей сайта <a href="http://sitename.ru" target="_blank;">http://sitename.ru</a></p></b></center>
			<center><b><p style="text-transform:uppercase;">1. общие положения</p></b></center>
			<p>1.1. Настоящая Политика в отношении обработки и защиты персональных данных (далее – Политика) разработана в соответствии со статьей 18.1 Федерального закона от 27.07.2006 года № 152-ФЗ «О персональных данных» и является основным внутренним документом ООО «Топливный Партнер» (далее – Общество), регулирующим его деятельность в области обработки и защиты персональных данных, оператором которых является Общество.</p>
			<p>1.2. Политика разработана в целях реализации требований законодательства Российской Федерации в области обработки и защиты персональных данных и направлена на обеспечение защиты прав и свобод человека и гражданина при обработке его персональных данных Обществом, в том числе защиты прав на неприкосновенность частной жизни, личной и семейной тайн.</p>
			<p>1.3. Действие настоящей Политики распространяется на любую информацию о пользователе, полученную Обществом, как до, так и после утверждения Политики.</p>
			<p>1.4. Действие настоящей Политики распространяется на всю информацию, которую Общество может получить о пользователе, в том числе во время использования им сайта <a href="http://sitename.ru" target="_blank;">http://sitename.ru</a> (далее – Сайт).
			<p>1.5. Посещение и использование Сайта  означает безоговорочное согласие пользователя:</p>
			<ul>
				<li>на обработку его персональных данных, указанных статье 2 настоящей Политики;</li>
				<li>с условиями обработки его персональных данных, содержащимися в настоящей Политике.</li>
			</ul>
			<p>1.6. В случае несогласия с условиями обработки персональных данных Обществом, пользователь должен прекратить использование Сайта.</p>
			<p>1.7. Настоящая Политика применяется только к сайту <a href="http://sitename.ru" target="_blank;">http://sitename.ru</a> Общество не контролирует и не несет ответственности за сбор и обработку персональных данных третьими лицами, на сайты которых пользователь может перейти по ссылкам, доступным на сайте <a href="http://sitename.ru" target="_blank;">http://sitename.ru</a>.</p>
			<p>1.8. Общество не осуществляет проверку достоверности персональных данных, предоставленных пользователем.</p>
			<center><b><p style="text-transform:uppercase;">2. СОСТАВ ПОЛУЧАЕМЫХ И ОБРАБАТЫВАЕМЫХ ПЕРСОНАЛЬНЫХ ДАННЫХ</p></b></center>
			<p>2.1. Данные о пользователе, получаемые и обрабатываемые в рамках настоящей Политики поступают Обществу следующими способами:</p>
			<p>2.1.1. Предоставляются самим пользователем путём:</p>
			<ul>
				<li>заполнения регистрационной формы на Сайте включают в себя следующую информацию: номер контактного телефона;</li>
				<li>заполнения формы обратного звонка на Сайте и включают в себя следующую информацию: номер контактного телефона;</li>
				<li>заполнения формы для получения прайс-листа на Сайте и включают в себя следующую информацию: адрес электронной почты (email), номер телефона;</li>
				<li>связи с Обществом посредством направления письменной корреспонденции на почтовый адрес Общества, по номерам телефонов, адресам электронной почты, указанным на Сайте и любыми другими способами и могут включать в себя следующую информацию: Ф.И.О., почтовый адрес, место проживания, контактный телефон, адрес электронной почты (e-mail) и иную информацию на усмотрение пользователя.</li>
			</ul>
			<p>2.1.2. Автоматически передаются Обществу в процессе посещения и использования Сайта с помощью установленного на устройстве пользователя программного обеспечения, в том числе: IP-адрес, информация из cookie, информация о браузере пользователя (или иной программе, с помощью которой осуществляется доступ к сайту), время доступа, адрес запрашиваемой страницы.</p>
			<center><b><p style="text-transform:uppercase;">3. ЦЕЛИ СБОРА И ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</p></b></center>
			<p>3.1. Сбор и обработка персональных данных пользователя Обществом осуществляется в следующих целях:</p>
			<p>3.1.1. Заключение договоров с пользователем от имени Общества и (или) его партнеров.</p>
			<p>3.1.2. Связь с пользователем в случае необходимости, в том числе направление уведомлений, запросов и информации, связанных с использованием Сайта, оказанием услуг Обществом и (или) партнерами Общества, а также обработка запросов и заявок от пользователя;</p>
			<p>3.1.3. Предоставление пользователю эффективной клиентской и технической поддержки при возникновении проблем, связанных с использованием Сайта, оказанием услуг Обществом и (или) партнерами Общества;
			Оператором используются сервис <a href="http://land.lptracker.ru">http://land.lptracker.ru</a>, предназначенный для автоматизации стратегий взаимодействия с заказчиками (клиентами), в частности для повышения уровня продаж, оптимизации маркетинга и улучшения обслуживания клиентов путём сохранения информации о клиентах и истории взаимоотношений с ними, установления и улучшения бизнес-процессов и последующего анализа результатов (CRM-система).</p>
			<p>3.1.4. Повышение качества Сайта, удобства его использования;</p>
			<p>3.1.5. Предоставление пользователю, с его согласия, персональных услуг, специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени Общества и (или) от имени его партнеров;</p>
			<p>3.1.6. Осуществления рекламной деятельности с согласия пользователя;</p>
			<p>3.1.7. Предоставления доступа пользователю на сайты или сервисы партнеров Общества с целью получения продуктов, обновлений и услуг.</p>
			<p>3.1.8. Проведение статистических и иных исследований на основе обезличенных данных.</p>
			<center><b><p style="text-transform:uppercase;">4. ПРЕДОСТАВЛЕНИЕ ДОСТУПА К ПЕРСОНАЛЬНЫМ ДАННЫМ</p></b></center>
			<p>4.1.	Общество обеспечивает сохранность персональных данных пользователей.</p>
			<p>4.2.	Обрабатываемые персональные данные уничтожаются либо обезличиваются Обществом по достижении целей обработки или в случае утраты необходимости в достижении этих целей, а так же при отзыве Пользователем согласия на обработку персональных данных.</p>
			<p>4.3.	Пользователь вправе в любой момент отозвать согласие на обработку Обществом персональных данных путём направления письменного уведомления на адрес: 624821, Свердловская обл., Сухоложский р-н, с. Знаменское, ул. Пушкина, д. 35, офис 20, с пометкой «отзыв согласия на обработку персональных данных». Отзыв пользователем согласия на обработку персональных данных влечёт за собой уничтожение записей, содержащих персональные данные, в системах обработки персональных данных Общества.</p>
			<p>4.4.	В отношении персональных данных пользователя сохраняется их конфиденциальность, кроме случаев, установленных в п. 4.5. настоящей Политики.</p>
			<p>4.5.	Общество вправе передать персональные данные пользователя третьим лицам в следующих случаях:</p>
			<p>4.5.1. Пользователь явным образом выразил свое согласие на передачу своих персональных данных;</p>
			<p>4.5.2. Передача персональных данных необходима для оказания определенной услуги пользователю Обществом или его партнерами. При этом обеспечивается конфиденциальность персональной информации, а пользователь уведомляется о такой передаче;</p>
			<p>4.5.3. Передача персональных данных производится в CRM-систему, указанную в п. 3.2.1. настоящей Политики;</p>
			<p>4.5.4. Передача предусмотрена российским или иным применимым законодательством в рамках установленной процедуры (по решению суда, запросу правоохранительных органов и т.д.);</p>
			<p>4.5.5. Такая передача происходит в рамках продажи или иной передачи бизнеса (полностью или в части), при этом к приобретателю переходят все обязательства по соблюдению условий настоящей Политики применительно к полученной им персональной информации;</p>
			<p>4.5.6. В целях обеспечения возможности защиты прав и законных интересов Общества.</p>
			<p>4.6. При утрате или разглашении персональных данных Общество информирует пользователя об утрате или разглашении персональных данных.</p>
			<center><b><p style="text-transform:uppercase;">5. ЗАЩИТА ПЕРСОНАЛЬНЫХ ДАННЫХ ПОЛЬЗОВАТЕЛЕЙ</p></b></center>
			<p>5.1.	Общество гарантирует, что уровень защищенности персональных данных пользователей соответствует требованиям, установленным в Постановлении Правительства Российской Федерации от 1 ноября 2012 г. № 1119 «Об утверждении требований к защите персональных данных при их обработке в информационных системах персональных данных».</p>
			<p>5.2.	Общество принимает необходимые организационные и технические меры для защиты персональных данных пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих лиц в соответствии с требованиями Приказа ФСТЭК России от 18.02.2013 № 21 «Об утверждении Состава и содержания организационных и технических мер по обеспечению безопасности персональных данных при их обработке в информационных системах персональных данных».</p>
			<center><b><p style="text-transform:uppercase;">6. ответственность</p></b></center>
			<p>6.1. В случае неисполнения своих обязательств, Общество несёт ответственность за убытки, понесённые пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством Российской Федерации, за исключением случаев, предусмотренных 6.2. настоящей Политики.</p>
			<p>6.2. В случае утраты или разглашения персональных данных пользователя Общество не несёт ответственность, если данная информация стала публичным достоянием до её утраты или разглашения, либо была разглашена самим пользователем или с согласия пользователя.</p>
			<center><b><p style="text-transform:uppercase;">7. ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ</p></b></center>
			<p>7.1.	Общество вправе вносить изменения и дополнения в настоящую Политику. Новая редакция Политики действует с момента ее размещения на сайте <a href="http://sitename.ru" target="_blank;">http://sitename.ru</a>, ели иное не предусмотрено в новой редакции Политики.</p>
			<p>7.2.	К отношениям в области обработки и защиты персональных данных, не урегулированным в настоящей Политике, применяется действующее законодательство Российской Федерации.</p>
			<p>7.3.	Все предложения или вопросы, связанные с обработкой и защитой персональных данных Обществом следует направлять по адресу электронной почты <a href="mail@mail.ru" target="_blank;">mail@mail.ru</a>.</p>
			<p>7.4.	Данные об Операторе персональных данных: <br>
			Юр Лицо ООО «АЛПА-ИНВЕСТ» <br>
			ИНН: 6633021859<br>
			КПП: 663301001<br>
			ОГРН: 1146633000370<br>
			Юридический адрес: 117342 r.Москва, ул.Бутлерова д. 26, к1 <br>
			Контактный телефон: +7(495) 152-57-16.</p>
		</div>
	</div>
</div>

<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			<button type="button" class="close" data-dismiss="modal"></button>
			<h3>Спасибо за Вашу заявку!</h3>
			<p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
			<br>
			<img src="assets/images/logo.png" alt="" class="m-auto">
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
			<img src="assets/images/logo.png" alt="" class="m-auto">
		</div>
	</div>
</div>