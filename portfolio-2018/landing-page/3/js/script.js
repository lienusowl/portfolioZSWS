//плавный переход
$(function() {
       $('a.smooth-a').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -32
      }, 1000);
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

//старт и пауза видео
$(function(){
    $(".video-start").click(function() {
      toggleVideo();
    });
    $(".video-pause").click(function() {
      toggleVideo('hide');
    });
});
(function(){
var a = document.querySelector('#aside1'), b = null, P = 0;
window.addEventListener('scroll', Ascroll, false);
document.body.addEventListener('scroll', Ascroll, false);
function Ascroll() {
  if (b == null) {
    var Sa = getComputedStyle(a, ''), s = '';
    for (var i = 0; i < Sa.length; i++) {
      if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
        s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
      }
    }
    b = document.createElement('div');
    b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
    a.insertBefore(b, a.firstChild);
    var l = a.childNodes.length;
    for (var i = 1; i < l; i++) {
      b.appendChild(a.childNodes[1]);
    }
    a.style.height = b.getBoundingClientRect().height + 'px';
    a.style.padding = '0';
    a.style.border = '0';
  }
  var Ra = a.getBoundingClientRect(),
      R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('#article').getBoundingClientRect().bottom);  // селектор блока, при достижении нижнего края которого нужно открепить прилипающий элемент
  if ((Ra.top - P) <= 0) {
    if ((Ra.top - P) <= R) {
      b.className = 'stop';
      b.style.top = - R +'px';
    } else {
      b.className = 'sticky';
      b.style.top = P + 'px';
    }
  } else {
    b.className = '';
    b.style.top = '';
  }
  window.addEventListener('resize', function() {
    a.children[0].style.width = getComputedStyle(a, '').width
  }, false);
}
})()
setInterval(function(){
  $('.btn>span').addClass('blink_on');
  setTimeout(function(){$('.btn>span').removeClass('blink_on')},1500);
},3000)

$(document).ready(function () {
      var offset = $('#fixed').offset();
    var topPadding = 0;
    $(window).scroll(function() {
        if ($(window).scrollTop() > offset.top) {
            $('#fixed').stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
        }
        else {
            $('#fixed').stop().animate({marginTop: 0});
        }
    });
});


