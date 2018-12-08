jQuery( document ).ready( function() {
  if(jQuery(".news__name")){
    var h1 = jQuery(".news__name").eq(1).height();
    var h2 = jQuery(".news__name").eq(2).height();
    var h3 = jQuery(".news__name").eq(3).height();
    if(h1>h2 && h1>h3){
      jQuery(".news__name").height(h1);
    }
    else if(h2>h1 && h2>h3){
      jQuery(".news__name").height(h2);
    }
    else{
      jQuery(".news__name").height(h3);
    }
  }
});
jQuery(window).resize(function(){
  if(jQuery(".news__name")){
    jQuery('.news__name').css('height', 'auto'); 
    jQuery(".news__name").height();
    var h1 = jQuery(".news__name").eq(1).height();
    var h2 = jQuery(".news__name").eq(2).height();
    var h3 = jQuery(".news__name").eq(3).height();
    if(h1>h2 && h1>h3){
      jQuery(".news__name").height(h1);
    }
    else if(h2>h1 && h2>h3){
      jQuery(".news__name").height(h2);
    }
    else{
      jQuery(".news__name").height(h3);
    }
  }
});