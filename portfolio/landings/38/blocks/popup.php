<!--заказ звонка-->
<div id="inline1" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<img src="img/f1.png" class="f1"><h2>Заказать звонок</h2><img src="img/f2.png" class="f2">
	</div>
	<form class="popup-form" action="order.php" method="post">
		<input type="hidden" name="tid" value="Заказ звонка">
		<input name="name" type="text" tabindex="1" placeholder="Введите Ваше имя" >
		<input required type="text" name="number" tabindex="2"  placeholder="Введите Ваш телефон">
		<input class="button1" id="submit" type="submit" name="submit" value="Оставьте заявку">
	</form>
</div>
</div>

<!--Дома, которые мы построили-->
<div id="d1" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<img src="img/f1.png" class="f1"><h2 style="padding: 20px;height: 46px;">Каркасный дом «Малиновые вечера»</h2><img src="img/f2.png" class="f2">
	</div>
	<div class="box7">
		<img src="img/d1_1.jpg">
		<? include("blocks/header-form.php");?>
	</div>
	<div class="box8">
		<h3>Какая стояла задача?</h3>
		<p>Нужен загородный дом для большой семьи с собакой.</p>
		<h4>Наше решение:</h4>
		<p>Разработан проект дома и осуществлена постройка.</p>
		<h4>Результат:</h4>
		<p>Заказчик доволен.</p>

	</div>
</div>
</div>
<div id="d2" style="display:none;">
	<div class="popup">
		<div class="flag" id="flag2">
		<img src="img/f1.png" class="f1"><h2>Каркасный дом «Шапки»</h2><img src="img/f2.png" class="f2">
	</div>
	<div class="box7">
		<img src="img/d2_2.jpg">
		<? include("blocks/header-form.php");?>
	</div>
	<div class="box8">
		<h3>Какая стояла задача?</h3>
		<p>Нужен типовой проект для молодой пары</p>
		<h4>Наше решение:</h4>
		<p>Подобран готовый проект для заказчиков.</p>
		<h4>Результат:</h4>
		<p>Заказчик доволен.</p>

	</div>
</div>
</div>





