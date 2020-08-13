//защита от спама
$('div.for-name').hide();
//обработчик
$(document).ready(function () {
    $(".ajax-form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
		if (formID == 'tz_form') {
			$url = 'ajax_order_tz.php';  
			} else {
			$url = 'ajax_order.php'; 
			}
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
			url: $url,
            data: formNm.serialize(),
            success: function (data) {
				
                // Вывод текста результата отправки
				$(formNm)[0].reset();
				/*$(".modal-feedback").modal('hide');
				setTimeout(function() {
					$("#success-form").modal('show'); //показать модальное окно успешной отправки
				}, 500);*/
				location="success.php";
            },
            error: function (jqXHR, text, error) {
                // Вывод текста ошибки отправки
                /*$(".modal-feedback").modal('hide');
                $("#fail-form").modal('show'); //показать модальное окно неудачной отправки
                */
                location="fail.php";
            }
        });
        return false;
    });
});