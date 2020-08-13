		<div class='map'>
		  <div class='fleft left-map'>
		    <div class='address'>
			  Наш адрес:</br>
г. Москва, Трифоновская ул., д.47, стр.1
			</div>
		    <div id="map-canvas"><script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Z9cpODmoGxBqam0DtZY-Ln0uQ1UXSx4X&width=600&height=300"></script></div>
		  </div>

		  <div class='fright right-form-3'>
		    <div class='form-wrapper'>
		     <div class='txt-form'>Получить бесплатный расчёт стоимости допуска СРО</div>
			 <form  method='post' action="order.php">
			   <div class='name-input in-wrapper'>
					<input type='text' placeholder="Ваше имя" value ='' name='name' />
			   </div>
			   
			   <div class='phone-input in-wrapper'>
					<input type='text' placeholder="Номер телефона" name='number' />
				</div>
				
			   <div class='email-input in-wrapper'>
					<input type='text' placeholder="E-mail" name='email' />
				</div>
				
			   <div class='submit-butt'>
					<input type='submit' value ='получить расчет' name='submit'   />
				</div>
				
			   <input type='hidden' value='бесплатный расчёт стоимости допуска СРО' name='tid' />
			   
			 </form>
		   </div>
		  </div>
		  <div class='clear-all'></div>

		</div>

		<div class='footer'>

		   <div class='phone-footer fleft'>
		     8 800 555-31-95</br><span>Звонок по всей России бесплатный</span><br>
			<span style="position: absolute; font-size: 10px;">
			  * Рассрочка платежа выдается на основе договора займа
			</span>
		   </div>


		   <div class='email-footer fleft' style="font-size: 14px;">e-mail: <a href="mailto:info@garantius.ru">info@garantius.ru</a><br><br>
			<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="#ebebeb" data-options="big,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,moimir,twitter"></div>
		  </div>

		   <div class='copy-footer fright'><!--&copy;--> &laquo;ЕПЦПС&raquo;, 				2010-2014 </br>Оформление допусков СРО за 1 день</div>
		   <div class='clear-all'></div>

		</div>
	</div>
	
	<? include("../../../nocopy.php");?>