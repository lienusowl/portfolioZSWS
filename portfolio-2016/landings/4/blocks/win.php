<div id="win">
<div id="overlay" style="opacity: 0.8; display: block;"></div>
<div id="win1">
	
			
			<?php if(isset($hasError)) { //Если найдены ошибки ?>
			<p class="error" style="color: #cc0000;font-size: 21px;">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
			<div style="display:none;">
			</div>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
			<h2>Спасибо!</h2>
			<p>Благодарим за оставленную заявку,<br>наши специалисты свяжутся с Вами<br>в ближайшее время.</p>
			
			<div style="display:none;">
			</div>
			<?php } ?><br>
		</div>
		</div>