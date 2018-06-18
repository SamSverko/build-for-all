<?php

// get latest post
function get_latest_post() {
  // $all_posts = ORM::for_table('content')->find_many();
  // $all_posts_id = array();
  //
  // for ($i = 0; $i < count($all_posts); $i++) {
  //   array_push($all_posts_id, $all_posts[$i]->id);
  // }

  // $latest_post = ORM::for_table('content')->where_like('id', max($all_posts_id))->find_many();
  $latest_post = ORM::for_table('content')->where_like('id', 2)->find_many();

  return $latest_post;
}

// get article
function get_article($article_id) {
  $article = ORM::for_table('content')->where_like('id', $article_id)->find_one();

  return $article;
}

// get author from post
function get_author($author_id) {
  $author = ORM::for_table('author_info')->where_like('id', $author_id)->find_one();

  return $author;
}

// get content banner image
function get_banner($banner_id) {
  $banner = ORM::for_table('banner_img')->where_like('id', $banner_id)->find_one();

  return $banner;
}

// get articles from category
function get_articles_by_category($category) {
  $categories = ORM::for_table('content_categories')->where_like($category, 1)->find_many();

  $info = array();
  $articles = array();
  $authors = array();
  $banners = array();

  for ($i = 0; $i < count($categories); $i++) {
    array_push($articles, ORM::for_table('content')->where_like('id', $categories[$i]->content_id)->find_one());
  }

  for ($i = 0; $i < count($articles); $i++) {
    array_push($authors, get_author($articles[$i]->author_id));
  }

  for ($i = 0; $i < count($articles); $i++) {
    array_push($banners, get_banner($articles[$i]->banner_id));
  }

  array_push($info, $articles, $authors, $banners);

  return $info;
}

// print values for debugging
function pre_out($x, $header = NULL) {
  echo "<pre>";
  if ($header) {
    echo "<h3>$header</h3>";
  }
  print_r($x);
  echo "</pre>";
}

// php console.log() equivalent for json objects
function console_log($data) {
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}
