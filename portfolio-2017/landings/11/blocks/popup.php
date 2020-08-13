<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog"> 
    <div class="modal-content call"> 
      <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
      <h3>Заказать звонок</h3>
      <form class="form-horizontal ajax-form" id="form-modal">
        <input type="hidden" name="tid" value="Заказать звонок">
        <div class="form-group for-name">
          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
        </div>
        <div class="clear"></div>
        <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
        <div class="clear"></div>
      </form>
    </div>
  </div>
</div>

<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h3>Спасибо за Вашу заявку!</h3>
        <p>Менеджер свяжется с Вами в ближайшее<br>рабочее время.</p>
        <br>
        <img src="img/logo.png" alt="">
		    <br>
    </div>
  </div>
</div>
<!-- Неудачная отправка -->
<div class="modal fade" id="fail-form" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h3>Заявка не отправлена</h3>
        <p>Проверьте, пожалуйста, правильность<br>заполнения всех полей.</p>
        <br>
        <img src="img/logo.png" alt="">
		    <br>
    </div>
  </div>
</div>