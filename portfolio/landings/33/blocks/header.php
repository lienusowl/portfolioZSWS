<div id="header">
	<div id="logo"></div>
	
	<div id="phone">
		<img src="img/phone.png">
		<a class="gallery1" href="#inline2" id="button">Заказать звонок</a>
	</div>
</div>

			<?php if(isset($hasError)) { //Если найдены ошибки ?>
			<div id="win"><p class="error" style="color: #cc0000;font-size: 21px;padding:0px 20px;text-align:center;"><br>Проверьте, пожалуйста, правильность заполения всех полей.</p></div>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?><br>
			<div id="win"><p style="color: #cc0000;font-size: 19px;text-align:center;"><strong>Email успешно отправлен!</strong></p><p  style="font-size: 17px;color: #000;text-align:center;">Спасибо  <strong><?php echo $name;?></strong> за использование контактной формы! <br>Мы свяжемся с Вами в кратчайшие сроки.</p></div>
			
			<?php } ?>
			
			
			<script>
			function hide()
               {
                    var win = document.getElementById("win");
                    win.style.display = "none";
               }
               setTimeout("hide()", 3000);
          </script>
<div style="clear:both;"></div>