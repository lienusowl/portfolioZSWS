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
		$emailTo = 'info@instroy-21.ru'; //Сюда введите Ваш email
		$headers = "From: \"Инновационное строительство\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Инновационное строительство\"\n";
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


//Если форма2 отправлена
if(isset($_POST['submit2'])) {
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$other = trim($_POST['other']);
	$tid = trim($_POST['tid']);
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'info@instroy-21.ru'; //Сюда введите Ваш email
		$headers = "From: \"Инновационное строительство\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Инновационное строительство\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Сообщение: $other \n\n
		";
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");
	}

//Если форма3 отправлена
if(isset($_POST['submit3'])) {
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$select = trim($_POST['select']);
	$col = trim($_POST['col']);
	$tid = trim($_POST['tid']);
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'info@instroy-21.ru'; //Сюда введите Ваш email
		$headers = "From: \"Инновационное строительство\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Инновационное строительство\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Тип: $select \n\n
		Количество: $col \n\n
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