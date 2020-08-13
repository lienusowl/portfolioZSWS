<div id="contact-wrapper">
	<form method="post" action="contacts.php#content" id="contactform">
		<div>
		    <label for="name"><strong>Имя</strong></label>
			<input type="text" size="35" name="contactname" id="contactname" value="" class="required" />
		</div>
		<div>
			<label for="email"><strong>Телефон</strong></label>
			<input type="text" size="35" name="number" id="number" value="" class="required" />
		</div>
		<div>
			<label for="message1" style="float:none;width:230px;"><strong>Дополнительная информация:</strong></label>
			<textarea rows="4" cols="31" name="message1" id="message1" class="required"></textarea>
		</div>
	    <input style="cursor:pointer;" type="submit" value="Отправить сообщение" name="submit" />
	</form>
</div>