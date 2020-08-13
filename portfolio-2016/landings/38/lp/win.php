<style>
* {
	margin: 0;
	padding: 0;
}
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
	max-width: 420px;
	padding: 0px 0px 30px 0px;
	text-align: center;
	z-index: 100;
	background: #fff;
	height: 280px;
	color: #333333;
	text-align:center;
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
    color: #424041;
    font-family: 'PT Sans', sans-serif;
    font-size: 14px;
    background: #fff url('./img/order/bg.jpg') no-repeat;
    background-size: cover;
    background-position: top center;
}
.modal-header {
	background: #fafafa;
	border-bottom: none;
	min-height: 16.42857143px;
	padding: 15px;
	margin-bottom: 40px;
}
.modal-header .close {
	width: 55px;
	height: 55px;
	opacity: 1;
	color: #424041;
	background: #efefef;
	margin-top: -15px;
	margin-right: -15px;
	float: right;
	font-size: 21px;
	line-height: 1;
	text-shadow:none;
}
.close:before{
	content: "×";
	padding-top: 20px;
	display: inline-block;
}
.modal-title {
	font-size: 18px;
	color: #333;
	margin-bottom: 0px;
	line-height: 25px;
	font-weight: 900;
	margin: 0px;
	padding-left: 40px;
}
</style>
<div id="win">
	<div id="overlay" style="opacity: 0.8; display: block;"></div>
	<div id="win1">
		<?php if(isset($hasError)) { //Если найдены ошибки ?>
		<p class="error" style="color: #cc0000;font-size: 21px;">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
		<?php } ?>
		<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
		<div class="modal-header"> 
			<a title="Close" class="close" href="./index.php"></a>
			<h4 class="modal-title" id="refModalLabel">Спасибо за Вашу заявку!</h4>
		</div>
		<p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
		<br>
		<img src="./img/logo.png">
	</div>
	<?php } ?>
</div>
