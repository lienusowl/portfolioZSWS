$(document).ready(function(){
  //плавный переход
  $(function() {
    $('a.smooth').click(function(event) {
      event.preventDefault();
      var href=$(this).attr('href');
      var target=$(href);
      var top=target.offset().top;
      $('html,body').animate({
        scrollTop: top -119
      }, 1000);
    });
  });
});