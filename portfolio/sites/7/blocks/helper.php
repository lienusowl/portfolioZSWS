<script src="js/jquery.min.v1.4.2.js"></script>
<link href="css/helper.css" rel="stylesheet" type="text/css" />
<div id="help">

<div id="help-panel" style="display: none;">

    <!-- Блок перехода к форме заказа -->
    <div class="main"><a class="title" title="Перейти к форме заказа" href="#zakaz">Перейти к форме заказа</a></div>
    
   
    <!-- Блок перехода к частым вопросам -->   
    <div class="main"><a class="title" title="Частые вопросы" href="#faq_block">Частые вопросы</a></div>
    
    
    <!-- Блок телефонов -->
    <div class="main"><a class="title" href="javascript:void(0);">Телефоны</a></div>    
        <div class="collapse">
            <strong>(8332) 53-73-67</strong><br />
            ПН-ПТ с 9.00 до 17.00,<br />
            СБ с 10.00 до 15.00,<br />
            ВС - выходной,<br />
            время указано московское.
    
        </div>
    
    
    <!-- Блок службы поддержки -->
    <div class="main"><a class="title" href="javascript:void(0);">Служба поддержки</a></div>    
        <div class="collapse">
        <a href="#" target="_blank">Ответы на частые вопросы</a><br />
        <a href="#" target="_blank">Задать свой вопрос</a>
        </div>
    
</div>

<a id="help-button" href="javascript:void(0);"><img alt="" src="img/helper.png"/></a>

</div>

<script type="text/javascript">
$(function(){
    
    var current_index = null;    
    
    $('#help-button').click(function(){        
        $('#help-panel').toggle(300);
    });
    
        
    $('a.title').click(function(){        
        
        if(current_index != $('a.title').index(this)){
            $('.collapse:visible').slideUp(500);
            $('a.title').removeClass('selected');
        }        
        
        if($(this).parent().next().attr('class') == 'collapse'){
            
            if($(this).parent().next().is(":hidden")){
                $(this).addClass('selected');
            } else if($(this).parent().next().is(":visible")) {
                $(this).removeClass('selected');
            }
            $(this).parent().next().slideToggle(500);
        }
        
        current_index = $('a.title').index(this);        
    });
});
</script>