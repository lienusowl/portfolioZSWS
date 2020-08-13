<style>
#center {
width: 980px;
margin:0 auto;
position:relative;
}
#win1 {
position: fixed;
top: 27%;
width: 55%;
left: 20%;
padding: 0px 4%;
background: #fff;
text-align: center;
z-index: 100;
}
#win1 p {
font-size: 18px;
}
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
z-index: 50;
}
</style>

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