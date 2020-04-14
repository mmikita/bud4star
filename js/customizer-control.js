(function( $ ) {
    wp.customize.bind( 'ready', function() { // Ready?
 
        var customize = this; // Customize object alias.
        customize( 'primaryMenuUpper', function( value ) {
     
            var siteTitleInput = customize.control( 'blogname' ).container.find( 'input' ); // Site Title input.
     
            /**
             * Disable the Input element
             */
            // 1. On loading.
            siteTitleInput.prop( 'disabled', !value.get() ); // .get() value
     
            // 2. Binding to value change.
            value.bind( function( to ) {
                siteTitleInput.prop( 'disabled', !to );
            } );
            var colorControls = [
                'bootstrapMenuColumns'
            ];
        
            $.each( colorControls, function( index, id ) {
                customize.control( id, function( control ) {
                    /**
                     * Toggling function
                     */
                    var toggle = function( to ) {
                        control.toggle( to );
                    };
        
                    // 1. On loading.
                    toggle( value.get() );
        
                    // 2. On value change.
                    value.bind( toggle );
                } );
            } );
      
      
      
        } );
    } );
  
    
})( jQuery );