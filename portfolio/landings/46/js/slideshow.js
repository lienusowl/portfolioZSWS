$(function() {
    $('#slideshow').cycle({
        timeout : 3000,
pause : 0,
  nowrap: 1,      
        prev:    '#prev',
        next:    '#next',
        pager:   '#nav',
        pagerAnchorBuilder: pagerFactory
    });

    function pagerFactory(idx, slide) {
        return '<li><a href="#">'+(idx+1)+'</a></li>';
    };
	
	
    
});