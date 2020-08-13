	// этот участок кода нужен только для отображения гифки
    // которая даёт пользователю понять, что что-то происходит
    // и нужно подождать
    $(document).ready(function () {
        $(document).ajaxStart(function () {
            // найдем элемент с изображением загрузки и уберем невидимость:
            var imgObj = $("#load-indicator");
            imgObj.show();
            // вычислим в какие координаты нужно поместить изображение загрузки,
            // чтобы оно оказалось в серидине страницы:
            var centerY = $(window).scrollTop() + ($(window).height() + imgObj.height()) / 2;
            var centerX = $(window).scrollLeft() + ($(window).width() + imgObj.width()) / 2;
            imgObj.offset({
                left: centerX,
                top: centerY
            });
        });
        //скрываем изображение после окончания AJAX-запроса
        $(document).ajaxStop(function () {
            $('#load-indicator').hide();
        });
    });
 
    // назначаем действие на такое событие как отправка формы
    $('#feedback').submit(function (evtObj) {
        evtObj.preventDefault();
        // Если элемент формы fileforsending содержит значения (т.е. выбран файл для отправки),
        // то вместо AJAX-запроса используем FormData()
        // поскольку файлы через AJAX-запросы не передаются                
 
        if (document.getElementById("feedback").fileforsending.value !== '') {
            //показываем гифку ожидания
            var imgObj = $("#load-indicator");
            imgObj.show();
            var centerY = $(window).scrollTop() + ($(window).height() + imgObj.height()) / 2;
            var centerX = $(window).scrollLeft() + ($(window).width() + imgObj.width()) / 2;
            imgObj.offset({
                left: centerX,
                top: centerY
            });
            // этот кусок кода я спёр отсюда http://javascript.ru/forum/jquery/40698-ajax-i-otpravka-fajjlov-s-formy.html
            var form = document.forms.feedback;
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "order.php");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        data = xhr.responseText;
                        $("#result").html('Результат выполнения: ' + data);
                        // Письмо отправлено, сбрасываем данные формы если прошло успешно
                        if (data === 'Отправлено письмо с вложениями.') {
                            document.getElementById("feedback").reset();
                        }
                        //убираем гифку ожидания
                        $('#load-indicator').hide();
                    }
                }
            };
            xhr.send(formData);
            // В противном случае (не прикреплён файл для отправки)
            // Делаем AJAX-запрос для отправки письма
        } else {
            var form = $(this);
            $.ajax({
                // Здесь файл, который обрабатывает полученные от пользователя данные и отправляет почту
                url: 'order.php',
                type: 'POST',
                data: form.serialize(),
                // Действия в случае успешной отправки AJAX-запроса (а не письма!)
                // Здесь data - полученное от order.php сообщение
                success: function (data) {
                    if (data === 'Письмо отправлено.') {
                        $("#result").html('Письмо отправлено.');
                        // Письмо отправлено, сбрасываем данные формы
                        document.getElementById("feedback").reset();
                        // Следующая строка после успешной отправки сообщения
                        // перенаправляет пользователь на любую страницу/сайт
                        // достаточно раскомментировать её и поменять адрес сайта webware.biz
                        // на ваш собственный
                        //document.location.href = 'http://webware.biz';
                    } else {
                        $("#result").html(data);
                    }
                },
                error: function (data) {
                    $("#result").html('Результат выполнения: ' + data);
                }
            });
        }
    });