<?php
session_start();

$id = intval($_POST['id']);

unset($_SESSION['position'][$id]['title']);
unset($_SESSION['position'][$id]['price']);
unset($_SESSION['position'][$id]['netto']);
unset($_SESSION['position'][$id]['count']);
unset($_SESSION['position'][$id]);

//sort($_SESSION['position']);

unset($_SESSION['titles'][$id]);

//кол-во позиций в корзине
$_SESSION['itemcount'] -= 1;


?>