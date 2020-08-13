<script type="text/javascript" charset="utf-8">
		$(function () { // run this code on page load (AKA DOM load)

			/* set variables locally for increased performance */
			var scroll_timer;
			var displayed = false;
			var $message = $('#message');
			var $window = $(window);
			var top = $(document.body).children(0).position().top;

			/* react to scroll event on window */
			$window.scroll(function () {
				window.clearTimeout(scroll_timer);
				scroll_timer = window.setTimeout(function () { // use a timer for performance
					if($window.scrollTop() <= top) // hide if at the top of the page
					{
						displayed = false;
						$message.fadeOut(500);
					}
					else if(displayed == false) // show if scrolling down
					{
						displayed = true;
						$message.stop(true, true).fadeIn(500).click(function () { $message.fadeOut(500); });
					}
				}, 100);
			});
			$('#top-link').click(function(e) { 
				e.preventDefault();
				$.scrollTo(0,300); 
			   });
		});
	</script>
	
	<style>
	
		
		.box {background-color: #ddddff; border-top: 1px solid #e9e9e9; border-bottom: 1px solid #e9e9e9; padding: 10px;}
		
		.container {padding: 0 0 70px 0;}
		
		
		#message
		{
			/* display: block before hiding */
			display: block;
			display: none;

			/* link is above all other elements */
			z-index: 999; 

			/* link doesn't hide text behind it */
			opacity: .8;

			/* link stays at same place on page */
			position: fixed;

			/* link goes at the bottom of the page */
			top: 98%;
			margin-top: -80px; /* = height + preferred bottom margin */

			/* link is centered */
			left: 95%;
			margin-left: -80px;

			/* round the corners (to your preference) */
			-moz-border-radius: 24px;
			-webkit-border-radius: 24px;

			/* make it big and easy to see (size, style to preferences) */
			width: 100px;
			line-height: 48px;
			height: 100px;
			padding: 10px;
			
			font-size: 24px;
			text-align: center;
		}
		
		#message a { color: #fff; }
	
	</style>
<div id="message"><a href="#top" id="top-link"><img src="img/up.png"></a></div>