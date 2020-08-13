
	<div class="modal fade bs-example-modal-sm" id="refModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-sm popup">
		<div class="modal-content"> 
			
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			<p class="popup-h">Для того, чтобы записаться на <span>бесплатную тренировку</span>, оставьте свои <span>контактные данные.</span></p>
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Запись">
					<div class="form-group">
						<label class="col-sm-3 control-label">Имя  </label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="name" placeholder="" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Телефон  </label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="number" placeholder="" required="">
						</div>
					</div>
					
				 
				  <div class="form-group">
					<div class="col-sm-12">
						<input class="btn btn-default" id="send" type="submit" name="submit" value="Записаться" id="send">
					</div>
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>