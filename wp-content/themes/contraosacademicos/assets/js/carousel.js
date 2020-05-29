function carouselCenter(element) {
  let $owl = $(element);
  $owl.children().each( function( index ) {
    $(this).attr( 'data-position', index );
  });

  $owl.owlCarousel({
      center:true,
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      lazyLoad: true,
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: 1
          },
          1000: {
              items: 3
          },
          1600: {
              items: 5
          }
      }
  });
  $(document).on('click', '.owl-item>li', function() {
    $owl.trigger('to.owl.carousel', $(this).data( 'position' ));
  });
}



$(document).ready(function(){
  let items = $('.list-items-carousel-content');

  for (let i = 0; i < items.length; i++) {
    const item = items[i];
    let id = $(item).attr('id');
    carouselCenter(`#${id}`);
  }
});

