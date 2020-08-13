$(function(){
	
	$("#form").validate({
		rules: {
			name: {
				required: true,
				minlength: 3
			},
			company: {
				required: true
			},
			phone: {
				required: true,
				number: true,
				minlength: 6
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true
			}
		},
		messages: {
			name: {
				required: 'Данное поле должно быть заполнено!',
				minlength: 'Минимальная длина: 3'
			},
			company: {
				required: 'Данное поле должно быть заполнено!'
			},
			phone: {
				required: 'Данное поле должно быть заполнено!',
				number: 'Неправильный формат номера телефона',
				minlength: 'Минимальная длина: 6'
			},
			email: 'Неправильный формат адреса e-mail',
			message: {
				required: 'Данное поле должно быть заполнено!'
			}
		},
		success: function(label) {
			label.html('OK').removeClass('error').addClass('ok');
			setTimeout(function(){
				label.fadeOut(500);
			}, 2000)
		}
	});
	
});