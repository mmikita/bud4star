(function($) {
    body_classes();
})(jQuery);


function body_classes() {
    var current_width = jQuery(window).width();
    if (current_width < 480) {
        jQuery('body').removeClass( 'body-sm body-md body-lg body-xl' );
        jQuery('body').addClass( 'body-xs' );
    } else if (current_width < 768) {
        jQuery('body').removeClass( 'body-sm body-md body-lg body-xl' );
        jQuery('body').addClass( 'body-sm' );
    } else if (current_width < 992) {
        jQuery('body').removeClass( 'body-sm body-md body-lg body-xl' );
        jQuery('body').addClass( 'body-md' );
    } else if (current_width < 1200) {
        jQuery('body').removeClass( 'body-sm body-md body-lg body-xl' );
        jQuery('body').addClass( 'body-lg' );   
    } else if (current_width < 1450) {
        jQuery('body').removeClass( 'body-sm body-md body-lg body-xl' );
        jQuery('body').addClass( 'body-xl' );
    }   
    };

    