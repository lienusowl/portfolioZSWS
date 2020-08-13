<?
$email_to='lienusowl@yandex.ru';
$email_to1='111@mail.ru';
$page=$_SERVER['HTTP_REFERER'];
$from = 'shkaf-kupe43.ru <no-replay@shkaf-kupe43.ru>';
$headers = "From: shkaf-kupe43.ru <no-replay@shkaf-kupe43.ru>";
$headers .= "\nReply-To: <no-replay@shkaf-kupe43.ru>";
$headers .= "\nReturn-Path: <no-replay@shkaf-kupe43.ru>";
$headers .= "\nDate: " . date('r');
$headers .= "\nX-Mailer: PHP 5.3";
$headers .= "\nContent-type: text/plain; charset=utf-8 \r\n";

$name = htmlspecialchars($_POST['yourname']);
$phone = htmlspecialchars($_POST['yourphone']);
$request1 = htmlspecialchars($_POST['request']);
if (isset($_POST['submit1'])) {
    $subject = 'Заявка на расчет';
} else if (isset($_POST['submit2'])) {
    $subject = 'Заявка на дизайн-проект';
} else if (isset($_POST['submit3'])) {
    $subject = 'Остались вопросы';
} else if (isset($_POST['submit4'])) {
    $subject = 'Заявка на замер';
}
$message = "Заявка с shkaf-kupe43.ru
Имя: $name
Телефон: $phone
Вопрос: $request1";
mail($email_to, $subject, $message, $headers);
mail($email_to1, $subject, $message, $headers);
//mail($email_to_dop, $subject, $message, $headers);
//mail($email_to_dop1, $subject, $message, $headers);
echo '<script>alert("Спасибо, Ваша заявка принята"); document.location.href = "/";</script>';
?>