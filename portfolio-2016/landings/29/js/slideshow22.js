$(function() {
    $('#slideshow').cycle({
		fx:      'cover', 
    fx:      'scrollLeft', 
    speed:    1000, 
    timeout:  5000,

      
   
   
        prev:    '#prev',
        next:    '#next',
        pager:   '#nav',
        pagerAnchorBuilder: pagerFactory
    });

    function pagerFactory(idx, slide) {
        return '<li><a href="#">'+(idx+1)+'</a></li>';
    };
    
});
