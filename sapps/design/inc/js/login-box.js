var mouse_is_inside = false;

$(document).ready(function() {
    $(".btn-success").click(function() {
        var loginBox = $(".form-signin");
        if (loginBox.is(":visible"))
            loginBox.fadeOut("fast");
        else
            loginBox.fadeIn("fast");
        return false;
    });
    
    $(".form-signin").hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").click(function(){
        if(! mouse_is_inside) $(".form-signin").fadeOut("fast");
    });
});