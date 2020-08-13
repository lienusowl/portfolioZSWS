<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />




<!-- для больших картинок на главной -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
		$(function() {
$(".slideBox").hover(function(){
	$(this).find("img").stop().animate({
		top:-325
	}, 500);
}, function(){
	$(this).find("img").stop().animate({
		top:0
	}, 500);
});
		});

	</script>
<!-- для больших картинок на главной -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/cycle.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>

<link href="media.css" rel="stylesheet" type="text/css" />
