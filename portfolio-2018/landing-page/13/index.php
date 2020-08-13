<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>Золотое право</title>
</head>
<body>
<?php include("blocks/top.php");?>
<?php include("blocks/header.php");?>
<?php include("blocks/thanks.php");?>
<div class="modal fade modal-feedback" id="test-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			<?php include("blocks/test.php");?>
		</div>
	</div>
</div>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>