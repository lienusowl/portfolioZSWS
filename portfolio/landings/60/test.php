<style>
@font-face {
	font-family: 'Conv_HouschkaPro-Light';
	src: url('../fonts/HouschkaPro-Light.eot');
	src: local('☺'), url('../fonts/HouschkaPro-Light.woff') format('woff'), url('../fonts/HouschkaPro-Light.ttf') format('truetype'), url('../fonts/HouschkaPro-Light.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'Conv_HouschkaPro-Bold';
	src: url('../fonts/HouschkaPro-Bold.eot');
	src: local('☺'), url('../fonts/HouschkaPro-Bold.woff') format('woff'), url('../fonts/HouschkaPro-Bold.ttf') format('truetype'), url('../fonts/HouschkaPro-Bold.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}
body {
margin: 0;
background: #fff;
color: #333;
font-family:'Conv_HouschkaPro-Light',Sans-Serif;
overflow-x:hidden;
}
input{
	border: 2px solid #999999;
    padding: 5px;
}
#sub1{
	    background-color: #00bcd5;
    border: none;
    color: #fff;
    width: 100px;
    margin: 10px auto;
    display: block;
	transition: all .3s;
    text-align: center;
}
#sub1:hover{
	    background-color: #0A8090;
		transition: all .3s;
		cursor:pointer;
}
td p{    font-weight: bold;}

.red{
    
    color: #222;
    font-family: 'Conv_HouschkaPro-Bold',Sans-Serif;
    font-weight: bold;
    font-size: 2.2em;
    display: block;
    width: 237px;
    height: 47px;
    position: relative;
	text-align:center;
}
.green{
color: #FC2715;
    font-family: 'Conv_HouschkaPro-Bold',Sans-Serif;
    font-weight: bold;
    font-size: 2.4em;
    text-align: center;
    position: absolute;
    width: 237px;
    height: 47px;
    bottom: 170px;
    color: #EA1024;
}
b {
	font-family: 'Conv_HouschkaPro-Bold',Sans-Serif;
}
select{
	border: 2px solid #999999;
    padding: 5px;
width: 170px;
}
.red2{
	font-size: 0.8em;
	    color: #EA1024;
		    line-height: 15px;
}
.red img{
	    position: absolute;
    left: 0px;
}
#result .modalbox{
	background-color: #00bcd5;
    border: none;
    color: #fff;
    width: 100px;
    margin: 10px auto;
    display: block;
    transition: all .3s;
    text-align: center;
    text-decoration: none;
    padding: 10px;
    width: 200px;
}
tr{
	    position: relative;
    line-height: 40px;
}
</style>


<script>
		function addition() {
			var a1 = parseInt(document.getElementById('a1').value);
			var a2 = parseInt(document.getElementById('a2').value);
			var a3 = parseInt(document.getElementById('a3').value);

			var a5 = parseInt(document.getElementById('a5').value);

			var pos_1 = parseInt(document.getElementById('pos_1').value);
			
			if (isNaN(a1)==true) a1=0;
			if (isNaN(a2)==true) a2=0;
			if (isNaN(a3)==true) a3=0;

			if (isNaN(a5)==true) a5=0;

			if (isNaN(pos_1)==true) pos_1=0;
			
			var c = a1 * 320 + a2 * 100 + a3 * 300 + a5 * 350 + pos_1;
			var g = c;
			var d = c - (g / 100 * 10);
			
			document.getElementById('result').innerHTML =  "<table><tr>		<td width='120px'><p><b>Цена потолка:</b></p></td>		<td><span class='red'>" + c + " Р<img src='img/price.png'></span></td>	</tr>	<tr>		<td><p class='red2'>При заказе прямо сейчас ваша цена со скидкой:</p></td>		<td><span class='green'>" + d + " Р</span></td>	</tr></table>";
		}
		</script>



<table style="background-color: #eee;padding: 15px;    border-collapse: separate;    box-shadow: 6px 6px 0px #986b2b;width:430px;">
<form action="order.php" method="post">
	<tr>
		<td width="200px;"><p>Ваш пакет</p></td>
		<td>
			<select id="pos_1" name="veduschiy">
				<option value="0" selected="">Эконом</option>
				<option value="100">Стандарт</option>
				<option value="200">Люкс</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><p>Площадь потолка</p></td>
		<td><input id="a1" type="text" placeholder="кв. м."></td>
	</tr>
	<tr>
		<td><p>Количество углов</p></td>
		<td><input id="a2" type="text" placeholder="от 5 и более шт."></td>
	</tr>
	<tr>
		<td><p>Количество светильников</p></td>
		<td><input id="a3" type="text" placeholder="шт."></td>
	</tr>
	
	<tr>
		<td><p>Количество люстр</p></td>
		<td><input id="a5" type="text" placeholder="шт."></td>
	</tr>
	
	<tr>
		<td colspan="2"><input id="sub1" type="button" value="Расчитать" onclick="addition();"></td>
	</tr>
	
	<tr>
		<td colspan="2"><div id="result"></div></td>
	</tr>
</form>	
</table>


<script>
// JavaScript Document
$(document).ready(function() {
	//Немного оформления в стиле зебры
	$("#calculate").find("tr:odd").css({"background":"#fbdd59", "opacity":"0.8"});
	
	//Калькулятор
	$("#tableSelect").change(function() {
		var totalSum = 0;
		
		$("input[id^='pos'], select[id^='pos']").each(function() {
			var idElement = "#"+$(this).attr("id"), //Получаем id элемента
				priceField = parseInt($(idElement+"_price").text()), //Стоимость позиции
				countField = parseInt($(this).val()); //значение элемента
			
			$(idElement+"_count").text(priceField * countField); //Выводим сумму по позиции
			totalSum += priceField * countField;
		});
		$("#count_price span").text(totalSum);
	});
});
</script>
