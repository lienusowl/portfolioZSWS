<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<? include("blocks/fancybox.php");?>
<!-- <script type="text/javascript">
            $(function() {
                $('ul.menu a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
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
<script>
  var h_hght = 100; // высота шапки
  var h_mrg = 0;     // отступ когда шапка уже не видна
  $(function(){
   $(window).scroll(function(){
      var top = $(this).scrollTop();
      var elem = $('#h_menu');
      if (top+h_mrg < h_hght) {
       elem.css('top', (h_hght-top));
      } else {
       elem.css('top', h_mrg);
      }
    });
  });
</script>-->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />



