<?php
session_start();

header('Content-Type: text/html; charset=utf-8');
	if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH'])))
		exit();
	
	$tel = trim($_POST['callme-input']);
	
	$headers  = 'From: noreply@shashlik38.ru'."\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	$email = 'mitryakovnik@gmail.com, alexar-2007@yandex.ru, shashlik38@bk.ru'; //почта для заказа
	
	$message .= '<h2>Заказ звонка:</h2>';
	$message .= '<br />Телефон заказчика: '.trim($_POST['tel']);
	

	

if(mail($email, 'Заказ (shashlik38.ru)', $message, $headers))
{
	echo 'Заказ звонка принят!';
}

?>