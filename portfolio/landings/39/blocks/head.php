<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<? include("blocks/fancybox.php");?>
<script>
          function hide()
               {
                    var win = document.getElementById("win");
                    win.style.display = "none";
               }
               setTimeout("hide()", 3400);
</script>
<script type="text/javascript" src="js/script.js"></script>
 <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	</script>
	 <script type="text/javascript">
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 97
                    }, 1500,'easeInOutExpo');
                    /*
                    если вы не хотите использовать эффект:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
        </script>


