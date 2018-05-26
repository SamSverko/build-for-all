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

function get_author_picture($author) {
  $image_src = "img/image_";
  if ($author == "Katlynn Sverko") {
    $image_src .= "katlynn";
  } else if ($author == "Marcela Correa Villada") {
    $image_src .= "marcela";
  } else if ($author == "Sam Legros") {
    $image_src .= "sam";
  }
  $image_src .= ".jpg";

  return $image_src;
}

// php console.log() equivalent for json objects
function console_log($data) {
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}
