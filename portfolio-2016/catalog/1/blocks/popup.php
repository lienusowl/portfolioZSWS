<div class="modal fade bs-example-modal-sm" id="refModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-sm popup">
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Сделать заказ</h4>
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
					<div class="col-sm-12">
					 <textarea cols="30" rows="4" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
						<input class="button1" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>