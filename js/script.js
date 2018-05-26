$(document).ready(function() {
  console.log("Page is ready.");
});

function on_index_load() {
  $('#nav-index').addClass("active");
}

function on_content_load() {
  $('#nav-content').addClass("active");
}

function on_about_load() {
  $('#nav-about').addClass("active");
}

$('#test-button').click(function() {
  console.log("HIT");
});

$('.content-category-button').click(function() {
  console.log(this.id);
  $('.content-articles').load("content/_article-list.php");
});
