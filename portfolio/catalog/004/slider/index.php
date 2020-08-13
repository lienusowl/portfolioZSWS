<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Skippr. A jQuery plugin for creating tasteful slideshows.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="skippr/css/jquery.skippr.css">
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



      

        <div class="hero">

            <div id="random2">
                
                <div style="background-image: url(img/s/1.jpg)"></div>
                <div style="background-image: url(img/s/2.jpg)"></div> 
                <div style="background-image: url(img/s/3.jpg)"></div>                   
                <div style="background-image: url(img/s/4.jpg)"></div>
            </div>

            <!-- <div id="random">
                <img src="img/test3.jpg">
                <img src="img/test4.jpg">
                <img src="img/test1.jpg">
                <img src="img/test5.jpg">
            </div> -->





            <div class="container">
                <div class="tagline">
                 
                </div>
                
            </div>
           
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="skippr/js/jquery.skippr.js"></script>
        <script>
            $(document).ready(function() {

                $("#random").skippr();
                $("#random2").skippr({
                    navType: 'bubble',
                    autoPlay: true,
                    autoPlayDuration: 3500
                });


            });

        </script>
       

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
