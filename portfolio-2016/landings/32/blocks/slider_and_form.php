<div class="container slider_and_form">
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 slider">
		<div class="intro">
			<p><img src="img/slider_window.png" alt="">Посмотрите наши работы</p>
		</div>
		
<!-- ================================================================================================================ -->
		<div id="slider_inner">	
			<div class="slideshow" id="s2">
			
				<img src="img/slider/1.jpg" width="100%"  />
				<img src="img/slider/2.jpg" width="100%"  />
				<img src="img/slider/1.jpg" width="100%"  />
				<img src="img/slider/2.jpg" width="100%"  />
				
			</div>
			<div class="nav"><a id="prev2" href="#"><img src="img/prev.png"></a> <a id="next2" href="#"><img src="img/next.png"></a></div>
		</div>
<!-- ================================================================================================================ -->		
	</div>

	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form">
		<p class="big">Оставьте заявку</p>
		<p class="small">на бесплатный замер и<br>получите скидку 3%</p>
		
			<form action="order.php" method="post">
				<input type="hidden" value="Заявка с шапки">
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="text" name="number" placeholder="Ваш телефон">
				<div class="button_hover">
					<input type="submit" name="submit" value="ОТПРАВИТЬ" id="submit">
				</div>
			</form>
		<div class="clear"></div>
		<div id="pol_line"></div>
		<a href="#" id="pol" data-toggle="modal" data-target="#myModal">Политика конфиденциальности</a>
	</div>

</div>