$(document).ready(function(){

    if ($('.kitelenc').length > 0){
        $('.kitelenc').each(function(){
            var thHei = $(this).height(),
                thFiUl = $(this).find('ul').height(),
                scRol = '<div class="scrol"><div class="polzun"></div></div>';
            if(thFiUl > thHei){
                $(this).before(scRol);
            }
        });
    }

    var delta = 0, iD, y;

    if (window.addEventListener)
        window.addEventListener('DOMMouseScroll', wheel, false);
    window.onmousewheel = document.onmousewheel = wheel;

    function wheel(event){
        if (!event) event = window.event;
        if (event.wheelDelta) { delta = event.wheelDelta/120; }
        else if (event.detail) { delta = -event.detail/3; }
    }

    $('body')
        .on('mouseup',function(){ clearInterval(iD); })
        .on('click',function(){
        $('.popup').each(function(){
            if($(this).css('display') == "block"){
                $(this).removeAttr('style').removeClass('chefatto');
            }
        });
    });

    $('.contentcod')
        .on('mousemove','.kitselect',function(e){  e.preventDefault(); e = e || window.event;  y = e.pageY; })
        .on('mousedown','.scrol .polzun',function(ev){ ev.preventDefault(); ev = ev || window.event;  var y1 = ev.pageY;

            var poShi,poUk = $(this),maxShi = $(poUk).parent().height() - $(poUk).height(),
                koEf,comInCh = parseInt($(poUk).css('marginTop')),list = $(poUk).parents().get(1);
            koEf = ($(list).find('ul').height() - $(list).find('.kitelenc').height())/maxShi;
            iD = setInterval(function(){
                poShi = comInCh + (y - y1);
                if(poShi < 0){ poShi = 0 }
                if(poShi > maxShi){poShi = maxShi}
                $(poUk).css('marginTop',poShi);
                $(list).find('ul').css('marginTop',poShi*(-koEf)+'px');
            },1);

        })
        .on('mouseenter','.kitelenc',function(){
            var maxH = ($(this).find('ul').height()) - ($(this).height()), list = $(this).parent(),
                SpoSt,maxP, kOef;
            maxH <= 0?maxH = 0:maxH = maxH*(-1);
            maxP = $(list).find('.scrol').height() - $(list).find('.scrol .polzun').height();
            kOef = maxH/maxP;
            $('.kitelenc').on('mousewheel DOMMouseScroll' ,function (event) { event.preventDefault();
                if(delta < 0){
                    SpoSt = parseInt($(this).find('ul').css('marginTop'));
                    if(SpoSt > maxH){
                        SpoSt += delta * 10;
                        if(SpoSt < maxH){SpoSt = maxH}
                        $(this).find('ul').css('marginTop',SpoSt+'px');
                        $(list).find('.scrol .polzun').css('marginTop',parseInt(SpoSt/kOef)+'px');
                    }}
                if(delta > 0){
                    SpoSt = parseInt($(this).find('ul').css('marginTop'));
                    if(SpoSt < 0){
                        SpoSt += delta * 10;
                        if(SpoSt > 0){SpoSt = 0}
                        $(this).find('ul').css('marginTop',SpoSt+'px');
                        $(list).find('.scrol .polzun').css('marginTop',parseInt(SpoSt/kOef)+'px');
                    }}
            });

        })
        .on('mouseleave','.kitelenc',function(){
            $('.kitelenc').off('mousewheel DOMMouseScroll');
        })
        .on('click','.bigord, .ord',function(e){
            e.stopPropagation();
            var iscPar = $(this).parents().get(1);
            $(iscPar).find('.popup').show();
            $(iscPar).find('.popup form').html('<input class="ininf" type="text" name="name">' +
                '<span>имя:</span>' +
                '<input class="ininf" type="text" name="phone">' +
                '<span>телефон:</span>' +
                '<input class="bigord" type="button" value="ОТПРАВИТЬ"><br><p class="cls" style="font-size:18px;text-align:center;">*Ваши имя и телефон никогда, ни при каких условиях не будут переданы третьим лицам.</p>');
        })
        .on('click','.popup form .bigord',function(){
            var attr = new Object;
            attr.name = $(this).closest('form').find('input[name=name]').val();
            attr.phone = $(this).closest('form').find('input[name=phone]').val();
            if(attr.name == '' || attr.phone == '')
                return false;
            $.ajax({
                type: "POST",
                url: "ente.php",
                cache:false,
                data: "name="+$(this).closest('form').find('input[name=name]').val()+"&phone="+$(this).closest('form').find('input[name=phone]').val()+"&num="+$(this).closest('form').attr('data-num')
            });
            var iscPar = $(this).parents().get(1);
            $(iscPar).find('form').html('');
            $(iscPar).addClass('chefatto');
            setTimeout(function(){
                $(iscPar).removeClass('chefatto').removeAttr('style');
            },2000);
        })
        .on('click','.popup',function(event){
            event.stopPropagation();
        })
        .on('click','.asret',function(){
            var attr = new Object;
            attr.name = $(this).closest('form').find('input[name=name]').val();
            attr.phone = $(this).closest('form').find('input[name=phone]').val();
            if(attr.name == '' || attr.phone == '')
                return false;
            $.ajax({
                type: "POST",
                url: "enter.php",
                cache:false,
                data: "name="+$(this).closest('form').find('input[name=name]').val()+"&phone="+$(this).closest('form').find('input[name=phone]').val()+"&num="+$(this).closest('form').attr('data-num')
            });
            var iscPar = $(this);
            $(iscPar).css({
                'backgroundPosition':'0 36px',
                'width':'180px',
                'color':'#a5e16f',
                'font-family':'pf_dindisplay_proregular',
                'font-size':'18px'
            }).attr('value','Спасибо!');
            $(this).closest('form')[0].reset();
        });


    var window_height = $(window).height();
    $(window).resize(function() {
        window_height = $(window).height();
        initHavk();
    });
    var scrBot,uu,haWk = $('.hawk'),
        havk_top = $(haWk).offset().top,
        havk_heght = $(haWk).height(),
        scrTop = havk_top - window_height;
    initHavk();
    function initHavk(){
            scrBot = scrTop + (window_height+havk_heght);
        if($(window).scrollTop() <= scrTop){
            uu = scrTop;
        }
        else if($(window).scrollTop() > scrTop && $(window).scrollTop() < scrBot){
            uu = $(window).scrollTop();
            $(haWk).removeAttr('style');
            $(haWk).css('top',parseInt($(haWk).css('top')) - (uu - scrTop));
        }
        else if($(window).scrollTop() >= scrBot){
            uu = scrBot;
        }
    }

    $(document).scroll(function(){
        if($(window).scrollTop() > scrTop && $(window).scrollTop() < scrBot){
            var  pr = $(window).scrollTop(),
                sp = parseInt($(haWk).css('top'));
           // console.log((pr - uu));
            sp=sp-(pr - uu)*2;
            $(haWk).css('top',sp);
            uu = pr;
        }
    });
    // ###########################
    $('http://go-sro.ru/js/input.ord').click(function(){
        var index = $(this).closest('.kitselect').find('http://go-sro.ru/js/input.ord').index(this);
        $('#form1').attr('data-num',index);
    });

    $('#conteiner')
        .on('click',function(e){
            e.preventDefault();console.log($('.popmap').css('display'))
            if($('.popmap').css('display') == "block"){
                $('.popmap').fadeOut(200);
            }
        })
        .on('click','.popmap',function(e){
            e.stopPropagation();
        });

    $('.footcont')
        .on('click','.footcont .copirait a',function(e){
            e.preventDefault();console.log($('.popmap').css('display'))
            if($('.popmap').css('display') == "none"){
                $('.popmap').fadeIn(200);
            }
            else{
                $('.popmap').fadeOut(200);
            }
        })
        .on('click','.copirait',function(e){
            e.stopPropagation();
        });
});
