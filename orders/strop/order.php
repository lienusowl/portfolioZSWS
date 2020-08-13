<?php
if(!empty($_POST['name'])) {
    header('Location:Location:http://xn----0tbbccbgig.xn--p1ai/fail.php');
}
else {
    // Адрес, куда отправляем письмо
    $to = 'strop.opt@gmail.com,top-in-web@yandex.ru';
    // Получаем данные от пользователя
    // Все данные обязательно нужно проверять на правильность!
    $url = $_SERVER['HTTP_REFERER'];
    $date = date('d.m.Y G:i:s');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $name = filter_input(INPUT_POST, 'inpt1', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $tid = filter_input(INPUT_POST, 'tid', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

    $options = "
        <p>Дата: <b>$date</b></p>
        <p>Тема: <b>$tid</b></p>
        <p>Имя: <b>$name</b></p>
        <p>Телефон: <b>$number</b></p>
        <p>E-mail: <b>$email</b></p>
        <p>Сообщение: <b>$message</b></p>
        $url";

    $the_file = '';
    //Если пользователь выбрал файл для отправки
    if (!empty($_FILES['fileforsending']['tmp_name'])) {
        // Закачиваем файл
        $path = $_FILES['fileforsending']['name'];
        if (copy($_FILES['fileforsending']['tmp_name'], $path)) {
            $the_file = $path;
        }
    }
    // Если есть прикреплённый файл, то заголовки чуть другие.
    // Поэтому, в зависимости от того, отправил ли пользователь файл,
    // выбираем, что делать дальше
    $headers = null;
     
    if (empty($the_file)) {
        // эта часть кода отвечает за отправку сообщений без вложений
        // собираем заголовки
        $headers = array();
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-type: text/html; charset=UTF-8";
        $headers[] = "From: admin@stropopt.ru";
        $headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
        $headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
        $headers[] = "Subject: Заявка с сайта СтропОпт";
        $headers[] = "X-Mailer: PHP/" . phpversion();
        // собираем текст письма

        $allmsg = "<html><head><title>Обратная связь</title><META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=UTF-8\"></head><body>" . $options . "</body></html>";
        // отправляем
        if (!mail($to, $tid, $allmsg, implode("\r\n", $headers))) {
            header('Location:http://xn----0tbbccbgig.xn--p1ai/fail.php');
        } else {
            header('Location:http://xn----0tbbccbgig.xn--p1ai/success.php');
        }
    } else {
        // эта часть кода отвечает за отправку сообщений с вложениями
        // читаем отправляемый файл в строку
        $fp = fopen($the_file, "r");
        if (!$the_file) {
            die("Ошибка отправка письма: Файл $the_file не может быть прочитан.");
        }
        $file = fread($fp, filesize($path));
        fclose($fp);
        // удаляем временный файл
        unlink($path);
        // собираем текст письма

        $allmsg = "<html><head><title>Обратная связь</title><META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=UTF-8\"></head><body>" . $options . "</body></html>";
        // генерируем разделитель
        $boundary = "--" . md5(uniqid(time()));
        // собираем заголовки
        $headers = array();
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "From: admin@stropopt.ru";
        $headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
        $headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
        $headers[] = "Subject: Заявка с сайта СтропОпт";
        $headers[] = "X-Mailer: PHP/" . phpversion();
        $headers[] = "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
        // собираем текст письма + приложенынй файл
        $multipart = array();
        $multipart[] = "--$boundary";
        $multipart[] = "Content-Type: text/html; charset=UTF-8";
        $multipart[] = "Content-Transfer-Encoding: Quot-Printed\r\n";
        $multipart[] = "$allmsg\r\n";
        $multipart[] = "--$boundary";
        $multipart[] = "Content-Type: application/octet-stream";
        $multipart[] = "Content-Transfer-Encoding: base64";
        $multipart[] = "Content-Disposition: attachment; filename = \"" . $path . "\"\r\n";
        $multipart[] = chunk_split(base64_encode($file));
        $multipart[] = "--$boundary";
        // отправляем
        if (!mail($to, $tid, implode("\r\n", $multipart), implode("\r\n", $headers))) {
            header('Location:http://xn----0tbbccbgig.xn--p1ai/fail.php');
        } else {
            header('Location:http://xn----0tbbccbgig.xn--p1ai/success.php');
        }
    }
}
?>