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
	$comment = trim($_POST['comment']);
	
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'maximkaneunivaka@yandex.ru'; //Сюда введите Ваш email
	
		  $headers = "From: \"vzruvmozga\"\n";
		  $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		  $subject = "From: \"Заявка с сайта vzruvmozga\"\n";
		$body = "
		
		Имя: $name \n\n
		
		Телефон: $number \n\n
		Сообщение: $comment \n\n
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