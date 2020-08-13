$(document).ready(function() {
  //слайдер
  $('.header-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
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
  $('.types-slider1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.types-slider2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.types-slider3').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.types-slider4').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.types-slider5').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.types-slider6').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.types-slider7').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows:true
        }
      }
    ]
  });
  $('.types-slider8').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
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
  $('.sale-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
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
  $('.about-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
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
});
//модальное окно при закрытии видео
$(function(){
    $(".video-show").click(function() {
      toggleVideo('hide');
       $(".modal-feedback").modal('hide');
       document.getElementById('tid').value='Заявка с видео';document.getElementById('modal_title').innerHTML='Получите больше информации о новейшей услуге All-on-4, оставьте заявку и мы отправим вам подробную презентацию';
        setTimeout(function() {
          $("#call2").modal('show'); //показать модальное окно успешной отправки
        }, 500);
    });
});
function onYouTubePlayerAPIReady() {
  player = new YT.Player('Youtube', {
    events: {'onReady': onPlayerReady}
  });
}
function toggleVideo(state) {
    // if state == 'hide', hide. Else: show video
    var div = document.getElementById("popupVid");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    div.style.display = state == 'hide' ? 'none' : '';
    func = state == 'hide' ? 'pauseVideo' : 'playVideo';
    iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
}
function toggleVideo2(state) {
    // if state == 'hide', hide. Else: show video
    var div = document.getElementById("popupVid2");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    div.style.display = state == 'hide' ? 'none' : '';
    func = state == 'hide' ? 'pauseVideo' : 'playVideo';
    iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
}
//старт и пауза видео
$(function(){
    $(".video-start").click(function() {
      toggleVideo();
      toggleVideo2();
    });
    $(".video-pause").click(function() {
      toggleVideo('hide');
      toggleVideo2('hide');
    });
});