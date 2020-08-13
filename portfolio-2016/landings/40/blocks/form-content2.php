<div class="container-fluid form-content red mt-40">
	<div class="container">
		<div class="col-md-4">
			<p class="big mt-40"><i class="fa fa-clock-o" aria-hidden="true"></i>Таймер</p>
		</div>
		<div class="col-md-8">
			<form class="form-horizontal mt-10" action="order.php" method="post">
				<input type="hidden" name="tid" value="заявка на вызов замерщика">
			  <div class="form-group">
				<div class="col-sm-12">
				  <input type="text" class="form-control" id="number" placeholder="Введите Ваш номер телефона" name="number" required="">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-8">
					<p class="form-t">Оставив заявку до «30.04.2016»<br>вы получите в подарок монтаж и видеоролик с логотипом вашей компании БЕСПЛАТНО!</p>
				</div>
				<div class="col-sm-4">
					<button type="submit" name="submit" id="send2">Отправить</button>
				</div>
			  </div>
			</form>
		</div>
	</div>
</div>