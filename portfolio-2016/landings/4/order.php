<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<? include("blocks/head.php");?>
<title>drspy.ru &#45; На страже вашей безопасности</title>
</head>
<?php

//Если форма отправлена
if(isset($_POST['submit'])) {
	
	
	
		$name = trim($_POST['name']);
	
		
	//Проверка Поля телефон
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}	
	
	$email = trim($_POST['email']);
	//тема
	$tid = trim($_POST['tid']);
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'zakaz@drspy.ru'; //Сюда введите Ваш email
	
                  $headers = "From: \"drspy.ru\"\n";
                   $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		Email: $email \n\n
		";
		
		
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	
	}
	?>
<script>
          function hide()
               {
                    var win = document.getElementById("win");
                    win.style.display = "none";
					document.location.href = "./index.php";
               }
               setTimeout("hide()", 5400);

 </script>
<body>
<? include("blocks/popup.php");?>
<? include("blocks/box1.php");?>
<div class="clear"></div>
<? include("blocks/box2.php");?>
<div class="clear"></div>
<? include("blocks/box3.php");?>
<div class="clear"></div>
<? include("blocks/box4.php");?>
<div class="clear"></div>
<? include("blocks/box5.php");?>
<div class="clear"></div>
<? include("blocks/box6.php");?>
<div class="clear"></div>
<? include("blocks/box7.php");?>
<div class="clear"></div>
<? include("blocks/box8.php");?>
<div class="clear"></div>
<? include("blocks/box9.php");?>
<div class="clear"></div>
<? include("blocks/footer.php");?>
<div class="clear"></div>
</body>
</html>


