$(document).ready(function() {
  // $('#skip-to-main').focus();
  console.log("Page is ready.");
  reset_nav();
});

function reset_nav() {
	var everyChild = document.querySelectorAll("#nav div");
	for (var i = 0; i < everyChild.length; i++) {
		everyChild[i].classList.remove("active");
	}
}

function focus_skip_to_main() {
  $("#skip-to-main").focus();
}

function on_index_load() {
  // focus_skip_to_main();
  // $('#nav-index').addClass("active");
}

function on_content_load() {
  // focus_skip_to_main();
  // $('#nav-content').addClass("active");
  console.log(window.location.href);
  if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=content_design' || window.location.href ==  'http://buildforall.ca/content.php?category=content_design') {
    $('#content_design').trigger('click');
  } else if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=content_development' || window.location.href ==  'http://buildforall.ca/content.php?category=content_development') {
    $('#content_development').trigger('click');
  } else if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=content_stories' || window.location.href ==  'http://buildforall.ca/content.php?category=content_stories') {
    $('#content_stories').trigger('click');
  } else {
    $('#content_business').trigger('click');
  }
}

function on_about_load() {
  // focus_skip_to_main();
  // $('#nav-about').addClass("active");
}

function on_resources_load() {
  // focus_skip_to_main();
  // $('#nav-resources').addClass("active");
  if (window.location.href == 'http://localhost:8888/build-for-all/resources.php?category=resources_auditing' || window.location.href ==  'http://buildforall.ca/resources.php?category=resources_auditing') {
    $('#resources_auditing').trigger('click');
  } else if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=resources_ceo' || window.location.href ==  'http://buildforall.ca/resources.php?category=resources_ceo') {
    $('#resources_ceo').trigger('click');
  } else if (window.location.href == 'http://localhost:8888/build-for-all/content.php?category=resources_marketing' || window.location.href ==  'http://buildforall.ca/resources.php?category=resources_marketing') {
    $('#resources_marketing').trigger('click');
  } else {
    $('#resources_auditing').trigger('click');
  }
}

$('#test-button').click(function() {
  console.log("HIT");
});

$('.content-category-button').click(function() {
  reset_categories("content", this.id);
});

$('.content-category-button').keypress(function (e) {
  var key = e.which;
  if (key == 13) {  // the enter key code
    reset_categories("content", this.id);
  }
});

function reset_categories(page, id) {
  console.log(page + ", " + id);
  $('.' + page + '-category-button').css('color', 'var(--text-color-grey)');
  $('.' + page + '-category-button').css('text-decoration', 'none');
  $('#' + id).css('color', 'var(--text-color-black)');
  $('#' + id).css('text-decoration', 'underline');
  if (page == "content") {
    $('.' + page + '-articles').load("content/_article-list.php?category=" + id);
  } else if (page == "resources") {
    $('.' + page + '-list').load("content/_resource-list.php?category=" + id);
  }
}

$('.resources-category-button').click(function() {
  reset_categories("resources", this.id);
});

$('.resources-category-button').keypress(function (e) {
  var key = e.which;
  if (key == 13) {  // the enter key code
    reset_categories("resources", this.id);
  }
});
