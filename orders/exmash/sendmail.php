<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


<title>Заявка отправлена</title>
</head>
<?
$mail = $_POST["order"];
$subject = htmlentities($_GET["subj"]) . "/ Заказ с сайта Exmash(".date("d.m.Y h:i").")";
$mail = strip_tags($mail, "<b><div><table><tbody><tr><td><html><body><style><h1><th><br>");
$mail = str_replace("<td></td>", "",$mail);
$mail = preg_replace('/<div[^>]+class="basket_num_buttons"[^>]*>.*?<\/div>/i', '', $mail);
$mail = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i",'<$1$2>', $mail);

$template = "<html>
<body>
<h1>".$subject."</h1>
".$mail."</body></html>";

$template .= '<hr>' . $_SERVER['HTTP_REFERER'];

// Clear form


$head = "<tr align='left'><th>Название</th><th>Цена</th><th>Кол-во</th></tr>";

$template = str_replace ( "<tbody>" ,"<tbody>".$head, $template);

$domain = "admin@exmash.com";

$from = "admin@exmash.com";
$headers = "From: " . $from . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//$success = mail("info@st43.ru,top-in-web@yandex.ru", $subject, $template, $headers);
$success = mail("info@st43.ru,top-in-web@yandex.ru", $subject, $template, $headers);
include("win.php");

?>
<body>
<script>
cart.clearBasket();
</script>
</body>
</html>
