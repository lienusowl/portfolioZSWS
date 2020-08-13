$(document).ready(function(){
  //слайдер
  $('.header-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 6000,
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
  $('.gallery-slider-1').slick({
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
  $('.gallery-slider-2').slick({
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
  $('.certificates-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:false,
          dots: true,
          slidesToShow: 1
        }
      }
    ]
  });
  //маска
  jQuery(function($){
     $(".phone .form-control").mask("+7 (999) 999-9999");
  });
});