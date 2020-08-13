<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/lightbox.min.css"/>
<script src="js/lightbox.js"></script>
<script src="js/feedback.js"></script>
<script src="js/owl.carousel.min.js"></script>
<link rel="stylesheet" href="css/owl.carousel.min.css"/>
<script src="js/owl.js"></script>

<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
      // custom formatting example
     

     

      // another custom callback for counting to infinity
      $('#infinity1').data('countToOptions', {
        onComplete: function (value) {
          count.call(this, {
            from: value,
            to: value + 119
          });
        }
      });

        // another custom callback for counting to infinity
      $('#infinity2').data('countToOptions', {
        onComplete: function (value) {
          count.call(this, {
            from: value,
            to: value + 11
          });
        }
      });

        // another custom callback for counting to infinity
      $('#infinity3').data('countToOptions', {
        onComplete: function (value) {
          count.call(this, {
            from: value,
            to: value + 3
          });
        }
      });

        // another custom callback for counting to infinity
      $('#infinity4').data('countToOptions', {
        onComplete: function (value) {
          count.call(this, {
            from: value,
            to: value + 4
          });
        }
      });

       


      // start all the timers
      $('.timer').each(count);

     

      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
  </script>





</body>
