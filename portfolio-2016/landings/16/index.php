<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
	<title>Цемент</title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="js/jquery.js" type="text/javascript"></script>

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="//cdnjs.bootcss.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<![endif]-->

<!-- Плавный скрол контента -->
<script type="text/javascript" src="js/smoothscroll.js"></script>
	
<!-- Всплывающие окна -->	
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script src="js/for_fancybox.js" type="text/javascript"></script>


</head>
<body>
	<?php include('blocks/header.php');?>
	<?php include('blocks/content.php');?>
	<?php include('blocks/footer.php');?>
	
	
	
<!--заказ звонка-->
<div id="inline1" style="display:none;">
	<div class="popup">
				<h2>Заказать звонок</h2>
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ звонка">
		<input name="name" type="text" tabindex="1" placeholder="Введите Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Введите Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>
	
	
	
	
	
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter30411222 = new Ya.Metrika({id:30411222,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/30411222" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>