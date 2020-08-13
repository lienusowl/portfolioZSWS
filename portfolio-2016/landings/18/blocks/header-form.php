<h3>СКИДКА 70%</h3>
<form class="form-horizontal" action="order.php" method="post">
		<input type="hidden" name="tid" value="Обратный звонок">
	  <div class="form-group">
		<div class="col-sm-12">
		  <input type="text" class="form-control" id="name" placeholder="Введите Ваше имя" name="name" required="">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-12">
		  <input type="text" class="form-control" id="number" placeholder="Введите Ваш телефон" name="number" required="">
		</div>
	  </div>
		<div class="form-group">
		<div class="col-sm-12">
		  <input type="text" class="form-control" id="adress" placeholder="Введите адрес доставки" name="adress">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-12">
		 <div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="dropdownMenu1">
			Выберите часы
			<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li><a href="#">Часы hublot big bang чёрные + подарок</a></li>
			<li><a href="#">Часы hublot big bang зелёные + подарок</a></li>
		  </ul>
		</div>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-12">
			<input class="btn btn-default" id="send" type="submit" name="submit" value="Заказать" id="send">
		</div>
	  </div>
</form>
<div class="clear"></div>
<? include("blocks/count.php");?>