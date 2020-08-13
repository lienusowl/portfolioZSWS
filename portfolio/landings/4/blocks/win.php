<div id="win">
<div id="overlay" style="opacity: 0.8; display: block;"></div>
<div id="win1">
	
			<br>
			<?php if(isset($hasError)) { //Если найдены ошибки ?>
			<p class="error" style="color: #cc0000;font-size: 21px;">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
			<div style="display:none;">
			<iframe  src="error.html"  frameborder="0" allowfullscreen="" param name="wmode" value="transparent" embed wmode="transparent" allowTransparency="true" scrolling="no"></iframe>
			</div>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
			<h1>Спасибо!</h1><br><br>
			<p>Благодарим за оставленную заявку,<br>наши специалисты свяжутся с Вами<br>в ближайшее время.</p>
			<br><h2 class="red">Хорошего дня!</h2><br>
			<div style="display:none;">
			<iframe  src="win.html"  frameborder="0" allowfullscreen="" param name="wmode" value="transparent" embed wmode="transparent" allowTransparency="true" scrolling="no"></iframe>
			</div>
			<?php } ?><br>
		</div>
		</div>
		
		<script>
          function hide()
               {
                    var win = document.getElementById("win");
                    win.style.display = "none";
               }
               setTimeout("hide()", 3400);
		</script>
		
<script language="JavaScript"> 
  window.location.href = "index.html"
</script>