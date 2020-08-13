
 
<script type="text/javascript">
 
$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});
 
});
 
</script>
<style>

#toTop {
    width: 100px;
    border-bottom: 2px solid #B60101;
    background: #FF2C27;
    text-align: center;
    padding: 5px;
    position: fixed;
    bottom: 20px;
    right: 20px;
    cursor: pointer;
    display: none;
    color: #fff;
    font-family: verdana;
    font-size: 12px;
}

</style>