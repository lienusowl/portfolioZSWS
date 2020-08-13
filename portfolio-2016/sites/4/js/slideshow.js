$(function() {
    $('#slideshow').cycle({
		 
    fx:      'scrollDown', 
    speed:    1000, 
    timeout:  8000,
		pause: 6000,

      
   
   
        prev:    '#prev',
        next:    '#next',
        pager:   '#nav',
        pagerAnchorBuilder: pagerFactory
    });

    function pagerFactory(idx, slide) {
        return '<li><a href="#">'+(idx+1)+'</a></li>';
    };
    
});
