$(document).ready(function(){
  //плавный переход
  $(function() {
    $('a.smooth').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -70
      }, 1000);
    });
  });
  //слайдер
  $('.how-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    dots: false,
    asNavFor: '.how-slider-nav',
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.how-slider-nav').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: false,
    focusOnSelect: true,
    asNavFor: '.how-slider',
    dots: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.result-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          dots:true,
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.gallery-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    arrows: false,
    dots: false,
    asNavFor: '.gallery-slider-nav',
    responsive: [
      {
        breakpoint: 480,
        settings: {
          dots: true
        }
      }
    ]
  });
  $('.gallery-slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    focusOnSelect: false,
    asNavFor: '.gallery-slider',
    dots: false,
    arrows: false,
    fade: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.gallery-slider-nav-container .next').on('click', function() {
    $('.gallery-slider').slick('slickNext');
  });
  $('.gallery-slider-nav-container .prev').on('click', function() {
    $('.gallery-slider').slick('slickPrev');
  });
  $('.test-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    focusOnSelect: false,
    dots: false,
    arrows: false,
    fade: true,
    swipe: false,
    accessibility: false,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.test-slider .next').on('click', function() {
    $('.test-slider').slick('slickNext');
  });
  $('.test-slider .prev').on('click', function() {
    $('.test-slider').slick('slickPrev');
  });
  //маска
  jQuery(function($){
     $(".phone .form-control").mask("+7 (999) 999-9999");
  });
  //disabled-enabled
  $(function() {
    $('.step-1 .radio-btn input').change(function() {
        if($(this).val())$('.step-1 .next').addClass('enabled', 'enabled');
        else
        $('.step-1 .next').removeClass('enabled');
        if($(this).val())$('.step-1 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-1 .result2').removeClass('hidden');
    });
  })
  $(function() {
    $('.step-2 .radio-btn input').change(function() {
        if($(this).val())$('.step-2 .next').addClass('enabled', 'enabled');
        else
        $('.step-2 .next').removeClass('enabled');
        if($(this).val())$('.step-2 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-2 .result2').removeClass('hidden');
    });
  })
  $(function() {
    $('.step-3 .radio-btn input').change(function() {
        if($(this).val())$('.step-3 .next').addClass('enabled', 'enabled');
        else
        $('.step-3 .next').removeClass('enabled');
        if($(this).val())$('.step-3 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-3 .result2').removeClass('hidden');
    });
  })
  $(function() {
    $('.step-4 .radio-btn input').change(function() {
        if($(this).val())$('.step-4 .next').addClass('enabled', 'enabled');
        else
        $('.step-4 .next').removeClass('enabled');
        if($(this).val())$('.step-4 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-4 .result2').removeClass('hidden');
    });
  })
  $(function() {
    $('.step-5 .radio-btn input').change(function() {
        if($(this).val())$('.step-5 .next').addClass('enabled', 'enabled');
        else
        $('.step-5 .next').removeClass('enabled');
        if($(this).val())$('.step-5 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-5 .result2').removeClass('hidden');
    });
  })
  $(function() {
    $('.step-6 .radio-btn input').change(function() {
        if($(this).val())$('.step-6 .next').addClass('enabled', 'enabled');
        else
        $('.step-6 .next').removeClass('enabled');
        if($(this).val())$('.step-6 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-6 .result2').removeClass('hidden');
    });
  })
  $(function() {
    $('.step-7 .radio-btn input').change(function() {
        if($(this).val())$('.step-7 .next').addClass('enabled', 'enabled');
        else
        $('.step-7 .next').removeClass('enabled');
        if($(this).val())$('.step-7 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-7 .result2').removeClass('hidden');
    });
  })
  $(function() {
    $('.step-8 .radio-btn input').change(function() {
        if($(this).val())$('.step-8 .next').addClass('enabled', 'enabled');
        else
        $('.step-8 .next').removeClass('enabled');
        if($(this).val())$('.step-8 .result1').addClass('hidden', 'hidden');
        if($(this).val())$('.step-8 .result2').removeClass('hidden');
    });
  })
});