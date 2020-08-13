$(function() {
    
    // jQuery functions

    // Size cover
    var coverSize  = function(){
        var windowHeight = $(window).height();
        $('.screen').height('auto');
        if (($(window).width()) < 550) {
            $('.screen').height('auto');
        }else {
          $('.screen__cover__h').each(function(){
              var itemHeight = $(this).parents('.screen').find('.screen__content').height();
              if ( itemHeight < windowHeight) {
                  $(this).parents('.screen').height(windowHeight);
             }
          });
        }
        
    };

    // Waypoints
    var waypointInit = function(){
        $('.screen').not('.screen_alone').waypoint(function(direction) {
                // var itemIndex = $('.screen').index($(this)[0].className);
                var itemIndex;
                if (direction == 'down') {
                      itemIndex = $(this).context.attributes['data-index'].value -2;
                   
                  } else {
                      itemIndex = $(this).context.attributes['data-index'].value -3;
                  }

                  $('.navigation__list').each(function(){
                      $(this).find('.navigation__item').eq(itemIndex).addClass('navigation__item_state_active').siblings().removeClass('navigation__item_state_active');
                      if (itemIndex == -1 ) {
                        $('.navigation__item').removeClass('navigation__item_state_active');
                      }
                  });
            }, { offset: '50%' });
    };
    $(window).load(function(){
        coverSize();
        waypointInit();
    });
    $(window).resize(function(){
        coverSize();
    });

    //Scrolling
    function viewport() {
        var e = window, a = 'inner';
        if (!('innerWidth' in window )) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
    }

    var scrolling = function(anchor){
        if ((viewport().width) < 830) {
          $('.l-html,.l-body').animate({
                scrollTop: $(anchor).offset().top-60
              }, 1000);
        }
        else {
          $('.l-html,.l-body').animate({
                scrollTop: $(anchor).offset().top
              }, 1000);
        }
        
        return false;
    };
    $('.screen-button').click(function(){
        var item = $(this).parents('.screen').index() + 1;
        scrolling('.screen:eq('+item+')');  }
    );

    $('.navigation__item').click(function(){
        var item = $(this).index() + 1;
        scrolling('.screen:eq('+item+')');  
        return false;
      }
    );

    $('.logo').click(function(){
        scrolling('.screen:eq(0)'); 
    });

    $('.screen.screen_mode3 .screen__cover').first().show();

    // Slider
    $(window).load(function(){
        $('.portfolio-slider').flexslider({
            selector: ".portfolio-slider__list > .portfolio-slider__item",
            slideshow: false,
            controlNav: false, 
            controlsContainer: ".portfolio-slider", 
            animationSpeed: 1000,
            after: function(slider) {
                var itemFone = slider.currentSlide;
                $('.screen.screen_mode3 .screen__cover').eq(itemFone).fadeIn('fast').siblings('.screen__cover').fadeOut('fast');
            }
        });

        //Slider product
        $('.slider-category__link').click(function(){
            var itemMenu = $(this).index();
            $(this).addClass('state_active').siblings().removeClass('state_active');
            $('.l-slider-product').eq(itemMenu).addClass('state_active').siblings().removeClass('state_active');
            viewFirst();
        });

        var viewFirst = function(){
            $('.l-slider-product').not('.state_active').find('.slider-product__image1').hide().css({'left': -100});
            $('.l-slider-product').not('.state_active').find('.slider-product__image2').hide().css({'right': -100});
            $('.l-slider-product.state_active .flex-active-slide').find('.slider-product__image1').animate({
                opacity: "show",
                left: 0
            }, 1000);
            $('.l-slider-product.state_active .flex-active-slide').find('.slider-product__image2').animate({
                opacity: "show",
                right: 0
            }, 1000);

        };
        

        $('.l-slider-product').not('.l-slider-product_mod1').find('.slider-product__item').clone().appendTo($(".l-slider-product_mod1 .slider-product__list"));

        

        $('.l-slider-product').each(function(){
            $(this).flexslider({
                selector: ".slider-product__list > .slider-product__item",
                slideshow: false,
                controlNav: false,
                after: function(slider) {
                    var itemFone = slider.currentSlide;
                    // $('.screen.screen_mode3 .screen__cover').eq(itemFone).fadeIn('normal').siblings('.screen__cover').fadeOut('fast');
                    
                    $('.slider-product__image1, .slider-product__image2').stop(true);
                    $('.l-slider-product.state_active .flex-active-slide').find('.slider-product__image1').animate({
                        opacity: "show",
                        left: 0
                    }, 1000);
                    $('.l-slider-product.state_active .flex-active-slide').find('.slider-product__image2').animate({
                        opacity: "show",
                        right: 0
                    }, 1000);
                    $('.l-slider-product.state_active .flex-active-slide').siblings().find('.slider-product__image1').hide().css({'left': -100});
                    $('.l-slider-product.state_active .flex-active-slide').siblings().find('.slider-product__image2').hide().css({'right': -100});
                }
            });
        });

        viewFirst();


    });



    // media-menu
    $('.media-menu').click(function(){
        $('.screen_mode1 .navigation__list, .screen_alone .navigation__list').slideToggle("slow");
    });
    $(window).scroll(function(){
        if (($(window).width()) < 830) {
            $('.screen_mode1 .navigation__list, .screen_alone .navigation__list').slideUp('slow');
        }
    });

    // .office__item
    $('.office__item').click(function(){
        $(this).toggleClass('state_active').siblings().removeClass('state_active');
        // $(this).find('.social__item-note').slideToggle("slow");
    });


    // projects
    $('.projects__link').click(function(){
        $(this).parents('.projects__item').addClass('state_active').siblings().hide();
        $(this).parents('.projects').addClass('state_active');
        coverSize();
        waypointInit();
    });
    $('.projects__link-back').click(function(){
        $('.projects__item, .projects').removeClass('state_active');
        $('.projects__item').show();
        coverSize();
        waypointInit();
    });

    // $('.projects__item-steps')
	
	//ajax blog loading
	maxpos = $(".cntblogs").attr('value');
	
	function getBlogPage(pos){
		$.post("/ajax.php", {pos:pos, act:'artbi'},
			function (res){
				res = $.parseJSON(res);
				if (res.status == '1'){
					$(".blog-text").html(res.result.descr);
					$(".blog-date").html(res.result.auto_date);
					
					if (pos < maxpos){
						$(".blog-navig-prev").attr('value', parseInt(pos) + 1);
						$(".blog-navig-prev").show();
					} else {
						$(".blog-navig-prev").hide();
					}
					
					if (pos > 1){
						$(".blog-navig-next").attr('value', parseInt(pos) - 1);
						$(".blog-navig-next").show();
					} else {
						$(".blog-navig-next").hide();
					}
					
					scrolling('.screen:eq(6)');
					coverSize();
				}
			}
		);
		return false;
	}
	
	$(".blog-navig-prev").click(function(){
		var pos = $(this).attr('value');
		getBlogPage(pos);
		return false;
	});
	
	$(".blog-navig-next").click(function(){
		var pos = $(this).attr('value');
		getBlogPage(pos);
		return false;
	});
	
	$(".ajblog").click(function(){
		var pos = $(this).attr('value');
		getBlogPage(pos);
		return false;
	});



    // End  jQuery functions
});