<?php
// check if get_latest_post() function returns true
if (get_latest_post()) {
  // assign latest author to variable
  $latest_post = get_latest_post();
  // check if get_author_picture() function returns true
  if (get_author_picture($latest_post[0]->author)) {
    // assign author image src and alt text to variable
    $author_info = get_author_picture($latest_post[0]->author);
    // check if FUNCTION function returns true
    if ($latest_post[0]->banner && $latest_post[0]->banner != 0) {
      $banner_src = "img/content/" . $latest_post[0]->banner . ".jpg";
      $banner_alt = $latest_post[0]->banner_alt_text;
    } else {
      $banner_src = "img/content/0.jpg";
      $banner_alt = "close up of typewriter";
    }
  } else {
    echo "Error retrieving latest post author image";
  }
} else {
  echo "Error retrieving latest post";
}
?>

<div class="container-fluid contain-to-1000 content-section-1">
  <h1 tabindex="0" class="font-bold text-center">Latest article</h1>
  <div class="row">
    <div class="col-md-6 text-center">
      <img tabindex="0" src="<?php echo $banner_src; ?>" alt="<?php echo $banner_alt; ?>" class="content-section-1-banner">
    </div>
    <div class="col-md-6 align-middle">
      <p tabindex="0" class="font-bold"><?php echo $latest_post[0]->title; ?></p>
      <p tabindex="0" class="color-grey"><?php echo $latest_post[0]->summary; ?></p>
      <div class="row content-section-1-author-img-p">
        <div class="col-3 text-center">
          <img tabindex="0" class="rounded-circle content-section-1-author" src="<?php echo $author_info[0]; ?>" alt="<?php echo $author_info[1]; ?>">
        </div>
        <div class="col-9">
          <p tabindex="0" class="color-grey"><?php echo $latest_post[0]->author; ?><br><?php echo $latest_post[0]->created_at; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
