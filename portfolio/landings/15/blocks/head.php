<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<? include("blocks/fancybox.php");?>
<script>
          function hide()
               {
                    var win = document.getElementById("win");
                    win.style.display = "none";
               }
               setTimeout("hide()", 4400);
</script>


<script src="js/jquery-ui-personalized-1.5.3.packed.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#rotator > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 160000000, true);
	});
</script>