<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog"> 
    <div class="modal-content call"> 
      <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
      <h3>Оставить заявку</h3>
      <div class="form-visit">
          <form class="form-horizontal ajax-form" id="form-popup">
            <input type="hidden" name="tid" value="Оставить заявку">
            <div class="form-group for-name">
              <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
            </div>
            <div class="form-group name">
              <input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
            </div>
            <div class="form-group number">
              <input type="tel" class="form-control" id="number" placeholder="Контактный номер" name="number" required="">
            </div>
            <div class="form-group type">
              <select name="type" id="type" class="form-control">
                <option value="Консультация" selected="selected">Консультация</option>
                <option value="Сборка ПК">Сборка ПК</option>
                <option value="Сопровождение в магазине">Сопровождение в магазине</option>
                <option value="Помощь в соц. сетях">Помощь в соц. сетях</option>
                <option value="Апгрейд компьютера">Апгрейд компьютера</option>
              </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
            <div class="clear"></div>
          </form>
    </div>
  </div>
</div>
</div>
<!-- Удачная отправка -->
<div class="modal fade" id="success-form" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h3 class="modal-title text-center">Спасибо за Вашу заявку!</h3>
        <p class="text-center">Мы свяжемся с Вами<br>в ближайшее рабочее время.</p>
		    <br>
        <img src="img/logo.png" alt="" class="m-auto" width="100">
    </div>
  </div>
</div>
<!-- Неудачная отправка -->
<div class="modal fade" id="fail-form" tabindex="-1" aria-hidden="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h3 class="modal-title text-center">Заявка не отправлена</h3>
        <p>Проверьте, пожалуйста, правильность<br>заполнения всех полей.</p>
		    <br>
        <img src="img/logo.png" alt="" class="m-auto" width="100">
    </div>
  </div>
</div>