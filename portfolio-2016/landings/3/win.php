<style>
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
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
position: relative;
    margin: 10% auto;
width: 420px;

    padding: 30px;
text-align: center;
z-index: 100;
border-radius: 5px;
background: #fff;
height:270px;
color: #121212;
text-align:center;
background: #60c1e2 url(./img/win.jpg) no-repeat center center;
}
#win1 p {
font-size: 18px;
margin-top: 0px;
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
}
.win-yellow {
color:#fff343;
font-size:30px;
text-shadow:1px 1px 1px #333;
font-weight:bold;
}
.win-yellow span {
font-size:24px;
}
.fancybox-close {
	
position: absolute;
top: -18px;
right: -18px;
width: 36px;
height: 36px;
cursor: pointer;
z-index: 8040;
    background-image: url('./fancybox/source/fancybox_sprite.png');
}
</style>

<div id="win">
	<div id="overlay" style="opacity: 0.8; display: block;"></div>
	<div id="win1">
		<a title="Close" class="fancybox-item fancybox-close" href="./index.php"></a>
		<?php if(isset($hasError)) { //Если найдены ошибки ?>
		<p class="error" style="color: #cc0000;font-size: 21px;">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
		<?php } ?>
		<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
		<p class="win-yellow">Спасибо<br><span>за Вашу заявку!</span></p>
		<p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
		<p>Мы работаем по будням<br>с <b>10:00</b> до <b>18:00</b></p>
	</div>
	<?php } ?>
</div>
