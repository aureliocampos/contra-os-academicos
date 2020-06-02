
// // Content Gallery
// function getTheId(post) {
//   let id = post.attr('id');

//   return id;
// }
// function getPostType(index) {
//   let postType = index.attr('data-type');
//   if( !postType ) {
//       let postType = 'posts';
//       return postType;
//   }else {
//       return postType;
//   }
// }
// function returnUrlApi(index, postType){
//   let href = 'http://localhost:8000';
//   let url = `${href}/wp-json/wp/v2/${postType}/${index}`;

//   return url;
// }
// function mountArticle(data){
//   let blockArticle = $('.list-content-information');
//   let article =   `<article class="list-content-article"><h2 class="list-content-title">${data.title.rendered}</h2><p class="paragraph">${data.excerpt.rendered}</p><div class="coa-section-btn-container"><a href="${data.link}" target="_blank" class="coa-section-btn yellow">saiba mais</a></div></article>`;  
//   blockArticle.append(article);
// }
// function getContentGallery(index) {
//   let post = index;
//   let id = getTheId(post);
//   let postType = getPostType(post);
//   let url = returnUrlApi(id, postType);

//   $.get(url, function(data) {
//       $('.list-content-article').remove();
//       mountArticle(data);
//   }) 
// }

// $(function() {
//   let item = $('.list-items-with-excerpt .list-item:first-of-type');
//   item.addClass('active');
//   getContentGallery(item);
// });
// $('.list-items-with-excerpt .list-item').on('click', function() {
//   $('.list-item').removeClass('active');
//   $(this).toggleClass('active');
//   getContentGallery($(this));
// });
