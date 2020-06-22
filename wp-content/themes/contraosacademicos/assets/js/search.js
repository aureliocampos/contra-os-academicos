const searchOpenButton = $('#open-search');
const searchTarget = $('.search-container');
const searchClosedButton = $('#closed-search');

searchOpenButton.on('click', () => {
  searchTarget.addClass('is-actived');
  $('body').css('overflow', 'hidden');
  escKeyPresss();
  $('#ajaxsearchliteres1').css('display', 'block');
  $('#ajaxsearchliteres1').css('z-index', 99);
})

searchClosedButton.on('click', () => {
  closedSearch(searchTarget);
})

function escKeyPresss(){
  $(document).keyup(function(e) {
    if (e.key === "Escape") { // escape key maps to keycode `27`
      closedSearch(searchTarget);
   }
  });
}

function closedSearch(target) {
  target.removeClass('is-actived');
  $('body').css('overflow', '');
  if(!target.hasClass('active')){
    $('#ajaxsearchliteres1').css('z-index', -99);
    $('#ajaxsearchliteres1').css('display', 'none');
  }
}
