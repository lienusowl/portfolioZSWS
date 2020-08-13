<?php
//Если форма отправлена
if(isset($_POST['submit'])) {

	//Проверка Поля ИМЯ
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}
	//Проверка Поля Телефон
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}
	

	

	//Проверка наличия ТЕКСТА сообщения
	if(trim($_POST['message1']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message1']));
		} else {
			$comments = trim($_POST['message1']);
		}
	}

	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'jed89@mail.ru'; //Сюда введите Ваш email
		$body = "Name: $name \n\nNumber: $number \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<? include("blocks/head.php");?>
<title>Империя | Контакты</title>
</head>
<body>
	<div id="top"></div>
	<? include("blocks/menu.php");?>
	<? include("blocks/slides.php");?>
	<div id="main">
	<div id="content">
	<h1>Империя | Контакты</h1>
		<div style="float:left;">
		
		<p>Адрес: г.Киров, ул.Романа Ердякова, 42б, офис 5</p>
		<p>Телефон: (8332) 45-61-22</p>
		<p>Телефон: (8332) 45-51-38</p>
		<p>Телефон/факс: (8332) 53-51-26</p>
		<p>Сотовый: +7 922-995-51-38</p>
		<p>E-mail: <a href="mailto:oooimperiy2009@mail.ru">	oooimperiy2009@mail.ru</a></p>
		<p><a href="http://imperiya43.ru/">http://imperiya43.ru/</a></p><br>
		<h1 style="font-size:18px;">Склад</h1>
		<p>Адрес: г.Киров, Базовый переулок, 12а</p>
		<p>Телефон: (8332) 45-49-25</p>
		<br><br>
		<div id="contact-wrapper" style="width: 300px;">
			<?php if(isset($hasError)) { //Если найдены ошибки ?>
			<p class="error" style="color: #e94500;">Проверьте, пожалуйста, правильность заполения всех полей.</p>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
			<p style="color: #e94500;"><strong>Email успешно отправлен!</strong></p>
			<p >Спасибо  <strong><?php echo $name;?></strong> за использование контактной формы! Ваш email был отправлен и я свяжусь с Вами в кратчайшие сроки.</p>
			<?php } ?>
			<form method="post" action="contacts.php#content" id="contactform">
			<div>
		    <label for="name"><strong>Имя</strong></label>
			<input type="text" size="35" name="contactname" id="contactname" value="" class="required" />
			</div>
			<div>
			<label for="email"><strong>Телефон</strong></label>
			<input type="text" size="35" name="number" id="number" value="" class="required" />
			</div>
			<div>
			<label for="message1" style="float:none;width:230px;"><strong>Дополнительная информация:</strong></label>
			<textarea rows="4" cols="31" name="message1" id="message1" class="required"></textarea>
			</div>
			<input style="cursor:pointer;" type="submit" value="Отправить сообщение" name="submit" />
			</form>
	</div></div>
		<div style="width:500px;border:1px solid #f27421;height:400px;float:right;"><script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=7YDA3r3KF7XXsH8-Lg9daDaZNwX3qFZF&width=500&height=400"></script>
		</div>
	</div>
	</div>
	<? include("blocks/bottom.php");?>
	<? include("blocks/footer.php");?>
	<? include("blocks/up.php");?>
</body>
</html>