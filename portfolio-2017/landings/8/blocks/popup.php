<!--оставить заявку-->
<div class="modal fade modal-feedback" id="call" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <button type="button" class="close" data-dismiss="modal"></button>
      <div class="inn">
        <h3>Заполните форму</h3>
        <form class="form-horizontal ajax-form" id="form-call">
          <input type="hidden" name="tid" value="Оставить заявку">
          <div class="form-group for-name">
            <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="inpt1" placeholder="Ваше имя" name="inpt1">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" id="number" placeholder="Ваш телефон" name="number" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Ваш e-mail" name="email">
          </div>
          <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
        </form>
      </form>
    </div>
  </div>
  </div>
</div>
<!--Расчет стоимости-->
<div class="modal fade modal-feedback" id="calc" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <button type="button" class="close" data-dismiss="modal"></button>
      <div class="inn">
        <h3>Расчет стоимости</h3>
        <form class="form-horizontal ajax-form" id="form-calc">
          <input type="hidden" name="tid" value="Расчет стоимости">
          <div class="form-group for-name">
            <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <select name="type" class="form-control">
                  <option value="Вид материала" selected="">Вид материала</option>
                  <option value="Вид материала" selected="">Вид материала</option>
                  <option value="Вид материала" selected="">Вид материала</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="count" placeholder="Количество этажей дома" name="count">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="square" placeholder="Общая площадь (м2)" name="square">
          </div>
          <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade modal-feedback" id="hot" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <button type="button" class="close" data-dismiss="modal"></button>
      <div class="inn">
        <h3 class="mb-10">Горячее предложение</h3>
        <p class="text-upp text-center"><b>Условия получения скидки в 20%</b></p>
        <p class="text-center mb-20">Введите номер телефона для того,<br>чтобы закрепить за собой скидку в 20%</p>
        <form class="form-horizontal ajax-form" id="form-hot">
          <input type="hidden" name="tid" value="Скидка 20%">
          <div class="form-group for-name">
            <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" id="number" placeholder="Ваш телефон" name="number" required="">
          </div>
          <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade modal-feedback" id="faq" tabindex="-1" role="dialog">
  <div class="modal-dialog faq-box"> 
    <div class="modal-content "> 
      <button type="button" class="close" data-dismiss="modal"></button>
      <div class="inn">
        <p class="question">Вопрос</p>
        <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="question">Вопрос</p>
        <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="question">Вопрос</p>
        <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="question">Вопрос</p>
        <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
        <p class="text-center">Менеджер свяжется с Вами<br>в ближайшее рабочее время.</p>
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
        <p class="text-center">Проверьте, пожалуйста, правильность<br>заполнения всех полей.</p>
		    <br>
    </div>
  </div>
</div>