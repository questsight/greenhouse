jQuery( document ).ready( function() {
  jQuery( '#button__modal' ).click( function() {
    jQuery( '#modal' ).fadeIn( 600 );
  });
  jQuery( '#modal__shut' ).click( function() {
    jQuery( '.wpcf7-display-none' ).fadeOut( 600 );
    jQuery( '.wpcf7-not-valid-tip' ).fadeOut( 600 );
    jQuery( '#modal' ).fadeOut( 600 );
  });
});
