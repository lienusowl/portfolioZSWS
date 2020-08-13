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
	$tid = trim($_POST['tid']);
	
	$f_name = trim($_POST['f_name']);
	
		
	//Проверка Поля email
	if(trim($_POST['f_email']) == '') {
		$hasError = true;
	} else {
		$f_email = trim($_POST['f_email']);
	}	
	
	$f_message = trim($_POST['f_message']);
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'zapilusite@gmail.com'; //Сюда введите Ваш email
	
                  $headers = "From: \"Запилю сайт - заявка\"\n";
                   $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$body = "
		Тема: $tid \n\n
		Имя: $f_name \n\n
		Email: $f_email \n\n
		Сообщение: $f_message \n\n
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