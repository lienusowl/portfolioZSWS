<section id="header">
	<div class="container">
		<?php include("blocks/nav.php");?>
		<h1 class="header-slogan">
			Краски, лаки, растворители, <br>строительные материалы
		</h1>
		<div class="search-box">
		    <form class="search-form" action="#" method="[[+method]]"> 
		        <input type="text" name="[[+searchIndex]]" id="[[+searchIndex]]" class="form-control" placeholder="Введите название продукции для поиска..."/>   
		        <input type="hidden" name="id" value="[[+landing]]" />
		        <button type="submit" value="[[%sisea.search? &namespace=`sisea` &topic=`default`]]"><i class="fa fa-search"></i></button>
		    </form>
		</div>
		<!--<div class="scroll-down">
			<a href="#category-index-top smooth-a"><img src="assets/images/index/header/scroll-down.png" alt=""></a>
		</div>-->
	</div>
</section>