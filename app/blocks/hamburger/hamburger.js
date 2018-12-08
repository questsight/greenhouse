jQuery( document ).ready( function() {
	jQuery( '#hamburger' ).click( function () {
		jQuery( '.hamburger__item' ).toggleClass( 'hamburger__item_open' );
	});
    jQuery( '.navigation__list li a' ).click( function() {
      jQuery( '.hamburger__item' ).removeClass( 'hamburger__item_open' );
  });  
});