<!doctype html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Продажа топливных карти и талонов</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/social-likes.min.js"></script>
  <link rel="stylesheet" href="css/social-likes_flat.css">
<!--[if lt IE 9]>
  <script src="js/html5.js"></script>
<![endif]-->
<script src="//api-maps.yandex.ru/2.0.33/?load=package.full,package.geoXml&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript">
	var myMap, mapRoute;
	// Дождёмся загрузки API и готовности DOM.
	ymaps.ready(init);
	function init(){
		// Создание экземпляра карты и его привязка к контейнеру с заданным id ("map").
		myMap = new ymaps.Map('map', {
		// При инициализации карты обязательно нужно указать её центр и коэффициент масштабирования.
			center:[55.76, 37.64], // Москва
			zoom:12,
			behaviors: ['scrollZoom', 'drag']
		});
		
		var trafficControl = new ymaps.control.TrafficControl({
            // Отображаются пробки "Сейчас".
            providerKey: 'traffic#actual',
            // Начинаем сразу показывать пробки на карте.
			shown: false
		});
		// Добавим контрол на карту.
		myMap.controls
			.add('zoomControl', { left: 5, top: 5 })
			.add('typeSelector', { right: 5, top: 35 })
			.add('mapTools', { left: 35, top: 5 })
			.add(trafficControl, { right: 252, top: 5 })
			.add('searchControl', { right: 5, top: 5 });
		trafficControl.getProvider('traffic#actual').state.set('infoLayerShown', true); 
		
		function loadxml(xml, clusterer){ 
			ymaps.geoXml.load(xml).then(function (res) {
				var arr = [];
            	res.geoObjects.each(function (obj) {
            	    arr.push(obj);
           	 });
				clusterer.add(arr);
			});
		};
		var clusterer = new ymaps.Clusterer({preset: 'twirl#nightClusterIcons',margin:[20]});
		clusterer.options.set('maxZoom', 12);
			loadxml('/mapeditorial/data0.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data1.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data2.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data3.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data4.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data5.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data6.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data7.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data8.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data9.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data10.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data11.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
			loadxml('/mapeditorial/data12.xml?1406117256', clusterer);
			myMap.geoObjects.add(clusterer);
	}
	
</script></head>

<body>
	<header>
		<div class="wrapper">
			<div class="bnft">
				<div><b>>15</b>Лет <br/>на рынке</div>
				<div><b>>7000</b>АЗС и <br/>АЗК</div>
			</div>
			<a target="_blank" href="http://www.ecard-group.ru/" class="logo"></a>
			<div class="tel">
				<!--<span>+7 (499) 643-83-99</span> -->
				<span>8 (800) 700-44-79<small>бесплатный звонок</small></span>
				
			</div>
			<a href="" class="call_me">Заказать звонок</a>
		</div>
	</header>
	<div id="main-info" class="wrapper">
		<h1>Продажа топливных карт и талонов</h1>
		<span>для юридических лиц в Москве, России, Украине и Белорусии</span>
	</div>
	<section id="order_top">
		<div class="form">
			<h4>Получите</h4>
			<h5>консультацию специалиста</h5>
			<p>Заполните форму и наш специалист Вам перезвонит</p>
			<form>
				<input name="name" class="text" type="text" required="required" placeholder="Введите имя" />
				<input name="tel" class="text" type="text" required="required" placeholder="Введите телефон" />
				<input name="action" class="submit" type="submit" value="consult" onclick="yaCounter21455512.reachGoal('zakaz'); return true;" />
			</form>
		</div>
		<div class="success">
			<h4>заявка принята</h4>
			<h5>наш специалист перезвонит вам <br/>в ближайшее время</h5>
			<iframe  src="site.html"  frameborder="0" allowfullscreen="" param name="wmode" value="transparent" embed wmode="transparent" allowTransparency="true" scrolling="no"></iframe>
		</div>
		
	</section>
	<section id="economy">
		<h2>экономия до <b>50 000</b> рублей в год</h2>
		<span>Узнайте как сохранить активы и взять расходы на топливо под контроль</span>
		<iframe width="640" height="360" src="http://www.youtube.com/embed/lNxZHOG6-K0" frameborder="0" allowfullscreen></iframe>
	</section>
	<section id="problem">
		<h3>Проблемы,</h3>
		<span>с которыми сталкиваются владельцы бизнеса</span>
		<ul>
			<li class="p1">Водители сливают <br/>топливо</li>
			<li class="p2">Не эффективно <br/>используются средства</li>
			<li class="p3">Дополнительные деньги <br/>уходят государству</li>
		</ul>
		<h5>у наших клиентов их нет</h5>
	</section>
	<section id="whywe">
		<h3>Почему выгодно работать с нами?</h3>
		<ul>
			<li class="ww1">Ограничиваем хождение <br/>наличных денег</li>
			<li class="ww2">Снижаем затраты <br/>на топливо</li>
			<li class="ww3">зачет 18% НДС</li>
			<li class="ww4">индивидуальный <br/>подход в выборе <br/>тарифа</li>
			<li class="ww5">предлагаем <br/>обслуживание на <br/>удобных вам азс</li>
			<li class="ww6">своевременная доставка <br/>отчетных документов</li>
		</ul>
		<a href="" class="place_order">Оставить заявку</a>
	</section>
	<section id="onmap">
		<h3>География наших услуг</h3>
		<p><b>Более 7000 АЗС/АЗК для круглосуточной заправки вашего транспорта </b> <br/>на территории Российской Федерации, Украины и Белорусии, <br/>ведущие производители светлых нефтепродуктов (РосНефть, ГазПром, ТНК, ТАТНефть и т.д.)</p>
		<div id="map" class="map"></div>
	</section>
	<section id="service">
		<h3>Дополнительные услуги</h3>
		<ul>
			<li class="sv1">Продажа и доставка <br/>нефтепродуктов</li>
			<li class="sv2">Аренда транспорта для <br/>перевозки горюче-смазочных <br/>материалов</li>
			<li class="sv3">Установка оборудования по учету <br/>и контролю расхода топлива (FMS) <br/>на авто предприятия</li>
			<li class="sv4">Установка навигационной системы <br/>удаленного мониторинга транспортных <br/>средств с применением современных <br/>ГЛОНАСС/GPS/GPRS - технологий</li>
			<li class="sv5">Автомасла, запчасти и <br/>расходные материалы</li>
			<li class="sv6">Доступная и высокоэффективная <br/>реклама на талонах Эталон-Авто</li>
			<li class="sv7">Мойка <br/>автотранспорта</li>
			<li class="sv8">Помощь <br/>в прохождении ТО</li>
		</ul>
	</section>
	<section id="order_bottom">
		<div class="form">
			<h4>Оставьте заявку</h4>
			<h5>и узнайте о наших тарифах и акциях</h5>
			<p>Заполните форму и наш специалист Вам перезвонит</p>
			<form>
				<input name="name" class="text" type="text" required="required" placeholder="Введите имя" />
				<input name="tel" class="text" type="text" required="required" placeholder="Введите телефон" />
				<input name="action" class="submit" type="submit" value="consult" onclick="yaCounter21455512.reachGoal('zakaz'); return true;" />
			</form>
		</div>
		<div class="success">
			<h4>заявка принята</h4>
			<h5>наш специалист перезвонит вам <br/>в ближайшее время</h5>
			<iframe  src="site.html"  frameborder="0" allowfullscreen="" param name="wmode" value="transparent" embed wmode="transparent" allowTransparency="true" scrolling="no"></iframe>
		</div>
	
	</section>
	<footer class="wrapper">
		<div class="copy">© 2014 Группа компаний E-Group - топливные карты и талоны.</div>
		<div class="tel"><span>Позвонить:</span><br/>8 (800) 700-44-79</div>
		<div class="share"><span>Поделиться:</span><br/>
            <div class="social-likes">
                <div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
                <div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
                <div class="twitter" data-via="" title="Поделиться ссылкой в Твиттере"></div>
                <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе"></div>
            </div>       
        </div>
		<a target="_blank" href="http://www.ecard-group.ru/" class="site">Перейти <br/>на сайт</a>
		<div class="dev">Создано в <br/><a target="_blank" href="http://pgdv.ru/">Бюро Погодаева</a></div>
	</footer>
	<div id="modal_overlay"></div>
	<div id="modal_form">
		<div class="form">
			<a class="close"></a>
			<h4>Обратный звонок</h4>
			<h5>заполните форму ниже</h5>
			<p>и наш специалист перезвонит Вам в ближайшее время</p>
			<form>
				<input name="name" class="text" type="text" required="required" placeholder="Введите имя" />
				<input name="tel" class="text" type="text" required="required" placeholder="Введите телефон" />
				<input name="action" class="submit" type="submit" value="callme" onclick="yaCounter21455512.reachGoal('zvonok1'); return true;" />
			</form>
		</div>
		<div class="success">
			<a class="close"></a>
			<h4>заявка принята</h4>
			<h5>наш специалист перезвонит вам <br/>в ближайшее время</h5>
			<iframe  src="zvonok.html"  frameborder="0" allowfullscreen="" param name="wmode" value="transparent" embed wmode="transparent" allowTransparency="true" scrolling="no"></iframe>
		</div>
	</div>
</body>
</html>