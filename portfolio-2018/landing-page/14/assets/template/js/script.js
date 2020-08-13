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
  $('.experts-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    autoplay: true,
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
  $('.works-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
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
  $('#works .slick-next').on('click', function() {
    $('.works-slider').slick('slickNext');
  });
  $('#works .slick-prev').on('click', function() {
    $('.works-slider').slick('slickPrev');
  });
  $('.process-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
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
  $('#process .slick-next').on('click', function() {
    $('.process-slider').slick('slickNext');
  });
  $('#process .slick-prev').on('click', function() {
    $('.process-slider').slick('slickPrev');
  });
  //fancybox
  $(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    padding: 5
  });
  $('.main-slider').fullpage({
    //sectionsColor: ['#61bd6d', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
    //anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
    //menu: '#menu',
    verticalCentered: true,
    slidesNavigation: false,
    responsiveWidth: 768,
    anchors: ['section1', 'section2', 'section3', 'section4', 'section5'],
    menu: '#menu'
    //fadingEffect: true
  });
  //Preloader
});
$(document).ready(function () {
  var aboveHeight = $('#section1').outerHeight();
  $(window).scroll(function () {
    if ($(window).scrollTop() > aboveHeight) {
      $('.nav-box').addClass('fixed');
    } else {
      $('.nav-box').removeClass('fixed');
    }
  });
});