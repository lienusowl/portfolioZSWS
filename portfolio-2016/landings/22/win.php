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
   <p style="font-family: Calibri, 'Open Sans', sans-serif;color: #e94500;font-size: 32px;border-bottom:2px solid color: #e94500;"><strong>Спасибо за Ваш заказ!</strong></p>
   <p  style="font-family: Calibri, 'Open Sans', sans-serif;color: #e94500;font-size: 26px;">В самое ближайшее время наш менеджер свяжется с Вами для уточнения деталей</p>
   <div style="display:none;">
   <iframe  src="win.html"  frameborder="0" allowfullscreen="" param name="wmode" value="transparent" embed wmode="transparent" allowTransparency="true" scrolling="no"></iframe>
   </div>
   <?php } ?><br>
  </div>
  </div>