<?php
include __DIR__ .  "/../inc/config.php";

$articles_by_category = get_articles_by_category($g['category']);

// pre_out($articles_by_category);

for ($i = 0; $i < count($articles_by_category[0]); $i++) {
  echo "<b>Title:</b> " . $articles_by_category[0][$i]->title . "<br>";
  echo "<b>Summary:</b> " . $articles_by_category[0][$i]->summary . "<br>";
  echo "<b>Author:</b> " . $articles_by_category[1][$i]->firstname . " " . $articles_by_category[1][$i]->lastname . "<br>";
  echo "<b>Created at:</b> " . $articles_by_category[0][$i]->created_at . "<br>";
  echo "<b>Title:</b> " . $articles_by_category[2][$i]->alt_text . "<br>";

  echo "<br>";
}

?>

<h1>LIST OF ARTICLES</h1>
