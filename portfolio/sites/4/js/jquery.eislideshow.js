(function( window, $, undefined ) {
	
	/*
	* smartresize: debounced resize event for jQuery
	*
	* latest version and complete README available on Github:
	* https://github.com/louisremi/jquery.smartresize.js
	*
	* Copyright 2011 @louis_remi
	* Licensed under the MIT license.
	*/

	var $event = $.event, resizeTimeout;

	$event.special.smartresize 	= {
		setup: function() {
			$(this).bind( "resize", $event.special.smartresize.handler );
		},
		teardown: function() {
			$(this).unbind( "resize", $event.special.smartresize.handler );
		},
		handler: function( event, execAsap ) {
			// Сохраняем контекст
			var context = this,
				args 	= arguments;

			// Устанавливаем правильный тип события
			event.type = "smartresize";

			if ( resizeTimeout ) { clearTimeout( resizeTimeout ); }
			resizeTimeout = setTimeout(function() {
				jQuery.event.handle.apply( context, args );
			}, execAsap === "execAsap"? 0 : 100 );
		}
	};

	$.fn.smartresize 			= function( fn ) {
		return fn ? this.bind( "smartresize", fn ) : this.trigger( "smartresize", ["execAsap"] );
	};
	
	$.Slideshow 				= function( options, element ) {
	
		this.$el			= $( element );
		
		/***** Изобаржения ****/
		
		// Список изобаржений
		this.$list			= this.$el.find('ul.ei-slider-large');
		// Пункты списка
		this.$imgItems		= this.$list.children('li');
		// Общее количество изображений
		this.itemsCount		= this.$imgItems.length;
		// Изобаржения
		this.$images		= this.$imgItems.find('img:first');
		
		/***** Мимниатюры ****/
		
		// Контейнер миниатюр
		this.$sliderthumbs	= this.$el.find('ul.ei-slider-thumbs').hide();
		// Элементы слайдера
		this.$sliderElems	= this.$sliderthumbs.children('li');
		// Выскальзывающий элемент div
		this.$sliderElem	= this.$sliderthumbs.children('li.ei-slider-element');
		// Миниатюры
		this.$thumbs		= this.$sliderElems.not('.ei-slider-element');
		
		// Нициализация слайдшоу
		this._init( options );
		
	};
	
	$.Slideshow.defaults 		= {
		// Типы анимации:
		// "sides" : новый слайд выскальзывает слева или справа
		// "center": новый слайд появляется в центре
		animation			: 'sides', // sides || center
		// Если значение true, то включается автопроигрывание слайдшоу, которое отключается при нажатии на миниатюру
		autoplay			: false,
		// Интервал для слайшоу
		slideshow_interval	: 3000,
		// Скорость анимации смены слайдов
		speed			: 800,
		// Функция перехода для анимации смены слайдов
		easing			: '',
		// Процентное соотношение анимации заголовков. Скорость будет определяться по формуле speed * titlesFactor
		titlesFactor		: 0.60,
		// Скорость анимации заголвоков
		titlespeed			: 800,
		// Функция перехода для анимации заголовоков
		titleeasing			: '',
		// Максимальная ширина для миниатюр в px
		thumbMaxWidth		: 150
    };
	
	$.Slideshow.prototype 		= {
		_init 				: function( options ) {
			
			this.options 		= $.extend( true, {}, $.Slideshow.defaults, options );
			
			// Устанавливаем непрозрачность для элементов заголовков и изображений
			this.$imgItems.css( 'opacity', 0 );
			this.$imgItems.find('div.ei-title > *').css( 'opacity', 0 );
			
			// Индекс текущего видимого слайда
			this.current		= 0;
			
			var _self			= this;
			
			// Предварительная загрузка изображений
			// Добавляем статус загрузки
			this.$loading		= $('<div class="ei-slider-loading">Loading</div>').prependTo( _self.$el );
			
			$.when( this._preloadImages() ).done( function() {
				
				// /скрываем статус загрузки
				_self.$loading.hide();
				
				// Вычисляем размер и положение для каждого изображения
				_self._setImagesSize();
				
				// Конфигурируем контейнер для миниатюр
				_self._initThumbs();
				
				// Выводим первый пункт
				_self.$imgItems.eq( _self.current ).css({
					'opacity' 	: 1,
					'z-index'	: 10
				}).show().find('div.ei-title > *').css( 'opacity', 1 );
				
				// Если включено автопроигрывание
				if( _self.options.autoplay ) {
				
					_self._startSlideshow();
				
				}
				
				// Инициалищируем события
				_self._initEvents();
			
			});
			
		},
		_preloadImages		: function() {
			
			// Предварительная загрузка всех больших изображений
			
			var _self	= this,
				loaded	= 0;
			
			return $.Deferred(
			
				function(dfd) {
			
					_self.$images.each( function( i ) {
						
						$('<img/>').load( function() {
						
							if( ++loaded === _self.itemsCount ) {
							
								dfd.resolve();
								
							}
						
						}).attr( 'src', $(this).attr('src') );
					
					});
					
				}
				
			).promise();
			
		},
		_setImagesSize		: function() {
			
			// Сохраняе ширину слайда
			this.elWidth	= this.$el.width();
			
			var _self	= this;
			
			this.$images.each( function( i ) {
				
				var $img	= $(this);
					imgDim	= _self._getImageDim( $img.attr('src') );
					
				$img.css({
					width		: imgDim.width,
					height		: imgDim.height,
					marginLeft	: imgDim.left,
					marginTop	: imgDim.top
				});
				
			});
		
		},
		_getImageDim		: function( src ) {
			
			var $img    = new Image();
							
			$img.src    = src;
					
			var c_w		= this.elWidth,
				c_h		= this.$el.height(),
				r_w		= c_h / c_w,
				
				i_w		= $img.width,
				i_h		= $img.height,
				r_i		= i_h / i_w,
				new_w, new_h, new_left, new_top;
					
			if( r_w > r_i ) {
				
				new_h	= c_h;
				new_w	= c_h / r_i;
			
			}
			else {
			
				new_h	= c_w * r_i;
				new_w	= c_w;
			
			}
					
			return {
				width	: new_w,
				height	: new_h,
				left	: ( c_w - new_w ) / 2,
				top		: ( c_h - new_h ) / 2
			};
		
		},
		_initThumbs			: function() {
		
			// Устанавливаем свойство max-width элемента слайдера
			// Также устанавливаем ширину каждого слайда по формуле 100% / на общее количество элементов
			this.$sliderElems.css({
				'max-width' : this.options.thumbMaxWidth + 'px',
				'width'		: 100 / this.itemsCount + '%'
			});
			
			// Устанавливаем свойство max-width слайда и выводим его
			this.$sliderthumbs.css( 'max-width', this.options.thumbMaxWidth * this.itemsCount + 'px' ).show();
			
		},
		_startSlideshow		: function() {
		
			var _self	= this;
			
			this.slideshow	= setTimeout( function() {
				
				var pos;
				
				( _self.current === _self.itemsCount - 1 ) ? pos = 0 : pos = _self.current + 1;
				
				_self._slideTo( pos );
				
				if( _self.options.autoplay ) {
				
					_self._startSlideshow();
				
				}
			
			}, this.options.slideshow_interval);
		
		},
		// Выводим слайд для нажатой миниатюры
		_slideTo			: function( pos ) {
			
			// выходим, если нажат тот же элемент или он анаимируется в данный момент
			if( pos === this.current || this.isAnimating )
				return false;
			
			this.isAnimating	= true;
			
			var $currentSlide	= this.$imgItems.eq( this.current ),
				$nextSlide		= this.$imgItems.eq( pos ),
				_self			= this,
				
				preCSS			= {zIndex	: 10},
				animCSS			= {opacity	: 1};
			
			// Новый слайд будет выскальзывать слева или справа
			if( this.options.animation === 'sides' ) {
				
				preCSS.left		= ( pos > this.current ) ? -1 * this.elWidth : this.elWidth;
				animCSS.left	= 0;
			
			}	
			
			// Анимация заголовков
			$nextSlide.find('div.ei-title > h2')
					  .css( 'margin-right', 50 + 'px' )
					  .stop()
					  .delay( this.options.speed * this.options.titlesFactor )
					  .animate({ marginRight : 0 + 'px', opacity : 1 }, this.options.titlespeed, this.options.titleeasing )
					  .end()
					  .find('div.ei-title > h3')
					  .css( 'margin-right', -50 + 'px' )
					  .stop()
					  .delay( this.options.speed * this.options.titlesFactor )
					  .animate({ marginRight : 0 + 'px', opacity : 1 }, this.options.titlespeed, this.options.titleeasing )
			
			$.when(
				
				// Убираем текущии заголвоки
				$currentSlide.css( 'z-index' , 1 ).find('div.ei-title > *').stop().fadeOut( this.options.speed / 2, function() {
					// сбрасываем стили
					$(this).show().css( 'opacity', 0 );	
				}),
				
				// Анимация вывода следующего слайдаы
				$nextSlide.css( preCSS ).stop().animate( animCSS, this.options.speed, this.options.easing ),
				
				// Перемещаем индикатор в нвое положение
				this.$sliderElem.stop().animate({
					left	: this.$thumbs.eq( pos ).position().left
				}, this.options.speed )
				
			).done( function() {
				
				// Сбрасываем значения
				$currentSlide.css( 'opacity' , 0 ).find('div.ei-title > *').css( 'opacity', 0 );
					_self.current	= pos;
					_self.isAnimating		= false;
				
				});
				
		},
		_initEvents			: function() {
			
			var _self	= this;
			
			// Изменение размеров окна
			$(window).on( 'smartresize.eislideshow', function( event ) {
				
				// Изменяем размеры изображений
				_self._setImagesSize();
			
				// Сбрасываем положение миниатюр
				_self.$sliderElem.css( 'left', _self.$thumbs.eq( _self.current ).position().left );
			
			});
			
			// Нажатие на миниатюре
			this.$thumbs.on( 'click.eislideshow', function( event ) {
				
				if( _self.options.autoplay ) {
				
					clearTimeout( _self.slideshow );
					_self.options.autoplay	= false;
				
				}
				
				var $thumb	= $(this),
					idx		= $thumb.index() - 1;
					
				_self._slideTo( idx );
				
				return false;
			
			});
			
		}
	};
	
	var logError 				= function( message ) {
		
		if ( this.console ) {
			
			console.error( message );
			
		}
		
	};
	
	$.fn.eislideshow			= function( options ) {
	
		if ( typeof options === 'string' ) {
		
			var args = Array.prototype.slice.call( arguments, 1 );

			this.each(function() {
			
				var instance = $.data( this, 'eislideshow' );
				
				if ( !instance ) {
					logError( "cannot call methods on eislideshow prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				}
				
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {
					logError( "no such method '" + options + "' for eislideshow instance" );
					return;
				}
				
				instance[ options ].apply( instance, args );
			
			});
		
		} 
		else {
		
			this.each(function() {
			
				var instance = $.data( this, 'eislideshow' );
				if ( !instance ) {
					$.data( this, 'eislideshow', new $.Slideshow( options, this ) );
				}
			
			});
		
		}
		
		return this;
		
	};
	
})( window, jQuery );