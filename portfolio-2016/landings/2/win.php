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
width: 35%;
left: 29%;
padding: 0px 4%;
background: #fff;
text-align: center;
z-index: 100;
border-radius: 5px;
background: #fff;

color: #333;
}
#win1 p {
font-size: 24px;
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
.button2 {
    -webkit-font-smoothing: antialiased;
    background-color: #FF3C35!important;
    border: 1px solid #FF4141!important;
    border-radius: 2px!important;
    box-shadow: 0 3px 0 #B60000,0 0 21px red inset!important;
    color: #FFF!important;
    cursor: pointer;
    display: inline-block;
    font-size: 25px!important;
    font-weight: 400!important;
    line-height: 140%!important;
    margin: 15px auto 20px;
    min-height: 38px;
    opacity: 1;
    padding: 1px 28px 0!important;
    text-align: center;
    text-decoration: none;
    width: auto!important;
	transition:all .3s ease;
}
.button2:hover, .button2:focus {
background-color:#ff0a02!important;box-shadow:none!important
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
			<center><h1>Спасибо!</h1>
			<p>Благодарим за оставленную заявку,<br>мы свяжемся с Вами в ближайшее время.</p>
			<!--<img src="./img/logo.png">--></center>
			<center>
				<a class="button2" href="./index.php" data-toggle="modal" data-target="#skidka">Вернуться на сайт</a>
			</center>
			<br>
			</div>
			<?php } ?><br>
</div>
</div>