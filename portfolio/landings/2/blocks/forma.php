<div id="form">
<form class="popup-form" action="order.php" method="post">
	<input type="hidden" name="tid" value="Заказ работы">
	<div>
		<p class="set">Как Вас зовут?<span>*</span></p>
		<input id="" onclick="" type="text" name="name" placeholder="Имя" value="" style="width: 100px;">
		<input id="" onclick="" type="text" name="secondname" placeholder="Фамилия" value="" style="width: 165px;">
	</div>
	<div>
		<p class="set">Ваш e-mail<span>*</span></p>
		<input id="" onclick="" type="text" name="email" placeholder="Действующий e-mail" value="">
	</div>
	<div>
		<p class="set">Ваш телефон<span>*</span></p>
		<input id="" onclick="" type="text" name="number" placeholder="+7 999 111 22 33" value="">
	</div>
	<div>
		<p class="set">Организация<span>*</span></p>
		<input id="" onclick="" type="text" name="organization" placeholder='ООО "Организация"' value="">
	</div>
	<div>
		<p class="set">Должность<span>*</span></p>
		<input id="" onclick="" type="text" name="post" placeholder="Название должности" value="">
	</div>
	<div>
		<p class="set">Вариант участия</p>
		<select style="width: 310px;height: 30px;" name="type">
			<option>Gold</option>
			<option>VIP</option>
			<option>Basic</option>
		</select>
	</div>
	<div>
		<p class="set">Число билетов</p>
		<select style="width: 310px;height: 30px;" name="ticket">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>
	<div>
		<p class="set">Промо</p>
		<input id="" onclick="" type="text" name="promo" placeholder="Промо" value="">
	</div>
	
	<div  style="height: 50px;">
		<p class="set" style="padding: 0px 10px 0px 0px;">Вы являетесь<span>*</span></p>
		<input type="radio" name="face" value="физическим лицом" checked>физическим лицом<br>
		<input type="radio" name="face" value="юридическим лицом">юридическим лицом<br>
	</div>
	<div class="clear"></div>
	<div>
		<p class="set" style="padding: 0px 10px 0px 0px;">Нужна гостиница</p>
		<input type="checkbox" name="option1" value="да">
	</div>
	<div class="clear"></div>
	<input class="button1" id="submit" type="submit" name="submit" value="Регистрация">
</form>

</div>