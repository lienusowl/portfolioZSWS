var Popup = function Popup(params){
    this.id = params.id;
    this.params = params;

    this.$ = jq_144;
    this.popup = this.$('#' + this.id + ' > div');
    this.button = this.$('#' + this.id + ' > a');
    this.closeButton = this.popup.find('a.close');
    this.form = this.popup.find('form');
    this.confirmation = this.popup.find('.confirmation');

    this.createCallback();
    this.init();
};

Popup.prototype.fixPosition = function(returnNumber){
    this.popup.css('margin-top', 0);
    var page = this.$(window).height();
    var popup = this.popup.height() + parseInt(this.popup.css('padding-left')) * 2;

    if(returnNumber){
        return (page-popup)/2;
    } else {
        this.popup.css('margin-top', (page-popup)/2 + 'px');
    }
};

Popup.prototype.init = function(){

    this.$('#loading_bar').css('z-index', 1950).appendTo('body');
    this.popup.appendTo('body');
    var overlay = this.overlay = this.popup.wrap('<div class="widget popup overlay"/>').parent();
    overlay.attr('id', 'overlay-' + this.id);

    var that = this;
    this.button.click(function(e){
        if(e.originalEvent){
            that.animation = null;
        } else {
            that.animation = that.params.showActions.animation;
        }
        e.preventDefault();
        that.confirmation.removeClass('show');
        that.form.show();
        that.doAnimate();
    });

    this.closeButton.click(function(e){
        e.preventDefault();
        overlay.hide();
    });

    overlay.find('input[type=submit]')
        .removeAttr('disabled');

    this.addCustomShowListeners();
    this.addSubmitListener();
};

Popup.prototype.doAnimate = function(){
    var overlay = this.overlay;
    var anim = false;
    if(!this.animation){
        overlay.show();
    } else if(this.animation == 'center'){
        overlay.fadeIn(1000);
    } else if(this.animation == 'fadeTop'){
        this.popup.css('top', '-700px');
        anim = true;
    } else if(this.animation == 'fadeLeft'){
        this.popup.css('left', '-1500px');
        anim = true;
    } else if(this.animation == 'fadeBottom'){
        this.popup.css('top', '700px');
        anim = true;
    } else if(this.animation == 'fadeRight'){
        this.popup.css('left', '1500px');
        anim = true;
    }
    if(anim){
        overlay.fadeIn(1000);
        this.popup.animate({
            'top' : '0',
            'left': '0'
        }, 1000);
    }
    this.fixPosition();
};

Popup.prototype.addCustomShowListeners = function(){
    if(!this.params.showActions || !this.params.showActions.showEvent){
        return;
    }
    var self = this;
    var event = this.params.showActions.showEvent;
    var wasShown = false;

    if(event == 'timer'){
        setTimeout(function(){
            self.button.click();
        }, this.params.showActions.seconds * 1000);
    } else if(event == 'scroll'){
        this.$(window).scroll(function(e){
            if(wasShown){
                return;
            }
            if(document.body.scrollTop > self.params.showActions.pixels){
                wasShown = true;
                self.button.click();
            }
        });
    } else if(event == 'close'){
        var wasOnPage = false;
        this.$('body').mousemove(function(e){
            if(wasShown){
                return;
            }
            if(e.pageY > 100){
                wasOnPage = true;
            }
            if( wasOnPage && e.pageY < ( 10 + self.$(window).scrollTop() ) ){
                wasShown = true;
                self.button.click();
            }
        });
    }
};

Popup.prototype.addSubmitListener = function(){
    var that = this;

    var url = "/var/%@/form/action/".replace('%@', window.variantId) +
        "?form_id=" + this.id.split('-')[1] + "&d=" + location.hostname;
    this.url = url;
    this.form.attr("action", url + "&callback=" + this.callbackName);
    this.form.find('input:not([type=submit]),textarea').each(function(){
        var $this = that.$(this);
        var name = $this.attr('rel')+ ':' + $this.attr('placeholder').replace('*', '');
        $this.attr('name', name);
    });

    if(this.params.version && this.params.version == '2'){
        this.form.submit(function(e){

            var error = that.validate();
            if(error){
                e.preventDefault();
                error.field.focus();
                alert(error.text || 'Поле %@ должно быть заполнено'.replace('%@', error.label));
                return;
            }
            that.$('#loading_bar').fadeIn();
        });
    } else {
        this.form.submit(function(e){
            e.preventDefault();
            var error = that.validate();
            if(error){
                error.field.focus();
                alert(error.text || 'Поле %@ должно быть заполнено'.replace('%@', error.label));
                return;
            }
            that.submit();
        });
    }
};

Popup.prototype.createCallback = function(){
    var callbackName = this.id.replace('-', '') + 'Callback';
    var that = this;
    window[callbackName] = function(data){
        jq_144('#loading_bar').fadeOut();
        if(!data){
            alert('Ошибка отправки данных. Попробуйте отправить запрос попозже.');
            return;
        }
        if(data.success){
            that.afterSubmit();
        } else {
            alert(data["errorMessage"]);
        }
    };
    this.callbackName = callbackName;
};

Popup.prototype.validate = function(){
    var error;
    var $ = this.$;
    this.form.find('input:not([type=submit]),textarea').each(function(){
        if(error){
            return;
        }
        if($(this).attr('data-required') && this.value.length < 3){
            error = {
                field: this,
                label: $(this).attr('placeholder').replace('*', '')
            };
        }
        if(this.value.length > 0 &&
            $(this).attr('rel') == 'email' &&
            !/^[A-Z0-9._+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i.test(this.value)){
            error = {
                field: this,
                text: 'Введите правильный email'
            };
        }
    });
    return error;
};

Popup.prototype.getValues = function(){
    var r = [];
    this.form.find('input:not([type=submit]),textarea').each(function(){
        r.push({
            role: jq_144(this).attr('rel'),
            label: jq_144(this).attr('placeholder').replace('*', ''),
            value: this.value
        });
    });
    return r;
};

Popup.prototype.submit = function(){
    var that = this;
    this.$('#loading_bar').fadeIn();
    this.$.ajax({
        type: "POST",
        url: this.url,
        data: JSON.stringify(this.getValues()),
        contentType: 'application/json',
        success: function(){
            that.afterSubmit();
        },
        error: function(){
            alert('Ошибка отправки данных. Попробуйте отправить запрос попозже.')
        },
        complete: function(){
            jq_144('#loading_bar').fadeOut();
        }
    })
};

Popup.prototype.afterSubmit = function(){
    if(this.params.action == 'message'){
        this.form.hide();
        this.confirmation.addClass('show');
    } else if(this.params.action == 'url'){
        location.href = this.params['action-url'];
    } else if(this.params.action == 'ty'){
        location.href = this.params['action-ty'];
    }
};

widget.init('popup', Popup);