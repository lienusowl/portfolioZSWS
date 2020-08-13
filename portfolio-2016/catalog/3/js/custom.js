$(document).ready(function(){
	
	/*
	var wall = new freewall(".items");
	wall.reset({
		selector: '.block',
		animate: true,
		cellW: 230,
		cellH: 230,
		gutterX: 0,
		gutterY: 0,
		onResize: function() {
			wall.refresh();
		}
	});
	
	wall.fitWidth();
	*/
	
	// прокрутка к списку товаров
	
	
	
	// кнопка наверх
	var offset = 100;
	$(window).scroll(function(){
		if ($(this).scrollTop() > offset)
		{
			$('.ontop').fadeIn(200);
		}
		else
		{
			$('.ontop').fadeOut(200);
		}
	});
	
	$('.ontop').click(function(event)
	{
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, 500);
	
		return false;
	});	
	// close кнопка наверх
	
	
	
	function calculate()
	{
		//if(window.summaAll == undefined)
		var summaAll = 0;
			
		$('.position').each(function(){
			count = parseInt($(this).find('.count').html());
			price = parseInt($(this).find('.price').html());
			
			summaItem = count * price;
			summaAll += summaItem;
		});
		
		$.ajax({
			type: "POST",
			url: "cart/price.php",
			data: ({price: summaAll}),
			success: function(data)
			{
				$('.order-price .price').html(summaAll+'&#8399;');
				$('#item-count').html(data);
			}
		});
	}
	
	
	//добавление в корзину
	$('.block, .block-alterinfo').on("click", ".buy, .alter-buy", function(){
		
		if($(this).hasClass('alter-buy'))
			index = $('.alter-buy').attr("data-item-id");
		else		
			index = $('.buy').index(this);
		
		if(!$('.buy').eq(index).hasClass('disable'))
		{
			title = $('.block h4').eq(index).html();
			price = parseFloat($('.block .price').eq(index).html(), 0);
			netto = $('.block .netto').eq(index).html();
	
			$.ajax({
				type: "POST",
					url: "cart/cart.php",
					data: ({title: title, netto: netto, price: price, count: 1}),
					beforeSend: function()
					{
						
					},
					success: function(data)
					{
						if(data != 0)
						{
							$('.positions').append(data);
							
							//блокируем кнопку заказа на эту позицию
							//$('.buy').eq(index).addClass('disable');
							$('.buy').eq(index).html('В корзине');
							$('.alter-buy').html('В корзине');
							
							calculate();
						}
						else
						{
							$('.side-bar-right .order').addClass('blink');
							
							//$('.buy').eq(index).addClass('disable');
							$('.buy').eq(index).html('Уже в корзине');
							$('.alter-buy').html('Уже в корзине');
							
							setTimeout(function(){$('.side-bar-right .order').removeClass('blink')}, 1000);
							
						}
					}
			});
		}
		
		
		return false;
	});
	
	//плюс позиция
	$('.positions').on("click", ".plus", function(){
		index = $('.plus').index(this);
		
		id = $('.plus').eq(index).data('id');
		count = parseInt($('.count').eq(index).html()) + 1;
		$('.count').eq(index).html(count);
		
		$.ajax({
			type: "POST",
			url: "cart/plus_minus.php",
			data: ({id: id, count: count}),
			success: function(data)
			{
				calculate();
			}
		});
	});
	
	//минус позиция
	$('.positions').on("click", ".minus", function(){
		index = $('.minus').index(this);
		
		id = $('.minus').eq(index).data('id');
		count = parseInt($('.count').eq(index).html()) - 1;
		
		if(count < 0)
			count = 0;
		
		$('.count').eq(index).html(count);
		
		$.ajax({
			type: "POST",
			url: "cart/plus_minus.php",
			data: ({id: id, count: count}),
			success: function(data)
			{
				calculate();
			}
		});
	});
	
	//удаление
	$('.positions').on("click", ".position-delete", function(){
		index = $('.position-delete').index(this);
		id = $(this).data("id");
		
		$.ajax({
			type: "POST",
			url: "cart/del.php",
			data: ({id: id}),
			success: function(data)
			{
				$('.position').eq(index).remove();
				calculate();
			}
		});
		
		return false;
	});
	
	//сделать заказ
	$('.order-finish').click(function(){
		$('.order-form').toggleClass("hide");
		
		return false;
	});
	
	//отправить заказ
	$('#finish').click(function(){
		if($('#order input#name').val() == '' || $('#order input#tel').val() == '')
		{
			sysMsg("Форма заполнена некорректно!", "#ff928d"); //99c867
		}
		else
		{
			data = $('#order').serialize();
			
			$.ajax({
				type: "POST",
				url: "cart/sendorder.php",
				data: (data),
				beforeSend: function()
				{
					$('#finish').html('Отправляем...');
				},
				success: function(data)
				{
					if(data == 0)
					{
						sysMsg("телефон указан неверно!", "#ff928d");
						$('#finish').html('Отправить заказ');
					}
					else if(data == 1)
					{
						sysMsg("Вы ничего не заказали!", "#ff928d");
						$('#finish').html('Отправить заказ');
					}
					else
					{
						sysMsg(data, '#99c867');
						$('#finish').html('Отправить заказ');
						
						//обнуляем поля
						$('#order input#name').val('');
						$('#order input#tel').val('');
					}
				}
			});
		}
		
		return false;
	});
	
	$('#callme-button').click(function(){
		if($('#callme-input').val() == '')
		{
			sysMsg("Форма заполнена некорректно!", "#ff928d"); //99c867
		}
		else
		{
			tel = $('#callme-input').val();
			
			$.ajax({
				type: "POST",
				url: "cart/sendcall.php",
				data: ({tel:tel}),
				beforeSend: function()
				{
					$('#callme-button').html('Отправляем...');
				},
				success: function(data)
				{
					$('#callme-button').val('');
					$('#callme-button').html('Позвоните мне');
					sysMsg(data, "#99c867"); //99c867
				}
			});
		}
	});
	
	//закрыть форму заказа
	$('.order-form .close').click(function(){
		$('.order-form').toggleClass("hide");
		
		return false;
	});
	
	//форма звонка
	$('.callme').click(function(){
		$('.callme-block').toggleClass("hide");
		
		return false;
	});
	
	//закрыть форму звонка
	$('.callme-inner .close').click(function(){
		$('.callme-block').toggleClass("hide");
		
		return false;
	});
	
	function sysMsg(response, color)
	{
		if(color != 0)
			$(".system-message").css({'background':color});
		
		$(".system-message").html(response);
		$(".system-message").slideDown(200);
		setTimeout(function(){$(".system-message").slideUp(200)}, 2000);
	}
	
	//открыть корзину
	$('#opencart, .bodyshadow').click(function(){
		$('body').toggleClass('bodyleft');
		$('.panel').toggleClass('panelleft');
		$('.bodyshadow').toggleClass('hide');
		$('.side-bar-right').toggleClass('cartleft');
		
		return false;
	});
	
	
	//показать блок с альтернативным описанием
	$('.block').click(function(){
		index = $('.block').index(this);
		
		$('.alter-buy').html('В корзину');
		$('.alterinfo #title, .alterinfo .info, .alterinfo .netto, .alterinfo .price, .alterinfo .img').html(''); //очищаем тэги
		
		$('.alterinfo #title').html($(this).find('.title-export').html()); //грабим заголовок
		$('.alterinfo .info').html($(this).find('.alter-info .description').html()); //грабим описание
		$('.alterinfo .netto').html($(this).find('.netto').html()); //масса
		$('.alterinfo .price').html($(this).find('.price').html()); //цена
		$('.alterinfo .img').html($(this).find('.alter-info .img').html()); //цена
		
		$('.alter-buy').attr("data-item-id", index);
		
		$('.alterinfo').toggleClass('hide');
	});
	
	$('.block-alterinfo .close').click(function(){
		$('.alterinfo').toggleClass('hide');
		
		return false;
	});

});