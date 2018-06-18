<?php
// if get_latest_post() returns true
if (get_latest_post()) {
  // assign latest post to variable
  $latest_post = get_latest_post();
  // if get_author() returns true
  if (get_author($latest_post[0]->author_id)) {
    // assign author to variable
    $author = get_author($latest_post[0]->author_id);
    // if get_banner() returns true
    if (get_banner($latest_post[0]->banner_id)) {
      // save banner to variable
      $banner = get_banner($latest_post[0]->banner_id);
    } else {
      echo "Error retrieving banner";
    }
  } else {
    echo "Error retrieving author";
  }
} else {
  echo "Error retrieving latest post";
}

$latest_post = get_latest_post();
$author = get_author($latest_post[0]->author_id);
$banner = get_banner($latest_post[0]->banner_id);

// if error on any variable
if (!$latest_post || !$author || !$banner) {
  // Display error message
  echo "Error loading latest article";
} else {
}
?>

<div class="container-fluid contain-to-1000 content-section-1">
  <h1 tabindex="0" class="font-bold text-center">Featured article</h1>
  <div class="row">
    <div class="col-md-6 text-center">
      <img tabindex="0" src="img/banner_img/<?php echo $banner->id; ?>.jpg" alt="<?php echo $banner->alt_text; ?>" class="content-section-1-banner">
    </div>
    <div class="col-md-6 align-middle">
      <a href="content-page.php?article=<?php echo $latest_post[0]->id; ?>" target="_self"><p class="font-bold"><?php echo $latest_post[0]->title; ?></p></a>
      <p tabindex="0" class="color-grey"><?php echo $latest_post[0]->summary; ?></p>
      <div class="row content-section-1-author-img-p">
        <div class="col-3 text-center">
          <img tabindex="0" class="rounded-circle content-section-1-author" src="<?php echo $author->img_src; ?>" alt="<?php echo $author->img_alt; ?>">
        </div>
        <div class="col-9">
          <p tabindex="0" class="color-grey"><?php echo $author->firstname . " " . $author->lastname; ?><br><?php echo $latest_post[0]->created_at; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
