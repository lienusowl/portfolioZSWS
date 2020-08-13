$(document).ready(function(){
  //слайдер
  $('.header-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
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
  $('.header-slider .next').on('click', function() {
    $('.header-slider').slick('slickNext');
  });
  $('.header-slider .prev').on('click', function() {
    $('.header-slider').slick('slickPrev');
  });

  $('.partners-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          settings: "unslick"
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows:true,
          dots: false,
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
    ]
  });
  //слайдер
  $('.catalog-index-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
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
  $('#catalog-index .next').on('click', function() {
    $('.catalog-index-slider').slick('slickNext');
  });
  $('#catalog-index .prev').on('click', function() {
    $('.catalog-index-slider').slick('slickPrev');
  });
  //карточка товара
  $('.cart-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: '.cart-slider-nav',
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.cart-slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.cart-slider',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
  $('.cart-interior-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.cart-more-slider').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true,
          slidesToShow: 3
        }
      }
    ]
  });
  $('.club-gallery-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true,
          slidesToShow: 1
        }
      }
    ]
  });
});