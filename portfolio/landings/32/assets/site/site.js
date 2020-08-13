/*!
 *  Р‘СЋСЂРѕ РґРёР·Р°Р№РЅР°
 *  РњС‹ СЃРѕР·РґР°С‘Рј С…РѕСЂРѕС€РёРµ РІРµР±-СЃР°Р№С‚С‹
 *  СЃ РїСЂРѕРґСѓРјР°РЅРЅРѕР№ СЃС‚СЂР°С‚РµРіРёРµР№, РґРёР·Р°Р№РЅРѕРј Рё С„СѓРЅРєС†РёРѕРЅР°Р»РѕРј.
 *  -------------------------------------------------------
 *
 *  РљРѕРЅС‚Р°РєС‚С‹
 *  -------------------------------------------------------
 *  Email: unr@artismensa.ru
 *  WWW: http://artismensa.ru
 */


jQuery(window).load(function() {
	var preloaderDelay = 350,
		preloaderFadeOutTime = 800;

	function hidePreloader() {
		var loadingAnimation = $('#loading-animation'),
			preloader = $('#preloader');

		loadingAnimation.fadeOut();
		preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);
	}

	hidePreloader();

});

function bg_line(activeIndex){
	var big_line = $('.big_line');
	var shop_gallery_thumbs_active = $('.thumb_list .thumb_itm.active');
	if(activeIndex != null){
		var index = $('.thumb_list .thumb_itm').index(shop_gallery_thumbs_active);
	} else {
		var index = activeIndex;
	}
	var offset = shop_gallery_thumbs_active.offset();
	//alert(index)
	var $window = $(window);
	var w_w = $window.width();
	var act_w = Number(shop_gallery_thumbs_active.width()) / Number(2);
	var w_w_padding = (Number(w_w) - Number(970)) / Number(2);

	var real_pos = Number(3000) + Number(10) - Number(act_w) - Number(offset.left);


	big_line.css({
		'backgroundPosition': '-'+real_pos+'px 0'
	})
	//alert(index);
}

jQuery(document).ready(function($) {
	$('.yellow').parallax('50%', 0.2);
	$('#top_nav ul').onePageNav({
		currentClass: 'active',
		changeHash: false
	});



	var shop_gallery = $('.service_gallery');
	var shop_gallery_thumbs = $('.thumb_list .thumb_itm');
	var shop_gallery_options = {
		width: '100%',
		height: 'auto',
		margin: 0,
		background: 'transparent',
		shadows: false,
		vertical: false,
		cropToFit: false,
		click: false,
		nav: 'none',
		loop: true,
		arrows: false,
		autoplay: false,
		//transition: 'fade',
		stopAutoplayOnAction: false,
		transitionDuration: '600',
		//flexible: true,
		onShowImg: function(data, auto) {
			activeIndex = data.index;
			shop_gallery_thumbs.not(
				shop_gallery_thumbs.eq(activeIndex).addClass('active')
			).removeClass('active');

			var new_index = activeIndex;
			var new_w = shop_gallery.width();
			var new_h = shop_gallery.find('.service_itm').eq(new_index).height();
			var new_aspectRatio = Number(new_w) / Number(new_h)
			shop_gallery.trigger('rescale', [new_w, new_h, new_aspectRatio, 500])

			bg_line(activeIndex);
		}

	};
	shop_gallery.fotorama(shop_gallery_options);
	shop_gallery_thumbs.bind('click', function(e){
		shop_gallery.trigger('showimg', shop_gallery_thumbs.index(this));
		//alert(shop_gallery_thumbs.index(this));
		var new_index = shop_gallery_thumbs.index(this);
		var new_w = shop_gallery.width();
		var new_h = shop_gallery.find('.service_itm').eq(new_index).height();
		var new_aspectRatio = Number(new_w) / Number(new_h)
		shop_gallery.trigger('rescale', [new_w, new_h, new_aspectRatio, 500])
		bg_line(shop_gallery_thumbs.index(this))
		return false;
	});



	var $container = $('#portfolio-container');

	$container.isotope({
		resizable: false,
		itemSelector : ".item",
		masonry : {
			columnWidth : 1,
			gutterWidth: 1,
		}

	});

	var $win = $(window);
	var $img = $('.fader')
	$win.resize(function(){
		bg_line();
	}).resize();


	$win.on('scroll', function () {
		var scrollTop = $win.scrollTop(); 					// This is 0 at the top, and tracks your scrolling progress
		var startFadePos = -50; 							// The point to start fading in from the bottom in pixels.
		var startFadeBot = $win.height() - startFadePos;	// Creates the point based on window height.
		var endFadePos = 300;								// The point to end the fade
		var usePercent = false;
		//var endFadeTop = 0;
		var startFadeNumber = 0.2; 							// Fade starts at 20$ opacity. This number must be between 0-1. 0.2 = 20%
		var endFadeNumber = 1;
		var scrollArea = $win.height() - (startFadePos+endFadePos);		// In case it is needed.

		$img.each(function () {

			var $self = $(this);
			var prev=$self.offset(); // Grabs Top and Left values and writes as properties. These are static values
			var scrollPos = prev.top - scrollTop;
			var pt = 0;
			if(scrollPos < endFadePos){						// Changes opacity to endFadeNumber when scrolled above endFadePos.
				$self.css({
					opacity: endFadeNumber
				});
			} else if (scrollPos > startFadeBot){			// Changes opacity to startFadeNumber opacity before scrolled to startFadePos.
				$self.css({
					opacity: startFadeNumber
				});
			} else if (scrollPos < startFadeBot && scrollPos > endFadePos){								// Here's where the magic happens
				var percentComp = 1-(scrollPos-endFadePos)/(startFadeBot-endFadePos);
				if(startFadeNumber != 0 || endFadeNumber != 1){
					var theDiff = endFadeNumber - startFadeNumber;										// Start opacity change at startFadeNumber if not 0.
					var newNumber = startFadeNumber+percentComp-(startFadeNumber*percentComp);
				}
				$self.css({
					opacity: newNumber
				});
			}
		});

	}).scroll();


});
