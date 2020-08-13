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
        <div class="form-group">
          <input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
        </div>
        <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
      </form>
    </div>
  </div>
</div>


<!--popup-->
<div class="modal fade modal-feedback" id="free" tabindex="-1" role="dialog">
  <!--<div id="free">-->
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <button type="button" class="close" data-dismiss="modal"></button>
      <div class="row row-flex">
        <div class="col-md-6 left">
          <h2>Получите образцы <br>бесплатно</h2>
          <p class="s1">Отправлю лично!</p>
          <p class="s2">Якимов Виталий <br>директор</p>
        </div>
        <div class="col-md-6 right">
          <form class="form-horizontal ajax-form" id="form-free">
            <input type="hidden" name="tid" value="Оставить заявку">
            <div class="form-group for-name">
              <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="city" placeholder="Ваш город" name="city">
            </div>
            <button type="submit" class="btn send" id="send" name="submit">Получить</button>
          </form>
        </div>
      </div>
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