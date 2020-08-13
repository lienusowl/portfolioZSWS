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
	$tid = trim($_POST['tid']);
	
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'lienusowl@yandex.ru'; //Сюда введите Ваш email
	
		  $headers = "From: \"www.отбеливание-зубов.com\"\n";
		  $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		  $subject = "From: \"www.отбеливание-зубов.com\"\n";
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
if(isset($_POST['submit1'])) {




	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	$message = trim($_POST['message']);
	$tid = trim($_POST['tid']);
	
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = '111@mail.ru'; //Сюда введите Ваш email
	
		  $headers = "From: \"www.отбеливание-зубов.com\"\n";
		  $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		  $subject = "From: \"www.отбеливание-зубов.com\"\n";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
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