<section id="top">
	<div class="line"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-7 logo">
				<img src="assets/template/img/logo.png" alt="">
			</div>
			<div class="col-md-4 menu">
				<? include("blocks/nav.php");?>
			</div>
			<div class="col-md-2">
				<div class="search-box">
				    <form class="search-form" action="search-result.html" method="get"> 
				        <input type="text" name="search" id="search" value="" class="form-control" placeholder=" Поиск...">   
				        <input type="hidden" name="id" value="25">
				        <button type="submit" value="Поиск"><i class="fa fa-search"></i></button>
				    </form>
				</div>
			</div>
			<div class="col-md-3 phone">
				<div class="phone-number bold">
					+380 (66) 144-21-76
					<img src="assets/template/img/phone.png" alt="">
				</div>
				<a href="#" data-toggle="modal" data-target="#call" class="a-call">Перезвонить мне</a>
			</div>
		</div>
	</div>
</section>