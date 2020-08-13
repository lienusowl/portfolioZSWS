<style>
#win1 {
position:relative;
margin:200px auto 0 auto;
    width: 600px;
padding:30px;
background:#fcfcfc;
text-align: center;
border: 2px solid #ff0000;
border-radius: 2px;
z-index:100;
font-family: Calibri, 'Open Sans', sans-serif;
}
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
z-index: 50;
}
</style>
﻿<?php

//Если форма отправлена
if(isset($_POST['submit'])) {

	$tid = trim($_POST['tid']);
	
	$number = trim($_POST['number']);
	
	
	
		
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'ikromarket@yandex.ru'; //Сюда введите Ваш email
	
                  $headers = "From: \" IKRA SITE\"\n";
                   $headers .= "Content-type: text/plain; charset=\"utf-8\"";
		$body = "
		
		С какого места заявка: $tid \n\n
		Телефон: $number \n\n
		
		
		
		";
		
		
		
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("win.php");
	
	}

	
	
	
	?>
	
	
	
	
	

	
	
	
<script>
          function hide()
               {
                    var win = document.getElementById("win");
                    win.style.display = "none";
					document.location.href = "index.php";
               }
               setTimeout("hide()", 4000);

 </script>
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>
<body>

</body>
</html>
 