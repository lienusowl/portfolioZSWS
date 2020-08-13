<!--Обратный звонок-->
<div class="modal fade" id="refModal" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog  popup"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Заказать обратный звонок</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Обратный звонок">
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="name" placeholder="Ваше имя" name="name" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="number" placeholder="Ваш телефон" name="number" required="">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-6">
						<input class="button2" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
					<div class="col-sm-6">
						<p class="number">8 (3952) 99-77-88</p>
						<p class="time">ежедневно с 10:00 до 22:00</p>
					</div>
					
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>