<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=./index.php">

<title>Заявка отправлена</title>
</head>
<?php
//Если форма отправлена
if(isset($_POST['submit'])) {
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$email = trim($_POST['email']);
	$tid = trim($_POST['tid']);
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = '111@mail.ru'; //Сюда введите Ваш email
		$headers = "From: \"Шашлык 38\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Шашлык 38\"\n";
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