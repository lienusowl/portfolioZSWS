<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <div class="icon">
          <i class="fa fa-phone"></i>
        </div>
        <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
        <h3>Оставить заявку</h3>
        <p>Представьтесь, мы вам перезвоним.</p>
      </div>
      <div class="modal-body">
        <form class="form-horizontal ajax-form" id="form-call">
          <input type="hidden" name="tid" value="Оставить заявку">
          <div class="form-group for-name">
            <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <label>Ваше имя*</label>
            <input type="text" class="form-control" id="inpt1" name="inpt1" required="">
            <i class="fa fa-user"></i>
          </div>
          <div class="form-group">
            <label>Контактный номер*</label>
            <input type="tel" class="form-control" id="number" name="number" required="">
            <i class="fa fa-phone"></i>
          </div>
          <div class="clear"></div>
          <div class="row modal-footer">
            <div class="col-sm-6">
              <i class="star">*</i>
              <p> - Обязательные поля</p>
            </div>
            <div class="col-sm-6">
              <button type="submit" class="btn send red" id="send" name="submit">Отправить</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Удачная отправка -->
<div class="modal fade modal-feedback" id="success-form" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <div class="icon">
          <i class="fa fa-check"></i>
        </div>
        <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
        <h3>Спасибо за Вашу заявку!</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-7">
            <p>Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
          </div>
          <div class="col-sm-5">
            <img src="./assets/template/img/logo.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Неудачная отправка -->
<div class="modal fade modal-feedback" id="fail-form" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <div class="icon">
          <i class="fa fa-ban"></i>
        </div>
        <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
        <h3>Заявка не отправлена</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-7">
            <p>Проверьте, пожалуйста, правильность<br>заполнения всех полей.</p>
          </div>
          <div class="col-sm-5">
            <img src="./assets/template/img/logo.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>