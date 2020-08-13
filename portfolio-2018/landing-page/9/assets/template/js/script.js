$(document).ready(function(){
  //слайдер
  $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    adaptiveHeight: true,
    fade: true,
    swipe: false,
    accessibility: false,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:false,
          dots: false
        }
      }
    ]
  });
  $('.next').on('click', function() {
    $('.main-slider').slick('slickNext');
  });
  $('.prev').on('click', function() {
    $('.main-slider').slick('slickPrev');
  });

  //наши работы
  $('.works-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    infinite: true,
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
  jQuery(function($){
     $(".form-control.phone").mask("+7 (999) 999-9999");
  });
  //disabled-enabled
  $(function() {
    $(opt2).keyup(function() {
        if($(this).val())$('#opt2-btn').addClass('enabled', 'enabled');
        else
        $('#opt2-btn').removeClass('enabled');
    });
  })
  $(function() {
    $(opt3).change(function() {
        if($(this).val())$('#opt3-btn').addClass('enabled', 'enabled');
        else
        $('#opt3-btn').removeClass('enabled');
    });
  })
  $(function() {
    $(opt4).change(function() {
        if($(this).val())$('#opt4-btn').addClass('enabled', 'enabled');
        else
        $('#opt4-btn').removeClass('enabled');
    });
  })
  /*$(function() {
    $(opt5).change(function() {
        if($(this).val())$('#opt5-btn').addClass('enabled', 'enabled');
        else
        $('#opt5-btn').removeClass('enabled');
    });
  })*/
  $(".slide-5 .price-box").click(function(e) {
    $("#opt5-btn").addClass('enabled');
  })
  $(".slide-6 .gift-box").click(function(e) {
    $("#opt6-btn").addClass('enabled');
  })
});