<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//проверка на спам
	if(!empty($_POST['name'])) {
		header('Location:http://grand43.ru/fail.php');
		//неудачная проверка на спам
	}
	else {
		//удачная проверка на спам
		//основная форма
		$url = '<br><br>'.$_SERVER['HTTP_REFERER'].'';
		$date = date('d.m.Y G:i:s').'<br>';
		if (isset($_POST['tid'])) {$tid = '<br><b>Тема:</b> '.trim($_POST['tid']);}
		if (isset($_POST['inpt1'])) {$name = '<br><b>Имя:</b> '.trim($_POST['inpt1']);}
		if (isset($_POST['number'])) {$number = '<br><b>Телефон:</b> '.trim($_POST['number']);}
		if (isset($_POST['email'])) {$email = '<br><b>Email:</b> '.trim($_POST['email']);}
		if (isset($_POST['message'])) {$message = '<br><b>Сообщение:</b> '.trim($_POST['message']);}
		
		//$to = "maximkaneunivaka@yandex.ru"; //адрес почты получателя
		$to = "svetlana.opaleva-ds@mail.ru"; //адрес почты получателя
		$sendfrom   = "admin@grand43.ru";
		$headers  = "From: " . strip_tags($sendfrom) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
		$subject = "\"Заявка с сайта Grand43\"\n";
		$body = "$date $tid $name $number $email $message $url";
		$send = mail ($to, $subject, $body, $headers);
		header('Location:http://grand43.ru/success.php');
	}
}
else {
	header('Location:http://grand43.ru/fail.php');
}
?>