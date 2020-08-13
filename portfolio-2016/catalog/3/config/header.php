<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="img/favicon.png"/>

    <title>Шашлык</title>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script src="fancybox/jquery.fancybox.js"></script>
	<script src="js/custom.js"></script>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css" />
	<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin-ext,cyrillic' rel='stylesheet' type='text/css' />
	
	<script type="text/javascript">
		function loadJS(src, callback) {
		var s = document.createElement('script');
		s.src = src;
		s.async = true;
		s.onreadystatechange = s.onload = function() {
			var state = s.readyState;
			if (!callback.done && (!state || /loaded|complete/.test(state))) {
				callback.done = true;
				callback();
			}
		};
			document.getElementsByTagName('head')[0].appendChild(s);
		}
		
		loadJS('js/freewall.min.js', function() { 
			var wall = new freewall(".items");
			wall.reset({
				selector: '.block',
				animate: true,
				cellW: 230,
				cellH: 230,
				gutterX: 0,
				gutterY: 0,
				onResize: function() {
					wall.refresh();
				}
			});
			
			wall.fitWidth();
		});
	</script>
</head>