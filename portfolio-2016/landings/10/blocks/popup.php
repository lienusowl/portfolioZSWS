<!--Обратный звонок-->
<div class="modal fade" id="refModal" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog  popup"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Заказать обратный звонок</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Обратный звонок">
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="name" placeholder="Ваше имя" name="name" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="number" placeholder="Ваш телефон" name="number" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-6">
						<input class="button2 or1" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
					
					
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>
<!--Заявка в техподдержку-->
<div class="modal fade" id="teh" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog  popup"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Заявка в техподдержку</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Заявка в техподдержку">
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="name" placeholder="Ваше имя" name="name" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="number" placeholder="Ваш телефон" name="number" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="email" placeholder="Ваш email" name="email" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <textarea class="form-control" rows="3" id="other" placeholder="Дополнительная информация" name="other"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-6">
						<input class="button2 or1" id="send" type="submit2" name="submit" value="Заказать" id="send">
					</div>
					
					
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>
<!--Оформить карточку клиента-->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog  popup"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Регистрация нового клиента</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Регистрация нового клиента">
				  <div class="form-group">
					<div class="col-sm-12">
						<!--<label for="name">Ваше имя</label>-->
					  <input type="text" class="form-control" id="name" placeholder="Ваше имя" name="name" required="">
					</div>
				  </div>
				   <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="email" placeholder="Ваш email" name="email" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="number" placeholder="Ваш телефон" name="number" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="obl" placeholder="Область, край, округ, республика" name="obl">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="city" placeholder="Населённый пункт" name="city">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="prov" placeholder="Название интернет провайдера" name="prov">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="type" placeholder="Тип подключения интернета (PPPoe, PPTP, MAC-адрес, или другое)" name="type">
					</div>
				  </div>
				   <div class="form-group">
					<div class="col-sm-12">
					  <textarea class="form-control" rows="3" id="akk" placeholder="Учётные данные для подключения к интернету" name="akk"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <textarea class="form-control" rows="3" id="other" placeholder="Другая значимая информация" name="other"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-6">
						<input class="button2 or1" id="send" type="submit" name="submit3" value="Регистрация" id="send">
					</div>
					
					
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>

<!--Оформить карточку клиента-->
<div class="modal fade bs-example-modal-lg" id="politica" tabindex="-2" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg popup">
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Политика конфиденциальности</h4>
			</div> 			
			<div class="modal-body"> 
				<p>Администрация сайта <b>white-net.ru</b> (далее Сайт) с уважением относится к правам посетителей Сайта. Мы безоговорочно признаем важность конфиденциальности личной информации посетителей нашего Сайта.</p>
				<p>Посещая Сайт и регистрируясь на Сайте в качестве пользователя, Вы полностью соглашаетесь с данной Политикой конфиденциальности.</p>
				<p><b>Основные положения нашей политики конфиденциальности формулируются следующим образом:</b></p>
				<p>- Мы не передаем Вашу персональную информацию третьим лицам.</p>
				<p>- Мы не передаем Вашу контактную информацию без Вашего согласия.</p>
				<p>- Вы самостоятельно определяете объем раскрываемой персональной информации.</p>
				<p><b>Собираемая информация</b></p>
				<p>Мы собираем следующую информацию:</p>
				<p>- Ваша персональная информация, которую Вы сознательно согласились раскрыть нам, став зарегистрированным пользователем Сайта</p>
				<p>- Техническая информация, автоматически собираемая программным обеспечением Сайта во время его посещения.</p>
				<p>Персональная информация, предоставляемая Вами при регистрации на сайте, проверке на достоверность не подвергается.</p>
				<p>Техническая информация. Во время посещения вами Сайта, администрации Сайта автоматически становится доступной информация из стандартных журналов регистрации сервера (server logs). Сюда включается IP-адрес Вашего компьютера (или прокси-сервера, если он используется для выхода в Интернет), имя Интернет-провайдера, имя домена, тип браузера и операционной системы, информация о сайте, с которого Вы совершили переход на Сайт, страницах Сайта, которые Вы посещаете, дате и времени этих посещений, файлах, которые Вы загружаете. Это информация анализируется нами в агрегированном (обезличенном) виде для анализа посещаемости Сайта, и используется при разработке предложений по его улучшению и развитию. Связь между Вашим IP-адресом и Вашей персональной информацией никогда не раскрывается третьим лицам, за исключением тех случаев, когда это требует законодательство.</p>
				<p>Техническую информацию о посещении Сайта (обезличенную) также собирают установленные на сайте счетчики статистики.</p>
				<p><b>Использование полученной информации</b></p>
				<p>Информация, предоставляемая Вами при подписке, а также техническая информация используется исключительно для улучшения работы сайта. Вся контактная информация, которую Вы нам предоставляете, раскрывается только с Вашего разрешения. Адреса электронной почты никогда не публикуются на Сайте и используются нами только для связи с Вами.</p>
				<p><b>Предоставление информации третьим лицам</b></p>
				<p>Мы никогда не предоставляем Вашу личную информацию третьим лицам, кроме случаев, когда это прямо может требовать законодательство (например, по запросу суда).</p>
				<p><b>Использование cookies</b></p>
				<p>На Сайте применяется технология идентификации пользователей, основанная на использовании файлов cookies. Сookies – это небольшие текстовые файлы, сохраняемые на Вашем компьютере посредством веб-браузера.</p>
				<p>При использовании Пользователем Сайта на компьютер, используемый им для доступа, могут быть записаны файлы cookies, которые в дальнейшем будут использованы для автоматической авторизации Пользователя на Сайте, а также для сбора статистических данных, в частности о посещаемости Сайта. При этом мы никогда не сохраняем персональные данные или пароли в файлах cookies.</p>
				<p>Если Вы все же полагаете, что по тем или иным причинам использование технологии cookies для Вас неприемлемо, Вы вправе запретить сохранение файлов cookies на компьютере, используемом для доступа к Сайту, соответствующим образом настроив браузер. При этом следует иметь в виду, что все сервисы в сети Интернет, использующие данную технологию, окажутся недоступными.</p>
				<p><b>Защита данных</b></p>
				<p>Администрация Сайта осуществляет защиту информации, предоставленной пользователями, и использует ее только в соответствии с принятой Политикой конфиденциальности. На Сайте используются общепринятые методы безопасности для обеспечения защиты информации от потери, искажения и несанкционированного распространения. Безопасность реализуется программными средствами сетевой защиты, процедурами проверки доступа, применением криптографических средств защиты информации, соблюдением политики конфиденциальности.</p>
				<p>Администрация Сайта никогда не запрашивает пароль доступа к Вашему аккаунту и никогда не меняет его ни по чьему требованию, в том числе по и по Вашему. В случае необходимости, пароль Вы меняете самостоятельно, через специальную форму.</p>
				<p><b>Рекомендации по безопасности для пользователей</b></p>
				<p>Для того чтобы злоумышленники или просто случайные третьи лица не получили доступ к Вашей учетной записи, необходимо соблюдать ряд приведенных ниже рекомендаций. Помните, что все действия, совершенные на Сайте Пользователем, авторизованным под Вашей учетной записью, считаются совершенными лично Вами. Обязанность доказательства обратного лежит на Вас.</p>
				<p>Не используйте электронную почту и средства оперативной отправки сообщений типа ICQ для передачи ваших паролей, поскольку такой способ коммуникации не может обеспечить необходимую защиту передаваемых данных.Не используйте простые (к примеру, 12345) или слишком короткие пароли (короче 4 символов), а также пароли, имеющие смысловую нагрузку (к примеру, ваше имя, кличка животного или дата рождения родственника). В идеале пароль должен представлять собой не имеющее смысла сочетание букв, цифр и знаков верхнего и нижнего регистра. Никогда не сообщайте Ваш пароль третьим лицам.</p>
				<p>Если Вы подозреваете, что Ваш пароль мог стать известен другим лицам, как можно скорее смените его. Всегда завершайте сессию работы на Сайте под Вашей учетной записью, особенно если Вы работаете на компьютере, к которому имеют доступ другие лица.</p>
				<p>Никогда не соглашайтесь сохранить пароль для сайта, если веб-браузер предложит Вам сделать это, в случае если Вы работаете не на своем компьютере или компьютере с публичным доступом (например, в Интернет-кафе, компьютерном клубе и т.п.).</p>
				<p>Никогда не устанавливайте флажок «Запомнить пароль», если Вы работаете не на своем компьютере или компьютере с публичным доступом. Всегда контролируйте, кто имеет доступ к Вашему почтовому ящику. Помните, что с помощью e-mail злоумышленник может восстановить (заменить) пароль и тем самым получить доступ к Вашей учетной записи.</p>
				<p><b>Заключительные положения</b></p>
				<p>Никакие из содержащихся здесь заявлений не означают заключения договора или соглашения между Владельцем Сайта и Пользователем, предоставляющим персональную информацию. Политика конфиденциальности лишь проинформирует Вас о подходах Сайта к работе с персональными данными.</p>
				<p>Мы оставляем за собой право вносить изменения в настоящую политику конфиденциальности в любое время без предварительного уведомления.</p>
				<p>По всем возникающим вопросам Вы всегда можете обратиться к Администрации Сайта через форму</p>
			</div>
		</div>
	</div>
</div>