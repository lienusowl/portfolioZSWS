<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


<title>Заявка отправлена</title>
</head>
<?php
//Если форма отправлена
if(isset($_POST['submit'])) {
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$tid = trim($_POST['tid']);
	$email = trim($_POST['email']);	
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'info@white-net.ru '; //Сюда введите Ваш email
		$headers = "From: \"Безопасный интернет\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Безопасный интернет\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Email: $email \n\n
		";
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");
	}

//Если форма отправлена Заявка в техподдержку
if(isset($_POST['submit2'])) {
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$tid = trim($_POST['tid']);
	$email = trim($_POST['email']);
	$other = trim($_POST['other']);
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'info@white-net.ru '; //Сюда введите Ваш email
		$headers = "From: \"Безопасный интернет\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Безопасный интернет\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Email: $email \n\n
		Дополнительная информация: $other \n\n
		";
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");
	}	
	
	
//Если форма отправлена Регистрация нового клиента
if(isset($_POST['submit3'])) {
	$tid = trim($_POST['tid']);
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$number = trim($_POST['number']);
	$obl = trim($_POST['obl']);
	$city = trim($_POST['city']);
	$prov = trim($_POST['prov']);
	$type = trim($_POST['type']);
	$akk = trim($_POST['akk']);
	$other = trim($_POST['other']);
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'support@white-net.ru'; //Сюда введите Ваш email
		$headers = "From: \"Безопасный интернет\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Безопасный интернет\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Email: $email \n\n
		Область, край, округ, республика: $obl \n\n
		Населённый пункт: $city \n\n
		Название интернет провайдера: $prov \n\n
		Тип подключения интернета: $type \n\n
		Учётные данные для подключения к интернету: $akk \n\n
		Другая значимая информация: $other \n\n
		";
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");
	}
	?>
<body>
	
</body>
</html>