<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


<title>Заявка отправлена</title>
</head>
<?php
//Если форма отправлена
if(isset($_POST['submit'])) {
	$number = trim($_POST['number']);
	$tid = trim($_POST['tid']);	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'akuftyrev@mail.ru'; //Сюда введите Ваш email
	
		  $headers = "From: \"Акваторнадо\"\n";
		  $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		  $subject = "From: \"Заявка с сайта Акваторнадо\"\n";
		$body = "
		Тема: $tid \n\n
		Телефон: $number \n\n
		";		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");	
	}


//Если форма2 отправлена
if(isset($_POST['submit2'])) {
	$type = trim($_POST['type']);
	$razmer = trim($_POST['razmer']);
	$stoimost = trim($_POST['stoimost']);
	$stoimost2 = trim($_POST['stoimost2']);
	$zp = trim($_POST['zp']);
	$tid = trim($_POST['tid']);	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'akuftyrev@mail.ru'; //Сюда введите Ваш email
	
		  $headers = "From: \"Акваторнадо\"\n";
		  $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		  $subject = "From: \"Заявка с сайта Акваторнадо\"\n";
		$body = "
		Тема: $tid \n\n
		Тип организации: $type \n\n
		Размер клиентской базы: $razmer \n\n
		Желаемая стоимость продажи процедур: $stoimost \n\n
		Стоимость аренды помещения: $stoimost2 \n\n
		Зарплата работника, к-й проводит процедуры: $zp \n\n
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