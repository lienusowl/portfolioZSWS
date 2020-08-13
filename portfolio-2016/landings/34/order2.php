<style>
#win1 {
position:fixed;
top: 27%;
left: 22%;
width:400px;
padding:30px;
background:#fcfcfc;
text-align: center;
border: 2px solid #ff0000;
border-radius: 5px;
z-index:100;
}
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #fff;
z-index: 50;
}
</style>
﻿<?php

//Если форма отправлена
if(isset($_POST['submit'])) {

	$tid = trim($_POST['tid']);
	$name = trim($_POST['name']);
	$number = trim($_POST['number']);
	
	
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'mitryakovnik@gmail.com'; //Сюда введите Ваш email
	
                  $headers = "From: \" VOLCANO\"\n";
                   $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$body = "
		Что заказали: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		
		
		
		";
		
		
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win2.php");
	
	}

	
	
	
	?>
	
	
	
	
	

	
	
	

 <!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>
<body>

</body>
</html>
 