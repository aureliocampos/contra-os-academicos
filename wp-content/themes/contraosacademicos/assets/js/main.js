// Menu Reponsivo
$('.coa-header-menu').click(function () {
    $('.coa-menu-hamburguer').toggleClass('active');
    $('.coa-header-nav').toggleClass('active');
});

// Carousel's
function carouselSimple(element) {
    $(element).owlCarousel({
        center:true,
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 5
            }
        }
    });
}
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
            1400: {
                items: 5
            }
        }
    });
    $(document).on('click', '.owl-item>li', function() {
      $owl.trigger('to.owl.carousel', $(this).data( 'position' ));
    });
}
function carouselForId(index) {
    $(index).find('section').each(function () {
        var id = $(this).attr('id');
        var html = "#"+id;
        carouselSimple(html);
    });
}
carouselForId('.carousel');
carouselCenter('.list-items-carousel-content');
