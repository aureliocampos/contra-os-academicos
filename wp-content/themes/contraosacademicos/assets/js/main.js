// Menu Reponsivo
$('.coa-header-menu').click(function () {
    $('.coa-menu-hamburguer').toggleClass('active');
    $('.coa-header-nav').toggleClass('active');
});

// Carousel
function carouselSimple(element) {
    $(element).owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    return carouselSimple;
}
function getIdCarousel(index) {
    $(index).find('section').each(function () {
        var id = $(this).attr('id');
        var html = "#"+id;
        carouselSimple(html);
    });
}
getIdCarousel('.carousel');