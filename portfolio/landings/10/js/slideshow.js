$(function() {
    $('#slideshow').cycle({
        timeout : 0,
pause : 0,
  nowrap: 0,
      
    speed:    500, 
   
        prev:    '#prev',
        next:    '#next',
        pager:   '#nav',
        pagerAnchorBuilder: pagerFactory
    });

    function pagerFactory(idx, slide) {
        return '<li><a href="#">'+(idx+1)+'</a></li>';
    };
    
});