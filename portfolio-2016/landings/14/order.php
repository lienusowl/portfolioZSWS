<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=./contact.html">

<title>Заявка отправлена</title>
</head>
<?php

//Если форма отправлена
if(isset($_POST['submit'])) {
	
	//тема
	
	
	$name = trim($_POST['f_name']);
	
		
	//Проверка Поля email
	if(trim($_POST['f_email']) == '') {
		$hasError = true;
	} else {
		$f_email = trim($_POST['email']);
	}	
	$phone = trim($_POST['phone']);
	$message = trim($_POST['message']);
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'prokat-bentley@yandex.ru'; //Сюда введите Ваш email
	
                  $headers = "From: \"Bentley - заявка\"\n";
                   $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$body = "
		Телефон: $phone \n\n
		Имя: $name \n\n
		Email: $email \n\n
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