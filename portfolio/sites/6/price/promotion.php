<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<? $a = file_get_contents("http://modx/price/blocks/head.php"); echo ($a); ?>
<? $a = file_get_contents("http://modx/price/blocks/promotion/meta.php"); echo ($a);?>
</head>
<body>

<? $a = file_get_contents("http://modx/price/blocks/promotion/header.php"); echo ($a); ?>
<? $a = file_get_contents("http://modx/price/blocks/promotion/content.php"); echo ($a); ?>
<? $a = file_get_contents("http://modx/blocks/footer.php"); echo ($a); ?>
<? $a = file_get_contents("http://modx/blocks/popup.php"); echo ($a); ?>
</body>
</html>