<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=./index.php">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Заявка отправлена</title>
</head>
<body>
<?php
//проверка
if(!empty($_POST['name'])) {
	include("fail.php");
}
else {
	//Если форма отправлена
	if(isset($_POST['submit'])) {
		if(isset($_POST['tid'])) {$tid = 'Тема: '.trim($_POST['tid']);}
		if(isset($_POST['sale_type'])) {$sale_type = 'Тип постройки: '.trim($_POST['sale_type']);}
		if(isset($_POST['sale_profile'])) {$sale_profile = 'Тип контура: '.trim($_POST['sale_profile']);}
		if(isset($_POST['inpt1'])) {$name = 'Имя: '.trim($_POST['inpt1']);}
		if(isset($_POST['number'])) {$number = 'Телефон: '.trim($_POST['number']);}
		if(isset($_POST['email'])) {$email = 'Email: '.trim($_POST['email']);}
		if(isset($_POST['message'])) {$message = 'Сообщение: '.trim($_POST['message']);}
		$date = 'Дата: '.date("d.m.Y G:i:s").'';
		//Если ошибок нет, отправить email
		if(!isset($hasError)) {
			$emailTo = 'maximkaneunivaka@yandex.ru, vip.qwer123zxcv@mail.ru'; //Сюда введите Ваш email
			$headers = "From: admin@prof-angar.ru";
			//$headers .= "Content-type: text/plain; charset=\"utf-8\"";
			$subject = "\"Заявка с сайта Проф-Ангар\"\n";
			$body = "
			$date
			$tid
			$name
			$number
			$email
			$message
			$sale_type
			$sale_profile
			";
			mail($emailTo, $subject, $body, $headers);
			$emailSent = true;
		}
		include("win.php");
		}
	//калькулятор
	if(isset($_POST['calc_submit'])) {
		if(isset($_POST['tid'])) {$tid = 'Тема: '.trim($_POST['tid']);}
		if(isset($_POST['calc_type'])) {$calc_type = 'Тип постройки: '.trim($_POST['calc_type']);}
		if(isset($_POST['calc_pokritie'])) {$calc_pokritie = 'Покрытие крыши здания: '.trim($_POST['calc_pokritie']);}
		if(isset($_POST['calc_dlina'])) {$calc_dlina = 'Длина здания: '.trim($_POST['calc_dlina']);}
		if(isset($_POST['calc_shirina'])) {$calc_shirina = 'Ширина здания: '.trim($_POST['calc_shirina']);}
		if(isset($_POST['calc_visota'])) {$calc_visota = 'Высота здания: '.trim($_POST['calc_visota']);}
		
		if(isset($_POST['calc_profile'])) {$calc_profile = 'Тип контура: '.trim($_POST['calc_profile']);}
		if(isset($_POST['calc_phone'])) {$calc_phone = 'Телефон: '.trim($_POST['calc_phone']);}
		if(isset($_POST['calc_name'])) {$calc_name = 'Имя: '.trim($_POST['calc_name']);}
		$date = 'Дата: '.date("d.m.Y G:i:s").'';
		//Если ошибок нет, отправить email
		if(!isset($hasError)) {
			$emailTo = 'maximkaneunivaka@yandex.ru, vip.qwer123zxcv@mail.ru'; //Сюда введите Ваш email
			$headers = "From: admin@prof-angar.ru";
			//$headers .= "Content-type: text/plain; charset=\"utf-8\"";
			$subject = "\"Заявка с сайта Проф-Ангар\"\n";
			$body = "
			$date
			$tid
			$calc_type
			$calc_pokritie
			$calc_dlina
			$calc_shirina
			$calc_visota
			$calc_profile
			$calc_phone
			$calc_name
			";
			mail($emailTo, $subject, $body, $headers);
			$emailSent = true;
		}
		include("win.php");
		}
	//акции
	if(isset($_POST['submit_akc'])) {
		if(isset($_POST['tid'])) {$tid = 'Тема: '.trim($_POST['tid']);}
		if(isset($_POST['akc_type'])) {$akc_type = 'Выбранная акция: '.trim($_POST['akc_type']);}
		if(isset($_POST['inpt1'])) {$name = 'Имя: '.trim($_POST['inpt1']);}
		if(isset($_POST['number'])) {$number = 'Телефон: '.trim($_POST['number']);}
		if(isset($_POST['email'])) {$email = 'Email: '.trim($_POST['email']);}
		if(isset($_POST['message'])) {$message = 'Сообщение: '.trim($_POST['message']);}
		$date = 'Дата: '.date("d.m.Y G:i:s").'';
		//Если ошибок нет, отправить email
		if(!isset($hasError)) {
			$emailTo = 'maximkaneunivaka@yandex.ru, vip.qwer123zxcv@mail.ru'; //Сюда введите Ваш email
			$headers = "From: admin@prof-angar.ru";
			//$headers .= "Content-type: text/plain; charset=\"utf-8\"";
			$subject = "\"Заявка с сайта Проф-Ангар\"\n";
			$body = "
			$date
			$tid
			$akc_type
			$name
			$number
			$email
			$message
			$sale_type
			$sale_profile
			";
			mail($emailTo, $subject, $body, $headers);
			$emailSent = true;
		}
		include("win.php");
		}
	//форма узнать расчёт
	if(isset($_POST['calc_submit2'])) {
		if(isset($_POST['tid'])) {$tid = 'Тема: '.trim($_POST['tid']);}
		if(isset($_POST['calc_type'])) {$calc_type = 'Тип постройки: '.trim($_POST['calc_type']);}
		if(isset($_POST['calc_sq'])) {$calc_sq = 'Площадь здания: '.trim($_POST['calc_sq']);}
		if(isset($_POST['calc_profile'])) {$calc_profile = 'Утепленное или холодное здание: '.trim($_POST['calc_profile']);}
		if(isset($_POST['calc_phone'])) {$calc_phone = 'Телефон: '.trim($_POST['calc_phone']);}
		if(isset($_POST['calc_name'])) {$calc_name = 'Имя: '.trim($_POST['calc_name']);}
		if(isset($_POST['message'])) {$message = 'Сообщение: '.trim($_POST['message']);}
		$date = 'Дата: '.date("d.m.Y G:i:s").'';
		//Если ошибок нет, отправить email
		if(!isset($hasError)) {
			$emailTo = 'maximkaneunivaka@yandex.ru, vip.qwer123zxcv@mail.ru'; //Сюда введите Ваш email
			$headers = "From: admin@prof-angar.ru";
			//$headers .= "Content-type: text/plain; charset=\"utf-8\"";
			$subject = "\"Заявка с сайта Проф-Ангар\"\n";
			$body = "
			$url \n
			$date
			$tid
			$calc_type
			$calc_sq
			$calc_profile
			$calc_phone
			$calc_name
			$message
			";
			mail($emailTo, $subject, $body, $headers);
			$emailSent = true;
		}
	include("win.php");
	}
}
?>
</body>
</html>