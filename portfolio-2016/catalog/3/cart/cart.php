<?php
session_start();


if(!isset($_SESSION['titles']))
	$_SESSION['titles'][$_SESSION['position']['id']] = '';	

if(!isset($_SESSION['position']['id']))
	$_SESSION['position']['id'] = 1;
	
if(!isset($_SESSION['position'][$_SESSION['position']['id']]['count']))
	$_SESSION['position'][$_SESSION['position']['id']]['count'] = 1;

$title = trim($_POST['title']);
$price = trim($_POST['price']);
$netto = trim($_POST['netto']);
$count = trim($_POST['count']);


//если такая позиция уже добавлена
if(!in_array($title, $_SESSION['titles']))
{
	$position = "
	<div class=\"position\" data-id=\"{$_SESSION['position']['id']}\">
		
		<!--<a href=\"#\" class=\"position-delete\" data-id=\"{$_SESSION['position']['id']}\"></a>-->
		<a href=\"#\" class=\"position-delete\" data-id=\"{$_SESSION['position']['id']}\"></a>
		
		<ul>
			<li>
				<span class=\"title\">
					$title
				</span>
				<span class=\"netto\">
					$netto
				</span>
				<span class=\"price\">
					$price&#8399;
				</span>
			</li>
			<li>
				<div class=\"counter\">
					<span class=\"plus\" data-id=\"{$_SESSION['position']['id']}\"></span>
					<span class=\"count\">$count</span>
					<span class=\"minus\" data-id=\"{$_SESSION['position']['id']}\"></span>
				</div>
			</li>
		</ul>
	</div>
	";

	//записываем данные о позиции заказа
	$_SESSION['position'][$_SESSION['position']['id']]['title'] = $title;
	$_SESSION['position'][$_SESSION['position']['id']]['price'] = $price;
	$_SESSION['position'][$_SESSION['position']['id']]['netto'] = $netto;
	$_SESSION['position'][$_SESSION['position']['id']]['count'] = $count;

	
	$_SESSION['titles'][$_SESSION['position']['id']] = $title;
	
	//прибавляем счетчик позиций
	$_SESSION['position']['id'] += 1;
	
	//кол-во позиций в корзине
	$_SESSION['itemcount'] += 1;
	

	echo $position;
}
else
{
	echo 0;
}

?>