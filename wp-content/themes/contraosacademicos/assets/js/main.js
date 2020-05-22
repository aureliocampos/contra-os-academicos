// Menu Reponsivo
$('.coa-header-menu').click(function () {
    $('.coa-menu-hamburguer').toggleClass('active');
    $('.coa-header-nav').toggleClass('active');
});

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
            1600: {
                items: 5
            }
        }
    });
    clickItemCarousel($owl);
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
carouselCenter('.list-items-carousel-content');
carouselSimple('.list-items-lit-content', 1, 3, 5, 7);


// Content Gallery
function getTheId(post) {
    let id = post.attr('id');

    return id;
}
function getPostType(index) {
    let postType = index.attr('data-type');
    if( !postType ) {
        let postType = 'posts';
        return postType;
    }else {
        return postType;
    }
}
function returnUrlApi(index, postType){
    let href = window.location.href;
    let url = `${href}/wp-json/wp/v2/${postType}/${index}`;

    return url;
}
function mountArticle(data){
    let blockArticle = $('.list-content-information');
    let article =   `<article class="list-content-article"><h2 class="list-content-title">${data.title.rendered}</h2><p class="paragraph">${data.excerpt.rendered}</p><div class="coa-section-btn-container"><a href="${data.link}" target="_blank" class="coa-section-btn yellow">saiba mais</a></div></article>`;  
    blockArticle.append(article);
}
function getContentGallery(index) {
    let post = index;
    let id = getTheId(post);
    let postType = getPostType(post);
    let url = returnUrlApi(id, postType);

    $.get(url, function(data) {
        $('.list-content-article').remove();
        mountArticle(data);
    }) 
}

$(function() {
    let item = $('.list-items-with-excerpt .list-item:first-of-type');
    item.addClass('active');
    getContentGallery(item);
});
$('.list-items-with-excerpt .list-item').on('click', function() {
    $('.list-item').removeClass('active');
    $(this).toggleClass('active');
    getContentGallery($(this));
});




