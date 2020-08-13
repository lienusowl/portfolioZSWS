<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript" src="js/for_fancybox.js"></script>

<!--плавный переход меню-->
<script type="text/javascript">
	 $(function() {
               $('#menu a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
              scrollTop: top -90
            }, 1500);
            });
            });
</script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />





