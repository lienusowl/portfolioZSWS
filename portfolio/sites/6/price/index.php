<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<? $a = file_get_contents("http://www.top-in-web.ru/price/blocks/head.php"); echo ($a); ?>
<? $a = file_get_contents("http://www.top-in-web.ru/price/blocks/meta.php"); echo ($a);?>
</head>
<body>

<? $a = file_get_contents("http://www.top-in-web.ru/price/blocks/header.php"); echo ($a);?>
<? $a = file_get_contents("http://www.top-in-web.ru/price/blocks/content.php"); echo ($a);?>
<? $a = file_get_contents("http://www.top-in-web.ru/blocks/footer.php"); echo ($a);?>
<? $a = file_get_contents("http://www.top-in-web.ru/blocks/popup.php"); echo ($a);?>
</body>
</html>