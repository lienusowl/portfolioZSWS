		//
		//  ѕрописываем событие, после наступлени€ которого аккордеоны начинают загружатьс€
		// 
		Event.observe(window, 'load', loadAccordions, false);
	
		//
		//	«агружаем аккордеоны
		//
		function loadAccordions() {
			
			
			var bottomAccordion = new accordion('vertical_container');
			
			var nestedVerticalAccordion = new accordion('vertical_nested_container', {
			  classNames : {
					toggle : 'vertical_accordion_toggle',
					toggleActive : 'vertical_accordion_toggle_active',
					content : 'vertical_accordion_content'
				}
			});
			
			
			// ≈сли не хотите, чтобы первый вопрос открывалс€ автоматом, то удалите строку ниже
		
			
		}
	