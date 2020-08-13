<!--техническая поддержка-->
<div class="modal fade" id="teh" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Техническая поддержка</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="техническая поддержка">
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
					  <input type="text" class="form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					 <textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
						<input class="btn btn-default" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>

<!--обратный звонок-->
<div class="modal fade" id="zvonok" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Обратный звонок</h4>
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
						<input class="btn btn-default" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="zakaz-header" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
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
					  <input type="text" class="form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					 <textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
						<input class="btn btn-default" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>

<!--Установка светодиодного экрана-->
<div class="modal fade" id="zakaz1" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Установка светодиодного экрана</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Установка светодиодного экрана">
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
					  <input type="text" class="form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					 <textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
						<input class="btn btn-default" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>

<!--Установка бегущей строки-->
<div class="modal fade" id="zakaz2" tabindex="-1" role="dialog" aria-labelledby="refModalLabel" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="refModalLabel">Установка бегущей строки</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Установка бегущей строки">
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
					  <input type="text" class="form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
					 <textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-12">
						<input class="btn btn-default" id="send" type="submit" name="submit" value="Заказать" id="send">
					</div>
				  </div>
			</form>
			</div>
		</div>
	</div>
</div>