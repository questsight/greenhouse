jQuery(document).ready(function () {
  if (window.matchMedia('(min-width: 1199px)').matches) {
    jQuery('#navigation__list').removeClass('navigation__hidden');
  }
  jQuery('#hamburger, .navigation__hidden li a').click(function () {
      jQuery( '#navigation' ).fadeToggle(600);
      jQuery( '#navigation__box' ).toggleClass('col-lg-7 hidden-xs hidden-sm hidden-md');  
  });
  jQuery('#navigation__list .menu-item-type-custom > a', this).on('click', function(){
    return false;
  });  
});