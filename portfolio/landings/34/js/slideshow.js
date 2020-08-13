$(function() {
    $('#slideshow').cycle({
        timeout : 3500,
pause : 2500,

      
    speed:    1500, 
   
        prev:    '#prev',
        next:    '#next',
        pager:   '#nav',
        pagerAnchorBuilder: pagerFactory
    });

    function pagerFactory(idx, slide) {
        return '<li><a href="#">'+(idx+1)+'</a></li>';
    };
    
 $('#slideshow1').cycle({
        timeout : 3500,
pause : 2500,

      
    speed:    1500, 
   
        prev:    '#prev1',
        next:    '#next1',
        pager:   '#nav1',
        pagerAnchorBuilder: pagerFactory
    });

    function pagerFactory(idx, slide) {
        return '<li><a href="#">'+(idx+1)+'</a></li>';
    };
    
});