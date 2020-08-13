
<div class="header-form">
	<div class="col-md-5"></div>
	<div class="col-md-5 rasch">
		<p class="rasch-slogan">Расчет стоимости натяжного потолка</p>
		<form class="form-horizontal" action="order.php" method="post">
			<div class="form-group form-calc">
				<div class="col-sm-12">
				  <input type="text" class="form-control calc-input" value="" name="first" placeholder="ВВЕДИТЕ ШИРИНУ КОМНАТЫ" required="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
				  <input type="text" class="form-control calc-input" value="" name="second" placeholder="ВВЕДИТЕ ДЛИНУ КОМНАТЫ" required="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
						<a href="#s1" id="home-tab" role="tab" data-toggle="tab" aria-controls="map1" aria-expanded="true"><input type="button" name="send" value="Расcчитать" class="raschet send"/></a>
									
				</div>
			</div>
		</form>
	</div>
	<div id="myTabContent" class="tab-content"> 
	<div class="col-md-2 rasch-result tab-pane fade in" role="tabpanel" id="s1" aria-labelledby="home-tab">
		<p class="summa2">=<span class="summa"></span></p>
		<a class="button2 modalbox" href="#zamer">Заказать замер</a>
		<p class="pr1">*указана примерная стоимость натяжного потолка, необходимо заказать точный замер</p>
	</div>
	</div>
	
</div>