var page = 2;
jQuery(function ($) {
    function appendPostList(data, callback) {
        $.post(lista.ajaxurl, data, function (response) {
            if ($.trim(response) == '') {
            $('.loadmore-autores').hide();
        }
        $('.cards-list-items.load-more-autores').append(response).fadeIn('slow');
        page++;
        data.page = page;
        $.post(lista.ajaxurl, data, function (response) {
            if ($.trim(response) == '') {
            $('.loadmore-autores').hide();
        }
    });
});
}

$('body').on('click', '.loadmore-autores', function () {
    var data = {
        action: 'load_posts_by_ajax',
        action2: 'load_autores_posts',
        page: page,
        security: lista.security,
    };
        appendPostList(data);
    });
});