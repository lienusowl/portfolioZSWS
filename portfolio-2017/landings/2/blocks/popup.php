<!--оставить заявку-->
<div class="modal fade modal-feedback" id="form-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
    <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
    <h3>Оставить заявку</h3>
      <form class="form-horizontal" id="form-order" action="order.php" method="post">
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
        <div class="clear"></div>
        <button type="submit" class="btn send" id="send" name="submit">Отправить</button>
      </form>
    </div>
  </div>
</div>
<div class="modal fade modal-feedback" id="video" tabindex="-1" role="dialog">
  <div class="modal-dialog big video"> 
    <div class="modal-content"> 
    <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
    <iframe width="100%" height="450" src="https://www.youtube.com/embed/-ZOiX6cIT8o" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<div class="modal fade modal-feedback" id="policy" tabindex="-1" role="dialog">
  <div class="modal-dialog big"> 
    <div class="modal-content"> 
    <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
    <h3>Политика конфиденциальности</h3>
      
    </div>
  </div>
</div>

<div class="modal fade modal-feedback" id="agreement" tabindex="-1" role="dialog">
  <div class="modal-dialog big"> 
    <div class="modal-content"> 
    <button type="button" class="close" data-dismiss="modal"><div aria-hidden="true"></div><div class="sr-only">Закрыть</div></button>
    <h3>Соглашение о персональных данных</h3>
      
    </div>
  </div>
</div>

