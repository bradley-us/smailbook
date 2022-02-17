$(document).ready(function(){
    $('.BtnUp').hide();
    
    $(window).scroll(function(){
         if($(this).scrollTop() > 100 ){
             $('.BtnUp').fadeIn(100);
        } else {
            $('.BtnUp').fadeOut(100);
        }
    });
    
    $('.BtnUp').click(function(){
        $('body, html').animate({
            scrollTop: 0
        },300);
    });
});