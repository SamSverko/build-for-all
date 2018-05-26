<?php

// get latest post
function get_latest_post() {
  $all_posts = ORM::for_table('content')->find_many();
  $all_posts_id = array();

  for ($i = 0; $i < count($all_posts); $i++) {
    array_push($all_posts_id, $all_posts[$i]->id);
  }

  $latest_post = ORM::for_table('content')->where_like('id', max($all_posts_id))->find_many();

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
