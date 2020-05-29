// Carousel's
function carouselSimple(element, items0, items600, items1000, items1600) {
    $(element).owlCarousel({
        loop: false,
        margin: 15,
        nav: true,
        dots: true,
        autoHeight:true,
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
carouselForId('.carousel');
carouselSimple('.list-items-lit-content', 1, 3, 5, 6);

