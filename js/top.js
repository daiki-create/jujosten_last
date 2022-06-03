$(function(){    
    $("#m1 img").hover(function(){
        $("#m1 .mask").toggleClass("active");
    });
    
    $("#m2 img").hover(function(){
        $("#m2 .mask").toggleClass("active");
    });
    
    $("#m3 img").hover(function(){
        $("#m3 .mask").toggleClass("active");
    });
    
    $("#m4 img").hover(function(){
        $("#m4 .mask").toggleClass("active");
    });
    
    $("#m5 img").hover(function(){
        $("#m5 .mask").toggleClass("active");
    });
});

$(function(){
    // setting
    $(".comm-comm").hide();

    //function
    $(".comm-img").hover(function(){
        $(this).next(".comm-comm").stop().fadeToggle();
    });
});