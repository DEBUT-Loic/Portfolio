$(document).ready(function() {
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
        /* Check the location of each desired element */
        var delai=0;
        $('#comp > article').each( function(){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window >= bottom_of_object ){
                for(var i=0;i<$('#comp > article').length;i++){
                    $('#comp > article').eq(i).delay(delai).animate({'opacity':'1'},700); 
                    delai+=700;
                }
            }
        }); 
    });  
});