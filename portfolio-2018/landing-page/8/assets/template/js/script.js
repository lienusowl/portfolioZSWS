$(document).ready(function(){
  //fancybox
  $(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    padding: 0
  });
  jQuery(function($){
     $(".form-control.phone-input").mask("+7 (999) 999-99-99");
  });
});