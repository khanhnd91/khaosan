$(window).load(function(){
// $(function(){
var $container = $('.isotope');

colWidth = function () {
var w = $(window).width(), 
  columnNum = 1,
  columnWidth = 0;
      if (w > 1520) {
        columnNum  = 5;
      } else if (w > 1100) {
        columnNum  = 4;
      } else if (w > 760) {
        columnNum  = 3;
      } else if (w > 320) {
        columnNum  = 1;
      }
      columnWidth = Math.floor(w/columnNum);
      $container.find('.item').each(function() {
        var $item = $(this);
  $item.css({
  width: columnWidth
  });

  });
  return columnWidth;
  },


isotope = function () {
  $container.imagesLoaded( function(){
  $container.isotope({
    resizable: false,
    itemSelector: '.item',
/*    animationOptions: {
      duration: 750,
      easing: 'ease',
      queue: false
    },*/
    Boolean: 'false',
    masonry: {columnWidth:colWidth()}
  });
});
}; // 関数終了

isotope();
$(window).resize(isotope);

$('.filter a').click(function(){
  $('.filter .current').removeClass('current');
  $(this).addClass('current');

  var selector = $(this).attr('data-filter');
  $container.isotope({
    filter: selector,
    animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
      }
    });
    return false;
  }); 
});


/******************/
/******************/
