jq_144(function() {
    var $ = jq_144;

    function updateDigits(ul_element, li_class, value) {
        var str_value = value + '';
        var count = ul_element.find('.'+li_class).length;
        var digit;
        for (var i=0; i < count; i++) {
            if (str_value.length - count + i < 0) {
                digit = 0;
            } else {
                digit = str_value[i - count + str_value.length];
            }
            ul_element.find('.'+li_class+':eq('+i+')').text(digit);
        }
    }

    function updateTimers() {
        //todo remove lp-timer
        $('ul.widget-timer, ul.lp-timer').each(function() {
            var event;
            var cookie = $.cookie("timerValue");
            if ($(this).data('event')) {
                event = new Date($(this).data('event'));
            } else if ($(this).data('hours')){
                var cd_hours = parseInt($(this).data('hours') || 0);
                var cd_minutes = parseInt($(this).data('minutes') || 0);
                var cd_seconds = parseInt($(this).data('seconds') || 0);

                event = Date.now()
                    + cd_hours * 60 * 60 * 1000
                    + cd_minutes * 60 * 1000
                    + cd_seconds * 1000;
                $(this).data('event', event);
                event = new Date(event);
            } else {
                if($(this).data('cookie') == 1 && cookie){
                    event = new Date(parseInt($.cookie("timerValue")));
                } else {
                    event = new Date(Date.now() + $(this).data('countdown')*1000);
                    $.cookie("timerValue", event.getTime())
                }
                $(this).data('event', event.getTime());
            }
            var timespan = countdown(null, event, -2018);
            updateDigits($(this), 'days', timespan.value > 0 && timespan.days || 0);
            updateDigits($(this), 'hours', timespan.value > 0 && timespan.hours || 0);
            updateDigits($(this), 'minutes', timespan.value > 0 && timespan.minutes || 0);
            updateDigits($(this), 'seconds', timespan.value > 0 && timespan.seconds || 0);
        });
    }

    setInterval(updateTimers, 1000);
    updateTimers();
});