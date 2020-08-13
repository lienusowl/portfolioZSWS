<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<style type="text/css">
.example {float:left;/*cursor:pointer*/}
.pics {  
    height: 380px;
    width:  780px;  
    padding: 0;  
    margin:  0;  
} 
.pics img {  
    top:  0; 
    left: 0 
} 
</style>
<script type="text/javascript">
$(document).ready(function() {
$('#uncover').cycle({ 
    fx:      'uncover', 
    speed:    1500, 
    timeout:  3500
});
});
</script>


		
		<div class="example">
<div id="uncover" class="pics">
<div><p>Кухни</p><img src="files/index/slides/1.jpg"></div>
<div><p>Гостинные</p><img src="files/index/slides/2.jpg"></div>
<div><p>Спальни</p><img src="files/index/slides/3.jpg"></div>
<div><p>Детские</p><img src="files/index/slides/4.jpg"></div>
<div><p>Торговое оборудование</p><img src="files/index/slides/5.jpg"></div>
</div>
</div>
		
		