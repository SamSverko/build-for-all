$(document).ready(function() {
  console.log("Page is ready.");
});

function on_index_load() {
  $('#nav-index').addClass("active");
}

function on_content_load() {
  $('#nav-content').addClass("active");
  console.log(window.location.href);
  if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=content_design') {
    $('#content_design').trigger('click');
    // console.log("DESIGN");
  } else if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=content_development') {
    $('#content_development').trigger('click');
    // console.log("DEV");
  } else if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=content_stories') {
    $('#content_stories').trigger('click');
    // console.log("STORY");
  } else {
    $('#content_business').trigger('click');
    // console.log("BIZ");
  }
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
