<?php
 
// Адрес, куда отправляем письмо
$to = 'setka43@mail.ru';
 
// Получаем данные от пользователя
// Все данные обязательно нужно проверять на правильность!
$url = '<br>'.$_SERVER['HTTP_REFERER'];
$date = '<br>'.date('d.m.Y G:i:s');
if (isset($_POST['inpt1'])) {$name = '<br><b>Имя:</b> '.trim($_POST['inpt1']);}
if (isset($_POST['number'])) {$number = '<br><b>Телефон:</b> '.trim($_POST['number']);}
if (isset($_POST['email'])) {$email = '<br><b>Email:</b> '.trim($_POST['email']);}
if (isset($_POST['message'])) {$message = '<br><b>Сообщение:</b> '.trim($_POST['message']);}
 
// Проверка, что данные не пустые. 
// Нас не интересуют анонимки
if(!empty($_POST['name'])) {
    die('Отсутствует или неверен адрес почты.');
}
$headers = null;
    // собираем заголовки
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=UTF-8";
    $headers[] = "From: admin@stalprom43.ru";
    $headers[] = "X-Mailer: PHP/" . phpversion();
    $subject = "\"Заявка с сайта Сталь Пром\"\n";
    // собираем текст письма
    $allmsg = "$date $name $number $email $message $url";
            
    $allmsg = "<html><head><title>Обратная связь</title><META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=UTF-8\"></head><body>" . $allmsg . "</body></html>";
    // отправляем
    if (!mail($to, $subject, $allmsg, implode("\r\n", $headers))) {
        header('Location:http://stalprom43.ru/fail');
    } else {
        header('Location:http://stalprom43.ru/success');
    }
?>