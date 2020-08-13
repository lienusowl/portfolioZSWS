<link rel="stylesheet" href="css/animations2.css">
<script>
$(window).scroll(function(){
    $('.zakaz-box').toggleClass('fadeInDown', $(this).scrollTop() > 6620);
});

$(window).scroll(function(){
    $('.work-box').toggleClass('flipInY', $(this).scrollTop() > 7420);
	});
	$(window).scroll(function(){
    $('.work-box').toggleClass('visible-b', $(this).scrollTop() > 7420);
	});
</script>