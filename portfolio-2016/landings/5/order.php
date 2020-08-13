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




	
	
	
	$email = trim($_POST['email']);
	
	$tid = trim($_POST['tid']);
	
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = '1@mail.ru'; //Сюда введите Ваш email
	
		  $headers = "From: \"Сайт\"\n";
		  $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		  $subject = "From: \"Заявка с сайта \"\n";
		$body = "
		Тема: $tid \n\n
		
		Email: $email \n\n
		
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