<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//проверка на спам
	if(!empty($_POST['name'])) {
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
		//акции
		if (isset($_POST['sale_type'])) {$sale_type = '<br><b>Тип акции:</b> '.($_POST['sale_type']);}
		//форма узнать расчёт
		if(isset($_POST['calc_type'])) {$calc_type = '<br><b>Тип постройки:</b> '.trim($_POST['calc_type']);}
		if(isset($_POST['calc_sq'])) {$calc_sq = '<br><b>Площадь здания: </b>'.trim($_POST['calc_sq']);}
		if(isset($_POST['calc_profile'])) {$calc_profile = '<br><b>Утепленное или холодное здание: </b>'.trim($_POST['calc_profile']);}
		
		$to = ""; //адрес почты получателя
		$sendfrom   = "admin@angar-zavod.ru";
		$headers  = "From: " . strip_tags($sendfrom) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
		$subject = "\"Заявка с сайта Завод Ангаров\"\n";
		$body = "$date $tid $name $number $email $message $sale_type $calc_type $calc_sq $calc_profile $url";
		$send = mail ($to, $subject, $body, $headers);
	}
}
else {
	http_response_code(403);
	echo "Попробуйте еще раз";
}
?>