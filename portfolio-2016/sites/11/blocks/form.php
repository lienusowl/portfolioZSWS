<form class="popup-form" action="order.php" method="post">
			<!--<input type="hidden" name="tid" value="Задать вопрос">-->
			<fieldset>
				<p>Ваше имя*<br>
				<input name="name" type="text" required="" size="40">
				</p>
			</fieldset>
			<fieldset>
				<p>Контактный телефон*<br>
				<input type="text" name="number" size="40" required="">
				</p>
			</fieldset>
			<fieldset>
				<p>Комментарий<br>
				<textarea cols="40" rows="10" name="comment" id="comment"></textarea>
				</p>
			</fieldset>
			<fieldset>
				<p>
				<input id="send" type="submit" name="submit" value="Отправить">
				</p>
			</fieldset>
		</form>