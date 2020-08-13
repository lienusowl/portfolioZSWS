
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/owl.carousel.min.css">
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css" media="screen" />
<script type="text/javascript" src="js/lightbox.js"></script>


 <script>
    function showError(container, errorMessage) {
      container.className = 'error';
      var msgElem = document.createElement('span');
      msgElem.className = "error-message";
      msgElem.innerHTML = errorMessage;
      container.appendChild(msgElem);
    }

    function resetError(container) {
      container.className = '';
      if (container.lastChild.className == "error-message") {
        container.removeChild(container.lastChild);
      }
    }

    function validate(form) {
      var elems = form.elements;

      resetError(elems.calc_dlina.parentNode);
      if (!elems.calc_dlina.value) {
        showError(elems.calc_dlina.parentNode, ' Укажите от кого.');
      }

      resetError(elems.password.parentNode);
      if (!elems.password.value) {
        showError(elems.password.parentNode, ' Укажите пароль.');
      } else if (elems.password.value != elems.password2.value) {
        showError(elems.password.parentNode, ' Пароли не совпадают.');
      }

      resetError(elems.to.parentNode);
      if (!elems.to.value) {
        showError(elems.to.parentNode, ' Укажите, куда.');
      }

      resetError(elems.message.parentNode);
      if (!elems.message.value) {
        showError(elems.message.parentNode, ' Отсутствует текст.');
      }

    }
  </script>
<!--<script type="text/javascript" src="js/smoothscroll.js"></script>-->






