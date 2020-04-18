function toogleFunctions(){
    wp.customize.control( 'xs-menufont' ).toggle();
    wp.customize.control( 'sm-menufont' ).toggle();
    wp.customize.control( 'md-menufont' ).toggle();
    wp.customize.control( 'lg-menufont' ).toggle();
    wp.customize.control( 'xl-menufont' ).toggle();


    wp.customize.control( 'xs-spaceBetweenPrimary' ).toggle();
    wp.customize.control( 'sm-spaceBetweenPrimary' ).toggle();
    wp.customize.control( 'md-spaceBetweenPrimary' ).toggle();
    wp.customize.control( 'lg-spaceBetweenPrimary' ).toggle();
    wp.customize.control( 'xl-spaceBetweenPrimary' ).toggle();

    wp.customize.control( 'xs-menuPositionTopPadding' ).toggle();
    wp.customize.control( 'sm-menuPositionTopPadding' ).toggle();
    wp.customize.control( 'md-menuPositionTopPadding' ).toggle();
    wp.customize.control( 'lg-menuPositionTopPadding' ).toggle();
    wp.customize.control( 'xl-menuPositionTopPadding' ).toggle();

}

(function( $ ) {

    wp.customize.bind( 'ready', function() { 
        toogleFunctions();
        var customize = this; 
        customize( 'bootstrapMenuFont', function( value ) {

            var siteTitleInput = customize.control( 'blogname' ).container.find( 'input' ); 
            siteTitleInput.prop( 'disabled', !value.get() ); 
            value.bind( function( to ) {
                siteTitleInput.prop( 'disabled', !to );
            } );
            var bs = [
                'xs-menufont','sm-menufont','md-menufont','lg-menufont','xl-menufont'
            ];
            $.each( bs, function( index, id ) {
                customize.control( id, function( control ) {
                    var toggle = function( to ) {
                        control.toggle( to );
                    };
                    toggle( value.get() );
                    value.bind( toggle );
                } );
            } );
        });
        customize( 'spaceBetweenPrimaryBoot', function( value ) {

            var siteTitleInput = customize.control( 'blogname' ).container.find( 'input' ); 
            siteTitleInput.prop( 'disabled', !value.get() ); 
            value.bind( function( to ) {
                siteTitleInput.prop( 'disabled', !to );
            } );
            var bs = [
                'xs-spaceBetweenPrimary','sm-spaceBetweenPrimary','md-spaceBetweenPrimary','lg-spaceBetweenPrimary','xl-spaceBetweenPrimary'
            ];
            $.each( bs, function( index, id ) {
                customize.control( id, function( control ) {
                    var toggle = function( to ) {
                        control.toggle( to );
                    };
                    toggle( value.get() );
                    value.bind( toggle );
                } );
            } );
        });


        customize( 'isBootstrapMenuTopPadding', function( value ) {

            var siteTitleInput = customize.control( 'blogname' ).container.find( 'input' ); 
            siteTitleInput.prop( 'disabled', !value.get() ); 
            value.bind( function( to ) {
                siteTitleInput.prop( 'disabled', !to );
            } );
            var bs = [
                'xs-menuPositionTopPadding','sm-menuPositionTopPadding','md-menuPositionTopPadding','lg-menuPositionTopPadding','xl-menuPositionTopPadding'
            ];
            $.each( bs, function( index, id ) {
                customize.control( id, function( control ) {
                    var toggle = function( to ) {
                        control.toggle( to );
                    };
                    toggle( value.get() );
                    value.bind( toggle );
                } );
            } );
        });






    } );


  
    
})( jQuery );