var page = 2;
jQuery(function ($) {
    function appendPost(data, callback) {
        $.post(blog.ajaxurl, data, function (response) {
            if ($.trim(response) == '') {
            $('.loadmore').hide();
        }
        $('.cards-list-items.load-more').append(response).fadeIn('slow');
        page++;
        data.page = page;
        $.post(blog.ajaxurl, data, function (response) {
            if ($.trim(response) == '') {
            $('.loadmore').hide();
        }
    });
});
}

$('body').on('click', '.loadmore', function () {
    var data = {
        action: 'load_posts_by_ajax',
        page: page,
        security: blog.security,
    };
        appendPost(data);
    });
});

// Primeiro teste - mas com o botão ainda aparecendo sem ter post a carregar
// var page = 2;
// jQuery(function ($) {
//     $('body').on('click', '.loadmore', function () {
//         var data = {
//             'action': 'load_posts_by_ajax',
//             'page': page,
//             'security': blog.security
//         };

//         $.post(blog.ajaxurl, data, function (response) {
//             if ($.trim(response) != '') {
//                 $('.cards-list-items.load-more').append(response);
//                 page++;
//             } else {
//                 $('.loadmore').hide();
//             }
//         });
//     });
// });