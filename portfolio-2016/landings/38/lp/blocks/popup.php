<!--оставить заявку-->
<div class="modal fade" id="nav-rasch" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
				<h4 class="modal-title" id="refModalLabel">Расчёт ангара за 20 минут!</h4>
			</div> 
			<div class="modal-body"> 
				<p>Отправьте заявку и мы сделаем предварительный расчет строительства ангара за 20 минут!</p>
				<form class="form-horizontal" action="order.php" method="post">
					<input type="hidden" name="tid" value="Расчёт ангара за 20 минут!">
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
					<p class="small">*обязательные поля для заполнения</p>
                	<input class="btn" id="send" type="submit" name="submit" value="Отправить">
                </form>
			</div>
		</div>
	</div>
</div>

<!--Задать вопрос-->
<div class="modal fade" id="question" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
				<h4 class="modal-title" id="refModalLabel">Задать вопрос</h4>
			</div> 
			<div class="modal-body"> 
				<p>Задайте свой вопрос и через 15 минут Вам ответит наш менеджер</p>
				<form class="form-horizontal" action="order.php" method="post">
                	<input type="hidden" name="tid" value="Задать вопрос">
					<div class="form-group for-name">
						<input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="inpt1" id="inpt1" placeholder="Ваше имя*" required="">
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" id="number" placeholder="Ваш телефон*" name="number" required="">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" placeholder="Ваш Email" name="email">
					</div>
					<div class="form-group">
						<textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение" required=""></textarea>
					</div>
					<div class="clear"></div>
					<p class="small">* обязательные поля для заполнения</p>
                	<input class="btn" id="send" type="submit" name="submit" value="Отправить">
                </form>
			</div>
		</div>
	</div>
</div>