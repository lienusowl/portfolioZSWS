//защита от спама
$('div.for-name').hide();
//обработчик
$(document).ready(function () {
    $(".ajax-form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        $url = 'ajax_order.php'; 
		if (formID == 'form-cat-download') {
			var formNm = $('#' + formID);
            $.ajax({
                type: "POST",
                url: $url,
                data: formNm.serialize(),
                success: function (data) {
                    
                    // Вывод текста результата отправки
                    $(formNm)[0].reset();
                    $(".modal-feedback").modal('hide');
                    setTimeout(function() {
                        $("#success-form-download").modal('show'); //показать модальное окно успешной отправки
                    }, 500);
                    
                },
                error: function (jqXHR, text, error) {
                    // Вывод текста ошибки отправки
                    $(".modal-feedback").modal('hide');
                    $("#fail-form").modal('show'); //показать модальное окно неудачной отправки
                }
            });

			} else {
			     var formNm = $('#' + formID);
                $.ajax({
                    type: "POST",
                    url: $url,
                    data: formNm.serialize(),
                    success: function (data) {
                        
                        // Вывод текста результата отправки
                        $(formNm)[0].reset();
                        $(".modal-feedback").modal('hide');
                        setTimeout(function() {
                            $("#success-form").modal('show'); //показать модальное окно успешной отправки
                        }, 500);
                        
                    },
                    error: function (jqXHR, text, error) {
                        // Вывод текста ошибки отправки
                        $(".modal-feedback").modal('hide');
                        $("#fail-form").modal('show'); //показать модальное окно неудачной отправки
                    }
                });
			}
        return false;
    });
});