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
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'center-remonta56@yandex.ru, a240676@yandex.ru'; //Сюда введите Ваш email
	
		  $headers = "From: \"CENTER REMONTA\"\n";
		  $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		  $subject = "From: \"Заявка с сайта Центр Ремонта\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
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