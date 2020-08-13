$(document).ready(function(){
  //слайдер
  $('.thanks-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:false,
          slidesToShow: 1,
          dots: false
        }
      }
    ]
  });
  $('.test-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    fade: true
  });
  $('.next').on('click', function() {
    $('.test-slider').slick('slickNext');
  });
  //fancybox
  $(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    padding: 0
  });
  jQuery(function($){
     $(".form-control.phone-input").mask("+7 (999) 999-99-99");
  });
});