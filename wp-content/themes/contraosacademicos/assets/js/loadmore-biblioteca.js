var page = 2;
jQuery(function ($) {
    function appendPostList(data, callback) {
        $.post(lista.ajaxurl, data, function (response) {
            if ($.trim(response) == '') {
            $('.loadmore-biblioteca').hide();
        }
        $('.cards-list-items.load-more-biblioteca').append(response).fadeIn('slow');
        page++;
        data.page = page;
        $.post(lista.ajaxurl, data, function (response) {
            if ($.trim(response) == '') {
            $('.loadmore-biblioteca').hide();
        }
    });
});
}

$('body').on('click', '.loadmore-biblioteca', function () {
    var data = {
        action: 'load_posts_by_ajax',
        page: page,
        security: lista.security,
    };
        appendPostList(data);
    });
});