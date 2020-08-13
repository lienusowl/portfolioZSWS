<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<?php include("blocks/head.php");?>
<script src="assets/template/js/jquery.min.js"></script>
<title>Зерно 2.0 – Ваш личный эксперт в хранении зерна. </title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:image" content="">
<meta property="og:title" content="Зерно 2.0 – Ваш личный эксперт в хранении зерна.">
<meta property="og:description" content="">
</head>
<body class="index-page">
<script>
/*$(document).ready(function(){
	$(window).on("load", function() {
	    preloaderFadeOutTime = 500;
	    function hidePreloader() {
	      var preloader = $('.pre-loader');
	      preloader.fadeOut(preloaderFadeOutTime);
	    }
	    hidePreloader();
	    $(".animate").addClass("animated delay-1s bounceInLeft");
	    $(".animate2").addClass("animated delay-2s bounceInLeft");
	  });
});*/
</script>
<!--
<div class="pre-loader">
	<div class="wrap">
		<div class="loading">
			<div class="bounceball"></div>
		</div>
	</div>
</div>
-->
<div class="main-slider">
	<div class="section fp-auto-height-responsive bg1" data-anchor="section1" id="section1">
		<?php include("blocks/header.php");?>
	</div>
	<!--<div class="section fp-auto-height-responsive" data-anchor="section2">
		<?php //include("blocks/process.php");?>
	</div>-->
	<div class="section fp-auto-height bg2" data-anchor="section2">
		<?php include("blocks/reasons.php");?>
	</div>
	<div class="section fp-auto-height-responsive" data-anchor="section3">
		
		<?php include("blocks/works.php");?>
	</div>
	<div class="section fp-auto-height-responsive bg3" data-anchor="section4">
			<?php include("blocks/experts.php");?>
	</div>
	<div class="section fp-auto-height-responsive bg4" data-anchor="section5">
		<?php include("blocks/form.php");?>
		<?php include("blocks/footer.php");?>
		<?php //include("blocks/contacts.php");?>
	</div>
</div>
<?php include("blocks/popup.php");?>
<?php include("blocks/scripts.php");?>
<?php include("blocks/metrika.php");?>
</body>
</html>