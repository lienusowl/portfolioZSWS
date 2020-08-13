<style>
#center {
width: 980px;
margin:0 auto;
position:relative;
}
#win {

width: 100%;
height: 100%;
position: fixed;
}
#win1 {
position: fixed;
top: 25%;
width: 25%;
left: 34%;
padding: 0px 4%;
background: #fff;
text-align: center;
z-index: 100;
border-radius: 10px;
/* color: #555; */
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
}
#win1 p {
font-size: 24px;
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
body {
color: #222;
font-family: 'PT Sans', sans-serif;
font-size: 14px;
background: #fff;
background: url(./img/bg-body.jpg) repeat-y scroll center 0 transparent;
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
			<center><h1>Спасибо!</h1>
			<p>Благодарим за оставленную заявку,<br>мы свяжемся с Вами<br>в ближайшее время.</p>
			<img src="./img/logo.png"></center>
			<div style="display:none;">
			<iframe  src="win.html"  frameborder="0" allowfullscreen="" param name="wmode" value="transparent" embed wmode="transparent" allowTransparency="true" scrolling="no"></iframe>
			</div>
			<?php } ?><br>
</div>
</div>