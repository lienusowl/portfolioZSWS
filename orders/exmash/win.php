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
background: #fff url(./img/header.jpg) no-repeat center center;
padding: 0px;
margin: 0px;
background-size: cover;
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
height: 280px;
color: #121212;
text-align:center;
box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.5);
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
background-color: rgba(0, 0, 0, 0.2);
z-index: 50;
}
body {
color: #434750;
font-family: 'Ubuntu', sans-serif;
font-size: 14px;
background: #fff;
	margin: 0px;
padding: 0px;
}
.win-yellow {
font-size: 24px !important;
/* text-shadow: 1px 1px 1px #333; */
font-weight: bold;
color: #384d5f !important;
}
.win-yellow span {

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
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<div id="win">
	<div id="overlay" style="opacity: 0.8; display: block;"></div>
	<div id="win1">
		<a title="Close" class="fancybox-item fancybox-close" href="http://www.exmash.com/"></a>
		<p class="win-yellow">Спасибо<br><span>за Вашу заявку!</span></p>
		<p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
		<img src="./img/logo.png" alt="">
	</div>
</div>
