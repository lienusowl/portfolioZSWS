<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type="text/javascript" src="js/script.js"></script>



<script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.3"></script>
<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />


<script type="text/javascript" src="js/fancybox.js"></script>
<!--нижний бар-->
<script>
jQuery(function(f){
    var element = f('.bottom');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 0 ? 'In': 'Out')](800);           
    });
}); 
</script>
<script type="text/javascript" src="js/menu-active.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


<script type="text/javascript" src="js/smoothscroll.js"></script>

