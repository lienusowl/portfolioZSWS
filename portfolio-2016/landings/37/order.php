<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title>Заявка отправлена</title>
</head>
<?php
//Если форма отправлена
if(isset($_POST['submit'])) {
	$tid = trim($_POST['tid']);
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$time1 = trim($_POST['time1']);
	$time2 = trim($_POST['time2']);
	$time3 = trim($_POST['time3']);
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'burenok_81@mail.ru, 602986@mail.ru'; //Сюда введите Ваш email
		$headers = "From: \"Golden Cupol\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Golden Cupol\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Время для звонка: $time1 $time2 $time3\n\n
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