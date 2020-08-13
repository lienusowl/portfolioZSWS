<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500,300,900&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
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


<script src="js/sliderf.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				
				$('#carousel span').append('<img src="./img/gui/carousel_glare.png" class="glare" />');
				$('#thumbs a').append('<img src="./img/gui/carousel_glare_small.png" class="glare" />');

				$('#carousel').carouFredSel({
					responsive: true,
					circular: false,
					auto: false,
					items: {
						visible: 1,
						width: 200,
						height: '56%'
					},
					scroll: {
						fx: 'directscroll'
					}
				});

				$('#thumbs').carouFredSel({
					responsive: true,
					auto: false,
					prev: '#prev',
					next: '#next',
					items: {
						visible: {
							min: 2,
							max: 6
						},
						width: 150,
						height: '66%'
					}
				});

				$('#thumbs a').click(function() {
					$('#carousel').trigger('slideTo', '#'+this.href.split('#').pop());
					$('#thumbs a').removeClass('selected');
					$(this).addClass('selected');
					return false;
				});

			});
		</script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	</script>
	 <script type="text/javascript">
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 70
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

<script type="text/javascript" src="swfobject.js"></script>
        <script type="text/javascript">
            swfobject.registerObject("csSWF", "9.0.115", "expressInstall.swf");
        </script>