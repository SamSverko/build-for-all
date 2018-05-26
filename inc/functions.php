<?php

// get latest post from content table
function get_latest_post() {
  $all_posts = ORM::for_table('content')->find_many();
  $all_posts_id = array();

  for ($i = 0; $i < count($all_posts); $i++) {
    array_push($all_posts_id, $all_posts[$i]->id);
  }

  $latest_post = ORM::for_table('content')->where_like('id', max($all_posts_id))->find_many();

  return $latest_post;
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

// get author picture src
function get_author_picture($author) {
  $image_src = "img/image_";
  if ($author == "Katlynn Sverko") {
    $image_src .= "katlynn";
    $image_alt = "katlynn sverko headshot";
  } else if ($author == "Marcela Correa Villada") {
    $image_src .= "marcela";
    $image_alt = "marcela correa villada headshot";
  } else if ($author == "Sam Legros") {
    $image_src .= "sam";
    $image_alt = "sam legros headshot";
  }
  $image_src .= ".jpg";

  $author_info = array($image_src, $image_alt);

  return $author_info;
}

// php console.log() equivalent for json objects
function console_log($data) {
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}
