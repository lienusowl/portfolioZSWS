<?php
session_start();

$id = intval($_POST['id']);
$count = intval($_POST['count']);

$_SESSION['position'][$id]['count'] = $count;

?>