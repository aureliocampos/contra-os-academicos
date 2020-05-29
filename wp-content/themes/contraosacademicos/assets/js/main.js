// Carousel's
function carouselSimple(element, items0, items600, items1000, items1600) {
    $(element).owlCarousel({
        loop: true,
        margin: 15,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: items0
            },
            600: {
                items: items600
            },
            1000: {
                items: items1000
            },
            1600: {
                items: items1600
            }
        }
    });
}

function carouselForId(index) {
    $(index).find('section').each(function () {
        var id = $(this).attr('id');
        var html = "#"+id;
        carouselSimple(html);
    });
}
function clickItemCarousel(element) {
    $(document).on('click', '.owl-item>li', function() {
        element.trigger('to.owl.carousel', $(this).data( 'position' ));
    });
}

carouselForId('.carousel');
carouselSimple('.list-items-lit-content', 1, 3, 5, 7);

