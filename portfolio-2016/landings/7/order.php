<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=./index.html">

<title>Заявка отправлена</title>
</head>
<?php

//Если форма отправлена
if(isset($_POST['submit'])) {
	
	//тема
	$tid = trim($_POST['tid']);
	
	$name = trim($_POST['name']);
	
		
	//Проверка Поля number
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}	
	
	$message = trim($_POST['message']);
	$email = trim($_POST['email']);
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'max-alser@mail.ru'; //Сюда введите Ваш email
	
                  $headers = "From: \"Заявка с сайта\"\n";
                   $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Email: $email \n\n
		Телефон: $number \n\n
		Сообщение: $message \n\n
		";
		
		
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");
	
	}
	?>
	
<?php

//Если форма отправлена
if(isset($_POST['submit'])) {
	
	//тема
	$tid = trim($_POST['tid']);
	
	$name = trim($_POST['name']);
	
		
	//Проверка Поля number
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}	
	
	$message = trim($_POST['message']);
	$email = trim($_POST['email']);
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'smaximenkov-de1fd52d0@vkmessenger.com'; //Сюда введите Ваш email
	
                  $headers = "From: \"Заявка с сайта\"\n";
                   $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Email: $email \n\n
		Телефон: $number \n\n
		Сообщение: $message \n\n
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