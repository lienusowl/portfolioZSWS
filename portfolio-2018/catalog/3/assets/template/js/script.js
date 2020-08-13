$(document).ready(function(){
  //плавный переход
  $(function() {
    $('a.smooth').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -32
      }, 1000);
    });
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
  $('.header-index-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
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
  $('.main-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
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
  $('#sale-index .slick-next').on('click', function() {
    $('#sale-index .main-slider').slick('slickNext');
  });
  $('#sale-index .slick-prev').on('click', function() {
    $('#sale-index .main-slider').slick('slickPrev');
  });
  $('#last-index .slick-next').on('click', function() {
    $('#last-index .main-slider').slick('slickNext');
  });
  $('#last-index .slick-prev').on('click', function() {
    $('#last-index .main-slider').slick('slickPrev');
  });
   $('#brands-index .slick-next').on('click', function() {
    $('#brands-index .main-slider').slick('slickNext');
  });
  $('#brands-index .slick-prev').on('click', function() {
    $('#brands-index .main-slider').slick('slickPrev');
  });
  $('.cart-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.cart-slider-nav',
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:false
        }
      }
    ]
  });
  $('.cart-slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.cart-slider',
    //vertical: true,
    dots: false,
    arrows: true,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:false,
          slidesToShow: 3
        }
      }
    ]
  });
});