<!--оставить заявку-->
<div class="modal fade modal-feedback" id="zapis" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
				<h4 class="modal-title" id="refModalLabel">Оставить заявку</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post" id="form-call">
                	<input type="hidden" name="tid" value="Оставить заявку">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input type="text" class="name form-control" id="inpt1" placeholder="Ваше имя*" name="inpt1" required="">
					</div>
					<div class="form-group">
						<input type="tel" class="number form-control" id="number" placeholder="Ваш телефон*" name="number" required="">
					</div>
					<div class="form-group">
						<input type="email" class="email form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
					<div class="clear"></div>
                	<button type="submit" class="btn" id="send" name="submit">Отправить заявку</button>
					<div class="clear"></div>
                </form>
			</div>
		</div>
	</div>
</div>
<!--обратный звонок-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
				<h4 class="modal-title" id="refModalLabel">Обратный звонок</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post" id="form-call">
                	<input type="hidden" name="tid" value="Обратный звонок">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input type="text" class="name form-control" id="inpt1" placeholder="Ваше имя*" name="inpt1" required="">
					</div>
					<div class="form-group">
						<input type="tel" class="number form-control" id="number" placeholder="Ваш телефон*" name="number" required="">
					</div>
					<div class="form-group">
						<input type="email" class="email form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
					<div class="clear"></div>
                	<button type="submit" class="btn" id="send" name="submit">Отправить заявку</button>
					<div class="clear"></div>
                </form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-feedback" id="vopros" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
				<h4 class="modal-title" id="refModalLabel">Задать вопрос</h4>
			</div> 
			<div class="modal-body"> 
				<form class="form-horizontal" action="order.php" method="post" id="form-call">
                	<input type="hidden" name="tid" value="Задать вопрос">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input type="text" class="name form-control" id="inpt1" placeholder="Ваше имя*" name="inpt1" required="">
					</div>
					<div class="form-group">
						<input type="tel" class="number form-control" id="number" placeholder="Ваш телефон*" name="number" required="">
					</div>
					<div class="form-group">
						<input type="email" class="email form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
					<div class="form-group">
						<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
					</div>
					<div class="clear"></div>
                	<button type="submit" class="btn" id="send" name="submit">Отправить заявку</button>
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
		<img src="assets/template/images/logo.png">
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
		<img src="assets/template/images/logo.png">
      </div>
    </div>
  </div>
</div>