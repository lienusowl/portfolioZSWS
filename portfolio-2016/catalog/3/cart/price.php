<?php
session_start();

$price = intval($_POST['price']);

$_SESSION['price'] = $price;

echo $_SESSION['itemcount']; //кол-во позиций заказа

?>