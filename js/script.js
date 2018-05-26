$(document).ready(function() {
  console.log("Page is ready.");
});

function on_index_load() {
  $('#nav-index').addClass("active");
}

function on_content_load() {
  $('#nav-content').addClass("active");
  $('#content_business').trigger('click');
}

function on_about_load() {
  $('#nav-about').addClass("active");
}

$('#test-button').click(function() {
  console.log("HIT");
});

$('.content-category-button').click(function() {
  $('.content-category-button').css('color', 'var(--text-color-grey)');
  $('#' + this.id).css('color', 'var(--text-color-black)');
  $('.content-articles').load("content/_article-list.php?category=" + this.id);
});
