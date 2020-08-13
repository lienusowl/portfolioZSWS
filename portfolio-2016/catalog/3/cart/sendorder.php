<?php
session_start();

header('Content-Type: text/html; charset=utf-8');
	if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH'])))
		exit();
	
	$name = trim($_POST['name']);
	$tel = trim($_POST['tel']);
	
	if(!preg_match("/^([0-9\+]+)$/i", $tel))
	{
		echo 0;
		exit();
	}
	
	if($_SESSION['price'] == 0)
	{
		echo 1;
		exit();
	}
	
	$headers  = 'From: noreply@shashlik38.ru'."\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	$email = 'mitryakovnik@gmail.com, alexar-2007@yandex.ru, shashlik38@bk.ru'; //почта для заказа
	
	$message .= '<h2>Заказ:</h2>';
	$message .= 'Имя заказчика: '.trim($_POST['name']).'<br />';
	$message .= 'Телефон заказчика: '.trim($_POST['tel']);
	
	$message .= '<h3>Позиции заказа</h3>';

for($id = 1; $id < $_SESSION['position']['id']; $id++)
{
	if($_SESSION['position'][$id]['count'] != 0)
		$message .= $_SESSION['position'][$id]['title'].' - <strong>'.$_SESSION['position'][$id]['count'].' шт.</strong><br />';
}

	$message .= '<h3>Общая сумма заказа: '.$_SESSION['price'].' рублей</h3>';

if(mail($email, 'Заказ (shashlik38.ru)', $message, $headers))
{
	echo 'Ваш заказ успешно отправлен!<br />В ближайшее время с Вами свяжутся.';
}

?>