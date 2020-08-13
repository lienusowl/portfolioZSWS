<style>.someclass {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #fff;
z-index: 5000;
}
.someclass .loading {

position: absolute;
    top: 0%;
    left: 37%;
width: 500px;
height: 600px;

z-index: 5001;
}
</style>
<script>
jQuery(function(cash) {
	$(window).load(function () {
		$(".someclass").fadeOut(900);
	});
});
</script>
<!--<div class="someclass">
 <div class="loading">

  <img src="img/loader.gif">
 </div>
</div>-->
