
$( document ).ready(function() {
    body_classes();
});


function body_classes() {
    var current_width = $(window).width();
    if (current_width < 480) {
        $('body').removeClass( 'body-sm body-md body-lg body-xl' );
        $('body').addClass( 'body-xs' );
    } else if (current_width < 768) {
      $('body').removeClass( 'body-sm body-md body-lg body-xl' );
        $('body').addClass( 'body-sm' );
    } else if (current_width < 992) {
        $('body').removeClass( 'body-sm body-md body-lg body-xl' );
        $('body').addClass( 'body-md' );
    } else if (current_width < 1200) {
        $('body').removeClass( 'body-sm body-md body-lg body-xl' );
        $('body').addClass( 'body-lg' );   
    } else if (current_width < 1450) {
        $('body').removeClass( 'body-sm body-md body-lg body-xl' );
        $('body').addClass( 'body-xl' );
    }   
    };