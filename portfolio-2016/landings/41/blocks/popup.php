<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title" id="refModalLabel">Забронировать карту</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post" id="form-call">
                	<input type="hidden" name="tid" value="Забронировать карту">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя*" name="inpt1" required="">
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" id="number" placeholder="Ваш телефон*" name="number" required="">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
					<div class="form-group">
						<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
					<div class="clear"></div>
                	<button type="submit" class="btn btn-icon" id="send" name="submit">Отправить заявку</button>
					<div class="clear"></div>
                </form>
			</div>
		</div>
	</div>
</div>

<!--Записаться на бесполатный пробный урок-->
<div class="modal fade modal-feedback" id="free" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title" id="refModalLabel">Записаться на бесполатный пробный урок</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post" id="form-call">
                	<input type="hidden" name="tid" value="Записаться на бесполатный пробный урок<">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="inpt1" placeholder="Ваше имя*" name="inpt1" required="">
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" id="number" placeholder="Ваш телефон*" name="number" required="">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
					<div class="form-group">
						<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
					<div class="clear"></div>
                	<button type="submit" class="btn btn-icon" id="send" name="submit">Отправить заявку</button>
					<div class="clear"></div>
                </form>
			</div>
		</div>
	</div>
</div>

<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h4 class="modal-title">Спасибо за Вашу заявку!</h4>
      </div>
      <div class="modal-body">
        <p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
		<br>
		<img src="img/logo.png">
      </div>
    </div>
  </div>
</div>
<!-- Неудачная отправка -->
<div class="modal fade" id="fail-form" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h4 class="modal-title">Заявка не отправлена</h4>
      </div>
      <div class="modal-body">
        <p>Проверьте, пожалуйста, правильность<br>заполнения всех полей.</p>
		<br>
		<img src="img/logo.png">
      </div>
    </div>
  </div>
</div>