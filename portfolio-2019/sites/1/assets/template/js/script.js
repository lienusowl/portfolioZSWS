$(document).ready(function(){
  //плавный переход
  $(function() {
    $('a.smooth').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -0
      }, 1000);
    });
  });
  //кнопка вверх
  $(function() {
   $.fn.scrollToTop = function() {
    $(this).hide().removeAttr("href");
    if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
    var scrollDiv = $(this);
    $(window).scroll(function() {
     if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
     else $(scrollDiv).fadeIn("slow")
    });
    $(this).click(function() {
     $("html, body").animate({scrollTop: 0}, "slow")
    })
   }
  });
   
  $(function() {
   $("#Go_Top").scrollToTop();
  });
  //svg-картинки
  jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');
  });
  //слайдер
  $('.header-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    fade: true,
    pauseOnHover: false,
    customPaging: function (slider, i)
    {
    return i + 1;
    },
    dots:true,
    appendDots:$('#header-index .dots'),
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
  //fancybox
  $(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    padding: 0
  });
  //fancybox-video class="fancybox-video" data-rel="media"
  $('.fancybox-video').fancybox({
      openEffect  : 'none',
      closeEffect : 'none',
      padding: 0,
      helpers : {
          media : {}
      }
  });
});