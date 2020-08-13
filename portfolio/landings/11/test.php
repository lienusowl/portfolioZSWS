<?
$db = mysql_connect ("localhost","root","");
mysql_select_db("test",$db);

mysql_set_charset( 'utf8' );
?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">
<title>Зелёный кофе с имбирём для похудения</title>
<meta name="description" content="Cайт зелёного кофе с имбирём для похудения">
<meta name="keywords" content="зелёный кофе, зелёный кофе с имбирём, похудение зелёный кофе, купить зелеёный кофе с имбирём, сайт зелёного кофе с имбирём">
<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/flipclock.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/site/site.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<table align="center" width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" align="center" valign="top">Номер заказа</td>
    <td width="20%" align="center" valign="top">ФИО</td>
    <td width="20%" align="center" valign="top">E-mail</td>
	<td width="20%" align="center" valign="top">Сообщение</td>
    <td width="20%" align="center" valign="top">откуда №</td>
    <td width="20%" align="center" valign="top">партнер №</td>
  </tr>
	<?php
$result = mysql_query("SELECT * FROM orders ORDER BY id DESC",$db);
do 
{
printf ("  <tr>
    <td align='right' valign='top'>%s</td>
    <td align='right' valign='top'>%s</td>
    <td align='right' valign='top'>%s</td>
    <td align='right' valign='top'>%s</td>
    <td align='right' valign='top'>%s</td>
    <td align='right' valign='top'>%s</td>
    
  </tr>",$myrow["id"],$myrow["fio"],$myrow["email"], $myrow["message"],$myrow["from"],$myrow["partner"]);
}
while ($myrow = mysql_fetch_array($result));	


	?>
</table>
</body>
</html>