<?php
//Если форма отправлена
if(isset($_POST['submit'])) {

	//Проверка Поля имя
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}	
	//Проверка Поля телефон
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}
	
	}

	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'sklanna@yandex.ru'; //Сюда введите Ваш email
		$body = "
		Имя: $name \n\n
			
		Телефон: $number \n\n		
		";
		$headers = 'From: site "Mini-pechi"' . "\r\n" . 'Reply-To: ' . $email;
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<? include("blocks/head.php");?>
<title>Мини-печи</title>
</head>
<body>
	<? include("blocks/header.php");?>
	<div id="main">
		<div id="content">
		<?php if(isset($hasError)) { //Если найдены ошибки ?><br>
			<p class="error" style="color: #cc0000;font-size: 21px;">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?><br>
			<div id="win"><p style="color: #e94500;font-size: 19px;"><strong>Заявка успешно принята!</strong></p></div>
			<p  style="font-size: 17px;">Спасибо  <strong><?php echo $name;?></strong> за использование контактной формы! <br>Мы свяжемся с Вами в кратчайшие сроки.</p>
			<?php } ?>
		<? include("blocks/content.php");?>
	</div>
	</div>
	
</body>
</html>