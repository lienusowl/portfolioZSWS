<?php
session_start();
//session_destroy();

if($_SESSION['price'] == '')
	$_SESSION['price'] = 0;

if(!isset($_SESSION['itemcount']))
	$_SESSION['itemcount'] = 0;

/*
echo '<pre>';
print_r ($_SESSION);
echo '</pre>';
*/



function getPositions()
{
	for($id = 1; $id < $_SESSION['position']['id']; $id++)
	{		
		if($_SESSION['position'][$id]['title'] != '')
		{
			echo "
				<div class=\"position\" data-id=\"$id\">
					<!--<a href=\"#\" class=\"position-delete\" data-id=\"$id\"></a>-->
					<a href=\"#\" class=\"position-delete\" data-id=\"$id\"></a>
					
					<ul>
						<li>
							<span class=\"title\">
								{$_SESSION['position'][$id]['title']}
							</span>
							<span class=\"netto\">
								{$_SESSION['position'][$id]['netto']}
							</span>
							<span class=\"price\">
								{$_SESSION['position'][$id]['price']}&#8399;
							</span>
						</li>
						<li>
							<div class=\"counter\">
								<span class=\"plus\" data-id=\"$id\"></span>
								<span class=\"count\">{$_SESSION['position'][$id]['count']}</span>
								<span class=\"minus\" data-id=\"$id\"></span>
							</div>
						</li>
					</ul>
				</div>
			";
		}
	}
}

?>