<?php error_reporting(0);
	header("Content-Type: text/html; charset=utf-8");
	$referer = $_SERVER['HTTP_REFERER'];
	$crawler = NULL;
	$phrase2 = NULL;
	if (stristr($referer, 'yandex.kz') or stristr($referer, 'yandex.ru') or stristr($referer, 'yandex.com')) {
		$search = 'text=';
		$crawler = 'Yandex';
	}
	if (stristr($referer, 'go.mail.ru') or stristr($referer, 'go.mail.kz') or stristr($referer, 'go.mail.com')) {
		$search = 'q=';
		$crawler = 'Mail';
	}
	if (stristr($referer, 'google.com') or stristr($referer, 'google.kz') or stristr($referer, 'google.ru')) {
		$search = 'q=';
		$crawler = 'Google';
	}
	if (stristr($referer, 'vk.com') or stristr($referer, 'vkontakte.ru')) {
		$crawler = 'Vk';
	}
	// здесь мы приводим referer в понятный для человека вид
    $phrase = urldecode($referer);
	// ищем ключевое слово в referer
    eregi($search.'([^&]*)', $phrase.'&', $phrase2);
	$phrase2 = $phrase2[1];
	if($phrase2[1] == NULL AND $crawler != NULL) {$phrase2 = 'Скрытый запрос.';}
	if($phrase2 == NULL AND $crawler == NULL) {$phrase2 = 'Прямой переход';}
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
	$error_url = 'error.html';
	if($_POST['phone'] == '' or $_POST['phone'] == NULL) {
		header('Location: '.$error_url);
		exit;
	}
	if ($_POST['type'] == 'Каталог'){ 
		$success_url = 'catalog.html';
	}else {
		$success_url = 'thnks.html';
	}
	$second_url = 'second-page.html';
	//Отправляем лида на email
	$mailto = 'lienusowl@yandex.ru';
	$mailfrom = 'info@variti.kz';
	$subject = 'Variti.kz|Lp - Новый лид';
	$message = 'Values submitted from web site form:';
	$eol = "\n";
	$br = "<br>";
	$boundary = md5(uniqid(time()));
	$header  = 'From: '.$mailfrom.$eol;
	$header .= 'Reply-To: '.$mailfrom.$eol;
	$header .= 'MIME-Version: 1.0'.$eol;
	$header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
	$header .= 'X-Mailer: PHP v'.phpversion().$eol;
	
	  $internalfields = array ("submit", "reset", "send", "captcha_code");
      $message .= $eol;
      $message .= "IP Address : ";
      $message .= $_SERVER['REMOTE_ADDR'];
      $message .= $br;
      foreach ($_POST as $key => $value)
      {
         if (!in_array(strtolower($key), $internalfields))
         {
            if (!is_array($value))
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $br;
            }
            else
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $br;
            }
         }
      }

      $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
      $body .= '--'.$boundary.$eol;
      $body .= 'Content-Type: text/html; charset=UTF-8'.$eol;
      $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
      $body .= $eol.stripslashes($message).$eol;
      if (!empty($_FILES))
      {
          foreach ($_FILES as $key => $value)
          {
             if ($_FILES[$key]['error'] == 0 && $_FILES[$key]['size'] <= $max_filesize)
             {
                $body .= '--'.$boundary.$eol;
                $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;
                $body .= 'Content-Transfer-Encoding: base64'.$eol;
                $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;
                $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;
             }
         }
      }
      $body .= '--'.$boundary.'--'.$eol;
      if ($mailto != '')
      {
         mail($mailto, $subject, $body, $header);
      }
	header('Location: '.$success_url);
	exit;


}?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Бухгалтерское обслуживание в Алматы</title>
	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/countUp.js"></script>
	<link rel="stylesheet" href="css/animate.css">
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/jquery.animateNumber.js"></script>
	<script src="js/google-map.js"></script>

</head>
<body>
	<div class="bg1 part1"></div>
	<div class="slide1">
		<header>
			<div class="wrapper">
				<img src="images/logo.png" alt="" class="logo">
				<div class="numbers">
					<p>+7 (727) 3179413</p>
					<p>+7 (727) 2952801</p>
					<p>+7 (727) 2668691</p>
				</div>
				<button class="popup-btn">Заказать звонок</button>
			</div>
		</header>
		<div class="wrapper">
			<div class="slide1-info">
				<h1>Бухгалтерское обслуживание <span>ВАШЕГО БИЗНЕСА</span></h1>
				<ul>
					<li><p>Полное ведение бухгалтерского и налогового учета</p></li>
					<li><p>Ликвидация ТОО и ИП</p></li>
					<li><p>Разработка учетной политики</p></li>
					<li><p>Подготовка и сдача отчетности</p></li>
					<li><p>Представление интересов в налоговых органах</p></li>
				</ul>
			</div>
			<div class="main-form wow animated fadeInDown" data-wow-delay="0.6s">
				<p>Получите <span>бесплатную консультацию</span> прямо <span>СЕЙЧАС</span></p>
				<img src="images/name2.png" alt="" class="name">
				<img src="images/phone2.png" alt="" class="phone">
				<img src="images/email2.png" alt="" class="email">
				<form action="index.php" method="POST">
					<input type="text" name="name" id="" placeholder="Ваше имя" required>
					<input class="inputPhone" type="text" name="phone" id="" placeholder="Ваш телефон" required>
					<input type="text" name="email" id="" placeholder="Ваш E-mail" required>
					<input type="submit" value="Получить консультацию">
				</form>
			</div>
		</div>
	</div>
	<div class="slide2">
		<div class="wrapper">
			<h1 class="wow animated fadeInLeft">Сосредочтесь на развитии вашего <br> бизнеса — и не беспокойтесь о состоянии дел в бухгалтерии!</h1>
			<ul>
				<li class="popup-btn2" value="pop01"><img src="images/slide2-1.png" alt=""><p id="pop01"> Полный комплекс бухгалтерских услуг</p></li>
				<li class="popup-btn2" value="pop02"><img src="images/slide2-5.png" alt=""><p id="pop02"> Налоговое сопровождение ТОО и ИП</p></li>
				<li class="popup-btn2" value="pop03"><img src="images/slide2-2.png" alt=""><p id="pop03"> Ликвидация ТОО и ИП</p></li>
				<li class="popup-btn2" value="pop04"><img src="images/slide2-6.png" alt=""><p id="pop04"> Постановка бухгалтерского учета</p></li>
				<li class="popup-btn2" value="pop05"><img src="images/slide2-3.png" alt=""><p id="pop05"> Разработка учетной политики</p></li>
				<li class="popup-btn2" value="pop06"><img src="images/slide2-7.png" alt=""><p id="pop06">  Тестирование бухгалтерского учета</p></li>
				<li class="popup-btn2" value="pop07"><img src="images/slide2-4.png" alt=""><p id="pop07"> Сдача налоговой отчетности</p></li>
				<li class="popup-btn2" value="pop08"><img src="images/slide2-8.png" alt=""><p id="pop08"> Восстановление бухгалтерского учета</p></li>
			</ul>
		</div>
	</div>
	<div class="slide3" id="slide3">
		<div class="wrapper">
			<ul>
				<li><p class="number" id="myTargetElement">10 </p><p class="slide3-info">Квалифицированных бухгалтеров</p></li>
				<li><p class="number" id="myTargetElement1">15  </p><p class="slide3-info"> ЛЕТ <br>  <br> Стажа наших специалистов</p></li>
				<li><p class="number" id="myTargetElement2">70  </p><p class="slide3-info"> И БОЛЕЕ <br>  <br> Компаний на  обслуживании</p></li>
				<li><p class="number" id="myTargetElement3">20 </p><p class="slide3-info">Разработанных учетных политик</p></li>
				<li><p class="number" id="myTargetElement4">5 </p><p class="slide3-info">ЛЕТ <br><br>На рынке</p></li>
			</ul>
		</div>
	</div>
	<div class="bg12 part1"></div>
	<div class="slide4">
		<div class="wrapper">
			<h1>Проверенная формула успешной бухгалтерии — здесь!</h1>
			<ul>
				<li><img src="images/slide4-p.png" alt=""><p> Открыли ТОО или ИП  - не знаете как сдавать отчетность, платить налоги и вести учет? <span> Не беспокойтесь, мы Вам в этом поможем! </span></p></li>
				<li><img src="images/slide4-p.png" alt=""><p> Устали от бухгалтерской волокиты и некомпетентности бухгалтера? <span> Вы можете довериться нашему профессионализму и забыть обо всех бухгалтелских проблемах. Наш опыт на страже Вашего спокойствия!</span></p></li>
				<li><img src="images/slide4-p.png" alt=""><p> Дорого обходится бухгалтер, а результат минимальный? <span> Теперь Вам не потребуются дополнительные затраты на организацию рабочего места, программное обеспечение и повышение квалификации бухгалтера. Это все мы возьмем на себя! </span></p></li>
				<li><img src="images/slide4-p.png" alt=""><p> Вы нуждаетесь в надежном и ответственном специалисте? <span> Мы гарантируем сохранение конфиденциальности бухгалтерской и налоговой информации Вашей компании. Вы можете быть уверены, что работа будет выполнена своевременно. Мы несем ответственность за качество предоставляемых услуг и надежное исполнение своих обязательсв</span></p></li>
			</ul>
		</div>
	</div>
	<div class="slide5-6">
		<div class="slide5">
			<div class="wrapper">
				<h1>ПОЧЕМУ НАМ ДОВЕРяЮТ?</h1>
				<ul>
					<li><img src="images/slide5-01.png" alt=""><p>Соблюдение  конфиденциальности</p></li>
					<li><img src="images/slide5-02.png" alt=""><p>наша  ответственность  застрахована</p></li>
					<li><img src="images/slide5-03.png" alt=""><p>Опыт работы  в различных сферах  бизнеса</p></li>
					<li><img src="images/slide5-04.png" alt=""><p>Закрепление за  компанией личного  специалиста</p></li>
					<li><img src="images/slide5-05.png" alt=""><p>Оперативность и  мобильность  специалистов</p></li>
					<li><img src="images/slide5-06.png" alt=""><p>ОБъективность и  независимость  бухгалтеров</p></li>
					<li><img src="images/slide5-07.png" alt=""><p>Бухгалтера с высокой  квалификацией и  опытом работы</p></li>
					<li><img src="images/slide5-08.png" alt=""><p>Контроль качества  выполненной  работы</p></li>
					<li><img src="images/slide5-09.png" alt=""><p>Прогнозирование  и решение налоговых  проблем до их  возникновения</p></li>
					<li><img src="images/slide5-10.png" alt=""><p>Консультации в  режиме реального  времени</p></li>
				</ul>
			</div>
		</div>
		<div class="bg13 part1"></div>
		<div class="slide6">
			<div class="wrapper">
				<h1>МЫ ГАРАНТИРУЕМ:</h1>
				<ul>
					<li><img src="images/slide6-p.png" alt=""><p> Соответствие бухгалтерского и налогового сопровождения нормам <span>законодательства</span></p></li>
					<li><img src="images/slide6-p.png" alt=""><p>Своевременную сдачу отчетности</p></li>
					<li><img src="images/slide6-p.png" alt=""><p>Обязательное исполнение условий договора</p></li>
					<li><img src="images/slide6-p.png" alt=""><p>Высокий профессионализм наших специалистов</p></li>
					<li><img src="images/slide6-p.png" alt=""><p>Контроль бухгалтерских операций</p></li>
					<li><img src="images/slide6-p.png" alt=""><p>Соблюдение интересов своих клиентов</p></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="slide7">
		<div class="wrapper">
			<h1>Свидетельство нашего профессионализма</h1>
			<ul>
				<li><img src="images/slide7-1.png" alt=""></li>
				<li><img src="images/slide7-2.png" alt=""></li>
				<li><img src="images/slide7-3.png" alt=""></li>
				<li><img src="images/slide7-4.png" alt=""></li>
				<li><img src="images/slide7-5.png" alt=""></li>
			</ul>
		</div>
	</div>
	<div class="slide8">
		<div class="wrapper">
			<h1>Наши постоянные клиенты</h1>
			<ul>
				<li><img src="images/slide8-01.png" alt=""></li>
				<li><img src="images/slide8-02.png" alt=""></li>
				<li><img src="images/slide8-03.png" alt=""></li>
				<li><img src="images/slide8-04.png" alt=""></li>
				<li><img src="images/slide8-05.png" alt=""></li>
				<li><img src="images/slide8-06.png" alt=""></li>
				<li><img src="images/slide8-07.png" alt=""></li>
				<li><img src="images/slide8-08.png" alt=""></li>
				<li><img src="images/slide8-09.png" alt=""></li>
				<li><img src="images/slide8-10.png" alt=""></li>
			</ul>
		</div>
	</div>
	<div class="slide9-10">
		<div class="slide9">
			<div class="wrapper">
				<div class="main-form2">
				<p>Оставьте заявку  <span>прямо сейчас</span>  и получите <span>анкету</span></p>
				<img src="images/name2.png" alt="" class="name">
				<img src="images/phone2.png" alt="" class="phone">
				<img src="images/email2.png" alt="" class="email">
				<form action="index.php" method="POST">
					<input type="text" name="name" id="" placeholder="Ваше имя" required>
					<input class="inputPhone" type="text" name="phone" id="" placeholder="Ваш телефон" required>
					<input type="text" name="email" id="" placeholder="Ваш E-mail" required>
					<input type="submit" value="ОСТАВИТЬ ЗАЯВКУ">
				</form>
			</div>
			</div>
		</div>
		<div class="slide10">
			<div class="wrapper">
				<h1>КАК МЫ РАБОТАЕМ?</h1>
				<img src="images/slide10-c.png" alt="">
				<ul>
					<li><p>Вы оставляете<button class="popup-btn">ЗАЯВКУ</button></p></li>
					<li><p>Мы связываемся с Вами</p></li>
					<li><p>Вы заполняете <button class="popup-btn4">АНКЕТУ</button></p></li>
					<li><p>Мы высылаем коммерческое <br>  предложение</p></li>
					<li><p>Начинаем сотрудничество</p></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="slide11">
		<div class="wrapper">
			<h1>Наши специалисты</h1>
			<ul>
				<li><img src="images/slide11-1.png" alt=""><p>Кочергина<br>  Наталья Михайловна -   <span>заместитель директора</span></p></li>
				<li><img src="images/slide11-2.png" alt=""><p> Сапунова <br>  Наталья - <span>менеджер  по работе с клиентами</span></p></li>
				<li><img src="images/slide11-3.png" alt=""><p>дОЦЕНКо <br> Елена - <span>бухгалтер</span></p></li>
				<li><img src="images/slide11-4.png" alt=""><p>Серофостова <br> Надежда - <span>бухгалтер</span></p></li>
				<li><img src="images/slide11-5.png" alt=""><p>Кочергина <br>  Оксана - <span>бухгалтер</span></p></li>
				<li><img src="images/slide11-7.png" alt=""><p>Морозов <br>Андрей - <span>бухгалтер</span></p></li>
				<li><img src="images/slide11-8.png" alt=""><p>Калиева <br>  Айканат - <span>бухгалтер</span></p></li>
				<li><img src="images/slide11-6.png" alt=""><p>СЕРЫХ <br>  Ольга - <span>бухгалтер</span></p></li>
			</ul>
		</div>
	</div>
	<div class="slide12">
		<div class="wrapper">
			<img src="images/slide12.png" alt="">
			<div class="slide12-info">
				<img src="images/slide12-info.png" alt="">
				<h1> Сапунова Любовь Юрьевна - директор</h1>
				<h2> Дорогие друзья, клиенты и партнеры!</h2>
				<p> Согласитесь, роль бухгалтера в любой компании трудно переоценить. Необходимо 
					своевременно сдавать отчетность, вести учет без ошибок и выполнять многие 
					другие профессиональные обязанности. В силу меняющихся норм и правил 
					бухгалтерского  и налогового учета, поиск надежного специалиста становится 
					трудновыполнимой задачей. Теперь тратить драгоценное время на поиски 
					квалифицированного штатного бухгалтера нет необходимости. Мы нашли для Вас 
					выход — бухгалтерский аутсорсинг. Оцените его удобство вместе с нашей 
					бухгалтерской компанией «Варити».
					<span>Сконцентрируйте свое внимание на развитии Вашего бизнеса, а 
							бухгалтерию оставьте профессионалам!
					</span>
				</p>
			</div>
		</div>
	</div>
	<div class="map">
		<div id="map_canvas"></div>
		<div class="wrapper">
			<p class="wow animated fadeInDown"  data-wow-delay="0.4s"><span>КОНТАКТЫ</span><br>Казахстан, г. Алматы,  ул. Чайковского 114 а,  офис 309 <br><br>Телефоны: <br> +7 (727) 3179413 <br> +7 (727) 2952801 <br> +7 (727) 2668691</p>
		</div>
	</div>
	<div style="clear:both;"></div>
	<div class="slide13">
		<div class="wrapper">
				<p>ОСТАЛИСЬ ВОПРОСЫ?</p>
				<p class="popup-btn">Задайте их нашему менеджеру</p>
				<a href="http://lip.kz">Разработано бизнес студией</a>
		</div>
	</div>


	<div class="popup">
		<div class="popup-form">
			<p>Получите <span>бесплатную консультацию</span> прямо <span>СЕЙЧАС</span></p>
			<img src="images/name2.png" alt="" class="name">
			<img src="images/phone2.png" alt="" class="phone">
			<img src="images/email2.png" alt="" class="email">
			<form action="index.php" method="POST">
				<input type="text" name="name" id="" placeholder="Ваше имя" required>
				<input class="inputPhone" type="text" name="phone" id="" placeholder="Ваш телефон" required>
				<input type="text" name="email" id="" placeholder="Ваш E-mail" required>
				<input type="submit" value="Заказать звонок">
			</form>
		</div>
	</div>
	<div class="popup2">
		<div class="popup-form2">
			<p id="hid">Получите <span>бесплатную консультацию</span> прямо <span>СЕЙЧАС</span></p>
			<form action="index.php" method="POST">
				<input type="text" name="name" id="" placeholder="Ваше имя" required>
				<input class="inputPhone" type="text" name="phone" id="" placeholder="Ваш телефон" required>
				<input type="text" name="email" id="" placeholder="Ваш E-mail" required>
				<input type="hidden" id="hide" name=type value="Главная форма">
				<input type="submit" value="УЗНАЙТЕ ПОДРОБНЕЕ">
				<img src="images/name2.png" alt="" class="name">
			<img src="images/phone2.png" alt="" class="phone">
			<img src="images/email2.png" alt="" class="email">
			</form>
		</div>
	</div>
	<div class="popup3">
		<div class="popup-form3">
				<p>Оставьте заявку  <span>прямо сейчас</span>  и получите <span>анкету</span></p>
				<img src="images/name2.png" alt="" class="name">
				<img src="images/phone2.png" alt="" class="phone">
				<img src="images/email2.png" alt="" class="email">
				<form action="index.php" method="POST">
					<input type="text" name="name" id="" placeholder="Ваше имя" required>
					<input class="inputPhone" type="text" name="phone" id="" placeholder="Ваш телефон" required>
					<input type="text" name="email" id="" placeholder="Ваш E-mail" required>
					<input type="submit" value="Получить анкету">
			</form>
		</div>
	</div>

	<div class="hover"></div>


<script>
	jQuery(function($) {


		if (!is_mobile()) {
				
		$('.slide3').seainside_screen_control();
		$('.slide3').on('start-animation', function() {
			$('#myTargetElement4').countTo({from:0,to:5});
			$('#myTargetElement3').countTo({from:0,to:20});
			$('#myTargetElement2').countTo({from:0,to:70});
			$('#myTargetElement1').countTo({from:0,to:15});
			$('#myTargetElement').countTo({from:0,to:10});
		});}
    });
</script>
	<script>

		width=screen.width; // ширина  
	    height=screen.height; // высота  
	    	if (width > 990)
	    	{
	    		$(window).scroll(function()
				{	

					getscroll();
					if (yScroll > 250)
					{
						$('.bg1').css('position','fixed').css('top' ,'-300px');
						$('.bg12').css('visibility','visible')
					}
					 else
					{
						$('.bg1').css('position','absolute').css('top','0px')
					}
					if (yScroll > 1500){
						$('.bg1').css('visibility','hidden')
					}
					else{
						$('.bg1').css('visibility','visible')
					}
					if (yScroll > 1900)
					{
						$('.bg12').css('position','fixed').css('top' ,'-100px')
					}					 
					else
					{
						$('.bg12').css('position','absolute').css('top','1717px')
					}
					if (yScroll > 3000)
					{
						$('.bg13').css('position','fixed').css('top' ,'-632px')
					}					 
					else
					{
						$('.bg13').css('position','absolute').css('top','0')
					}

				});


				function getscroll()
				{
					if (self.pageYOffset){
					yScroll = self.pageYOffset;
					xScroll = self.pageXOffset;
					} else if (document.documentElement && document.documentElement.scrollTop){
					yScroll = document.documentElement.scrollTop;
					xScroll = document.documentElement.scrollLeft;
					} else if (document.body){
					yScroll = document.body.scrollTop;
					xScroll = document.body.scrollLeft;
					}
				};
	    	}
	</script>	
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>