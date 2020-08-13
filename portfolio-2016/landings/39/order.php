<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=./index.php">
<title>Заявка отправлена</title>
</head>
<body>
<?php
	$requestArray = Array();
	$login = "89033952567";
	$password = "2578712";

	if(isset($_POST)){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$idGroup = $_POST['groupId'];
		$get_url = "http://lcab.teamsale.ru/lcabApi/addContact.php?"
					. "login={$login}"
					. "&password={$password}"
					. "&idGroup={$idGroup}"
					. "&phone={$phone}"
					. "&i={$name}";

		$request = file_get_contents($get_url); 
		echo $request;
	}
?>
<?php
//Если форма отправлена
if(isset($_POST['submit'])) {
	if(isset($_POST['tid'])) {$tid = 'Тема: '.trim($_POST['tid']);}
	if(isset($_POST['name'])) {$name = 'Имя: '.trim($_POST['name']);}
	if(isset($_POST['phone'])) {$phone = 'Телефон: '.trim($_POST['phone']);}
	if(isset($_POST['email'])) {$email = 'Email: '.trim($_POST['email']);}
	if(isset($_POST['message'])) {$message = 'Сообщение: '.trim($_POST['message']);}
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = '602986@mail.ru'; //Сюда введите Ваш email
		$headers = "From: \"studio-climat\"\n";
		$headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$subject = "From: \"Заявка с сайта Студия Климата\"\n";
		$body = "
		$tid
		$name
		$phone
		$email
		$message
		";
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");
	}
?>
</body>
</html>