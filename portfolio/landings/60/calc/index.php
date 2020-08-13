<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Расчет стоимости свадьбы</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="scripts.js"></script>
</head>

<body>
<div id="calculate">
<div id="header"><p>Перед Вами - свадебный калькулятор. С помощью него Вы сможете примерно рассчитать расходы на это торжественное событие. Все цены указанные ниже - средние. Каждая свадьба - это уникальное событие и потому стоимость, определенная с помощью свадебного калькулятора может несколько отличаться от реальных расходов. </p></div>

 <form action="action.php" method="post">
	<table id="tableSelect" width="100%" cellpadding="0" cellspacing="0">
    	<tr>
        	<th>Описание</th>
            <th>Ед.изм.</th>
            <th>Колличество</th>
            <th>Цена</th>
            <th>Сумма по позиции</th>
        </tr>
        
        <tr>
        	<td>Ведущий</td>
            <td class="vertical">Часы</td>
            <td>
            	<select id="pos_1" name="veduschiy">
                	<option value="0" selected>-</option>
                	<option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </td>
            <td class="vertical" id="pos_1_price">3000</td>
            <td id="pos_1_count">0</td>
        </tr>
        
        <tr>
        	<td>Банкетный зал</td>
            <td class="vertical">Человек</td>
            <td>
            	<input id="pos_2" type="text" name="people">
            </td>
            <td class="vertical" id="pos_2_price">2000</td>
            <td id="pos_2_count">0</td>
        </tr>
        
        <tr>
        	<td>Теплоход</td>
            <td class="vertical">Человек</td>
            <td>
            	<input id="pos_3" type="text" name="people_t">
            </td>
            <td class="vertical" id="pos_3_price">3000</td>
            <td id="pos_3_count">0</td>
        </tr>
        
        <tr>
        	<td>Видеосъемка</td>
            <td class="vertical">Часов</td>
            <td>
            	<select id="pos_4" name="video">
                	<option value="0" selected>-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </td>
            <td class="vertical" id="pos_4_price">2500</td>
            <td id="pos_4_count">0</td>
        </tr>
        
        <tr>
        	<td>Автомобиль</td>
            <td class="vertical">Часов</td>
            <td>
            	<select id="pos_5" name="automobile">
                	<option value="0" selected>-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </td>
            <td class="vertical" id="pos_5_price">2500</td>
            <td id="pos_5_count">0</td>
        </tr>
        
        <tr>
        	<td>Украшение шарами</td>
            <td class="vertical">-</td>
            <td>
            	<select id="pos_6" name="bubbles">
                	<option value="0" selected>Нет</option>
                    <option value="1">Да</option>
                </select>
            </td>
            <td class="vertical" id="pos_6_price">5000</td>
            <td id="pos_6_count">0</td>
        </tr>
        
        <tr>
        	<td>Украшение цветами</td>
            <td class="vertical">-</td>
            <td>
            	<select id="pos_7" name="flowers">
                	<option value="0" selected>Нет</option>
                    <option value="1">Да</option>
                </select>
            </td>
            <td class="vertical" id="pos_7_price">5000</td>
            <td id="pos_7_count">0</td>
        </tr>
    </table>
 <div id="count_price"><p>Итого: <span></span> руб.</p></div>
</form>

</div>


</body>
</html>