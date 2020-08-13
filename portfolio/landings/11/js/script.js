$(function(){
    
    var current_index = null;    
    
   
    
        
    $('a.title1').click(function(){        
        
        if(current_index != $('a.title1').index(this)){
            $('.collapse1:visible').slideUp(500);
            $('a.title1').removeClass('selected');
        }        
        
        if($(this).parent().next().attr('class') == 'collapse1'){
            
            if($(this).parent().next().is(":hidden")){
                $(this).addClass('selected');
            } else if($(this).parent().next().is(":visible")) {
                $(this).removeClass('selected');
            }
            $(this).parent().next().slideToggle(500);
        }
        
        current_index = $('a.title1').index(this);        
    });
});
$(function(){
    
    var current_index = null;    
    
   
    
        
    $('a.title1').click(function(){        
        
        if(current_index != $('a.title1').index(this)){
            $('.collapse2:visible').slideUp(500);
            $('a.title1').removeClass('selected');
        }        
        
        if($(this).parent().next().attr('class') == 'collapse2'){
            
            if($(this).parent().next().is(":hidden")){
                $(this).addClass('selected');
            } else if($(this).parent().next().is(":visible")) {
                $(this).removeClass('selected');
            }
            $(this).parent().next().slideToggle(500);
        }
        
        current_index = $('a.title1').index(this);        
    });
});
