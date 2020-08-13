<div class="a2-form">
	<p class="small">Для бесплатного вызова мастера-<br>консультанта заполните форму</p>
	<form class="form-horizontal" action="order.php" method="post">
		<input type="hidden" name="tid" value="Вызов мастера">
	  <div class="form-group">
		<div class="col-sm-12">
		  <input type="text" class="form-control" id="name" placeholder="Введите Ваше имя*" name="name" required="">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-12">
		  <input type="text" class="form-control" id="phone" placeholder="Введите Ваш телефон*" name="phone" required="">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-12">
			<input class="btn btn-default" id="send" type="submit" name="submit" value="Вызвать мастера" id="send">
		</div>
	  </div>
	</form>
</div>