<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<title>МКиФ</title>
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






<style type="text/css">
    .next0 {display:none;opacity:0;transition:all .3s;}
    .next1 {display:block;opacity:1;transition:all .3s;}
    .next00 {display:none !important;}
    .next-none{
        left: 0;
        color: #1f1f1f;
        text-transform: uppercase;
        padding: 2.4rem 3rem 1.7rem;
        max-width: 29rem;
        border-radius: 5rem;
        box-shadow: 0 5px 0 #9c8b71;
        position: relative;
        z-index: 3;
        text-align: center;
        border: 0;
        font-size: 14px;
        transition: .2s;
        position: relative;
        display: block;
        top: 0;
        width: 100%;
        background: #eee;
        z-index: 1;
    }
</style>
<script language="javascript" type="text/javascript">
    function show1() {
        document.getElementById('next1').classList.add('next1');
        document.getElementById('next-none1').classList.add('next00');
    }
    function show2() {
        document.getElementById('next2').classList.add('next1');
        document.getElementById('next-none2').classList.add('next00');
    }
    function show3() {
        document.getElementById('next3').classList.add('next1');
        document.getElementById('next-none3').classList.add('next00');
    }
    function show4() {
        document.getElementById('next4').classList.add('next1');
        document.getElementById('next-none4').classList.add('next00');
    }
    function show5() {
        document.getElementById('next5').classList.add('next1');
        document.getElementById('next-none5').classList.add('next00');
    }
    function show6() {
        document.getElementById('next6').classList.add('next1');
        document.getElementById('next-none6').classList.add('next00');
    }
    function show7() {
        document.getElementById('next7').classList.add('next1');
        document.getElementById('next-none7').classList.add('next00');
    }
</script>






















</body>
</html>