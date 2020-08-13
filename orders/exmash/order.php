<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta http-equiv="refresh" content="1;URL=https://www.exmash.com/success.html" />
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
		//$emailTo = 'info@st43.ru, top-in-web@yandex.ru'; //Сюда введите Ваш email
		$emailTo = 'maximkaneunivaka@yandex.ru'; //Сюда введите Ваш email
		$headers = "From: \"Exmash\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Exmash\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		";
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	//include("win.php");
	
	}

//Если форма отправлена Заявка в техподдержку
if(isset($_POST['submit2'])) {
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$tid = trim($_POST['tid']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'info@st43.ru, top-in-web@yandex.ru'; //Сюда введите Ваш email
		$headers = "From: \"Exmash\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Exmash\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Email: $email \n\n
		Дополнительная информация: $message \n\n
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