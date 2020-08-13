$(document).on('ready', function() {
	$(".nav-tabs .item").click(function(e) {
	  e.preventDefault();
	  $(".nav-tabs .item").removeClass('active');
	  $(this).addClass('active');
	})
	// TODO: Add any custom classes with 'position: fixed' to the selector below
	var fixedCls = '.navbar-fixed-top,.navbar-fixed-bottom, .calc-fixed';
	var oldSSB = $.fn.modal.Constructor.prototype.setScrollbar;
	$.fn.modal.Constructor.prototype.setScrollbar = function () {
		oldSSB.apply(this);
		if (this.bodyIsOverflowing && this.scrollbarWidth)
			$(fixedCls).css('padding-right', this.scrollbarWidth);
	}

	var oldRSB = $.fn.modal.Constructor.prototype.resetScrollbar;
	$.fn.modal.Constructor.prototype.resetScrollbar = function () {
		oldRSB.apply(this);
		$(fixedCls).css('padding-right', '');
	}
	$('.slider-reviews').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: true,
	  responsive: [
	  	{
	      breakpoint: 480,
	      settings: {
	        arrows:false,
	        dots: true
	      }
	    }
	  ]
	});
	$('.slider-gallery').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-gallery-nav',
	  responsive: [
	  	{
	      breakpoint: 480,
	      settings: {
	        arrows:true
	      }
	    }
	  ]
	});
	$('.slider-gallery-nav').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.slider-gallery',
	  vertical: true,
	  dots: false,
	  arrows: false,
	  centerMode: true,
	  focusOnSelect: true
	});
	$('input').on('change', function () {if ($(this).val()!='') $(this).addClass('not-empty');});
});