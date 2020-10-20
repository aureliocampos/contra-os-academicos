
$(function() {
    $( "#coa-tabs" ).tabs();
});
$(window).on('load', function () {
    $('#preloader .inner').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({'overflow': 'visible'});
})

function translateNavForum() {
    const members = $('.members-link');
    const profile = $('.profile-link');
    const subscriptions = $('.subscriptions-link');
    const activity = $('.activity-link');
    const logout = $('.logout-link');

    members[0].textContent = 'Membros';
    profile[0].textContent = 'Perfil';
    
    activity[0].textContent = 'Atividade';
    logout[0].textContent = 'Sair';

    subscriptions[0].textContent = 'Assinaturas';
}
translateNavForum();