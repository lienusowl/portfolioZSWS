var M1 = {
    init: function() {
        var current = this;
        
        if ( !document.querySelector("#m1-form") ) {
            $( '<div id="m1-form" class="m1modal m1-form"><div class="m1modal-block"><div class="icon-close"></div><div class="m1-form-title">Понравилось это предложение?<div class="m1-form-rectangle"></div></div><div class="m1content"><div class="m1padding"><p>Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!</p><form method="POST" action="call.php" class="call-form"><input type="text" name="name" value="" placeholder="Ваше имя" /><br/<input type="text" name="phone" value="" placeholder="Ваш номер телефона" /><br/><input type="hidden" name="is_popup" value="1" /><input type="hidden" name="from_recall_button" value="0" /><input type="submit" value="ПЕРЕЗВОНИТЬ МНЕ" /></form><p class="m1-form-clock">Оператор перезвонит Вам через 5-10 минут</p></div></div></div></div>]' ).insertAfter( "body" );
        }

        //M1.init();
        $(window).resize(function() {
            M1.modalRefresh();
        });
        M1.modalRefresh();
        $(document).on("click", ".m1modal", function(event) {
            if (event.target != this) {
                return false;
            } else {
                M1.modalHide($(this).closest(".m1modal"));
            }
        }).on("click", ".icon-close", function(event) {
            if (event.target != this) {
                return false;
            } else {
                M1.modalHide($(this).closest(".m1modal"));
                M1.panelQuicklyOrderShow();
            }
        }).on("keydown", function(key) {
            if (key.keyCode == 27) {
                M1.modalHide($(".m1modal:visible:last"));
            }
        }).on("click", ".m1modal > *", function(event) {
            event.stopPropagation();
            return true;
        });
        
        M1.initComebacker(500);            
    },
    modalHide: function($modal) {
        $modal.fadeOut("fast", function() {
            if (!$(".m1modal:visible").length) {
                $("body").removeClass("m1modal-show");
            }
        });
    },
    modalRefresh: function() {
        if ($(".m1modal:visible:last").length) {
            var modalBlock = $(".m1modal:visible:last .m1modal-block"),
                width = parseInt(modalBlock.width()),
                height = parseInt(modalBlock.height());
            if ($(window).height() > height + 20) {
                modalBlock.addClass("m1modal-top").removeClass("margin-t-b").css("margin-top", -1 * (height / 2));
            } else {
                modalBlock.addClass("margin-t-b").removeClass("m1modal-top");
            }
            if ($(window).width() > width) {
                modalBlock.addClass("m1modal-left").removeClass("margin-l").css("margin-left", -1 * (width / 2));
            } else {
                modalBlock.addClass("margin-l").removeClass("m1modal-left");
            }
        }
    },
    panelQuicklyOrderHide: function() {
        var selector = $('#mobile_div');
        if (selector.length > 0) {
            selector.hide();
        }
    },

    panelQuicklyOrderShow: function() {
        var selector = $('#mobile_div');
        if (selector.length > 0) {
            selector.show();
        }
    },

    modalShow: function($modal) {
        $modal.fadeIn("fast");
        $("body").addClass("m1modal-show");
        this.modalRefresh();
        this.panelQuicklyOrderHide();
    },
    initComebacker: function(timeout) {
        try {
            setTimeout(function start_M1comebacker() {
                var comebacker = true;
                $(window).on("mouseout", function(event) {
                    if (event.pageY - $(window).scrollTop() < 1 && comebacker) {
                        comebacker = false;
                        document.getElementById('tid').value='Заявка с comebacker';document.getElementById('modal_title').innerHTML='Заголовок для comebacker';
                        $("#call2").modal('show');
                        return false;
                    }
                });
            }, timeout);
        } catch (e) {}
    },
    showComebackerAlert: true,
    initComebackerAlert: function(M1Text) {
        var current = this;
        window.onbeforeunload = function(evt) {
            if (current.showComebackerAlert) {
                current.showComebackerAlert = false;
                return M1Text.comebacker_text;
            }
        };
    }
};

M1.init();