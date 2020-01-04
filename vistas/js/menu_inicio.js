var offset = 250;
var duration = 500;

$(window).scroll(function(){
   
    if($(this).scrollTop() > offset){
        $('.to-top').fadeIn(duration);
        $(".brand_container img").css("width", "180px");
        $(".btn-toggle").css("background", "rgb(255, 255, 255, .9)");

    }else{
        $('.to-top').fadeOut(duration);
        $(".brand_container img").css("width", "200px");
        $(".btn-toggle").css("background", "rgb(255, 255, 255, 1)");
    }  

});

$('.to-top').click(function(){
    $('body').animate({scrollTop:0},duration);
});

$('li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
