 jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  //arrows: false,
  //sfade: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  //dots: true,
  //centerMode: true,
  focusOnSelect: true
});