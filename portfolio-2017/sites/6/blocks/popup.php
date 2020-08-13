<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <button type="button" class="close" data-dismiss="modal"></button>
      <h3>Оставить заявку</h3>
      <form class="form-horizontal ajax-form" id="form-call">
        <input type="hidden" name="tid" value="Оставить заявку">
        <div class="form-group for-name">
          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
        </div>
        <div class="form-group name">
          <input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
        </div>
        <div class="form-group phone">
          <input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
        </div>
        <div class="form-group message">
          <textarea cols="30" rows="8" name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
        </div>
        <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
      </form>
    </div>
  </div>
</div>
<!-- видео в шапке -->
<div class="modal fade modal-feedback" id="header-video" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <button type="button" class="close" data-dismiss="modal"></button>
      <iframe width="100%" height="600" src="https://www.youtube.com/embed/CRX5I0BtZw0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h3>Спасибо за Вашу заявку!</h3>
        <p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
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
    </div>
  </div>
</div>