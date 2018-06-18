<?php
$pageTitle = "Home";
$active = '#nav-index';
require_once "_header.php";
?>

<div class="container-fluid contain-to-1000 index-section-1 color-white text-center">
  <div class="row">
    <div class="col-md-6 background-dark-blue">
      <h1 tabindex="0">What is your role?</h1>
      <ul class="text-left">
        <a href="content.php?category=content_business" target="_self"><li class="background-light-blue">Business</li></a>
        <a href="content.php?category=content_design" target="_self"><li class="background-light-blue">Design</li></a>
        <a href="content.php?category=content_development" target="_self"><li class="background-light-blue" style="margin-bottom: 50px;">Development</li></a>
      </ul>
    </div>
    <div class="col-md-6 background-light-blue">
      <h1 tabindex="0">We can help you with:</h1>
      <ul class="text-left">
        <a href="content-page.php?article=8" target="_self"><li class="background-dark-blue">Web</li></a>
        <a href="content-page.php?article=5" target="_self"><li class="background-dark-blue">Video</li></a>
        <a href="content-page.php?article=6" target="_self"><li class="background-dark-blue" style="margin-bottom: 50px;">SEO</li></a>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid contain-to-1000 index-section-3 text-center">
  <h1 tabindex="0" class="font-bold">You're in good company</h1>
  <p tabindex="0" class="color-grey">Many influencial companies have already made their businesses accessible.</p>
  <div class="row align-items-center">
    <div class="col-sm-4" id="index-section-3-top-left">
      <a href="https://www.ryerson.ca/" target="_blank"><img src="img/logo_ryerson_grey.png" alt="Ryerson University logo"></a>
    </div>
    <div class="col-sm-4" id="index-section-3-top-middle">
      <a href="https://ce-online.ryerson.ca/ce/default.aspx" target="_blank"><img src="img/logo_chang_school_grey.png" alt="The Chang School of Continuing Education logo"></a>
    </div>
    <div class="col-sm-4" id="index-section-3-top-right">
      <a href="https://dmz.ryerson.ca/" target="_blank"><img src="img/logo_dmz_grey.png" alt="DMZ logo"></a>
    </div>
  </div>
</div>

<hr class="contain-to-1000" style="margin-bottom: 0px;">

<?php

$article = get_article(2);
$author = get_author($article->author_id);
$banner = get_banner($article->banner_id);

$pageTitle = $article->title;
require_once "_header.php";

// if error on any variable
if (!$article || !$author || !$banner) {
  // redirect to main content page
  echo("<script>window.location = 'content.php?error-loading-article';</script>");
} else {
}
?>

<div class="container-fluid contain-to-1000 content-page-section-1">
  <!-- article author -->
  <div class="row content-page-author">
    <div class="col-3 content-page-author-img">
      <img tabindex="0" class="rounded-circle" src="<?php echo $author->img_src; ?>" alt="<?php echo $author->img_alt; ?>">
    </div>
    <div class="col-9 content-page-author-text">
      <p tabindex="0" class="color-grey"><?php echo $author->firstname . " " . $author->lastname; ?><br><?php echo $article->created_at; ?></p>
    </div>
  </div>
  <!-- article title -->
  <h1 tabindex="0" class="content-article-title"><?php echo $article->title; ?></h1>
  <!-- banner img -->
  <div class="container-fluid content-article-img">
    <img tabindex="0" src="img/banner_img/<?php echo $banner->id; ?>.jpg" alt="<?php echo $banner->alt_text ?>" class="content-article-img">
  </div>
  <!-- begin reading time -->
  <article>
    <div tabindex="0" class="eta" style="display: inline"></div><p style="display: inline"> read<br><br></p>
    <!-- article content -->
    <?php include "content/content." . $article->id . ".php"; ?>
    <!-- article signoff -->
    <p tabindex="0">If you found this article helpful, give us a like to let us know.</p>
    <!-- end reading time -->
  </article>
  <?php
  if (!$g['like']) {
    echo '<p tabindex="0" id="content-article-like">Select the <a href="index.php?like=' . $article->id . '"><i tabindex="0" class="far fa-thumbs-up"></i></a> to like article.</p>';
  } else {
    like_article($g['like']);
    echo '<p tabindex="0" id="content-article-like">Select the <a href="content-page.php?article=' . $article->id . '&like=' . $article->id . '"><i tabindex="0" class="far fa-thumbs-up"></i></a> to like article.</p>';
    echo '<p tabindex="0" id="content-article-like">Thank you for the like<i class="fas fa-thumbs-up" style="cursor: default;"></i></p>';
  }
  $likes = get_likes($article->id);
  if ($likes) {
    if ($likes == 1) {
      echo '<p tabindex="0">This article has been liked once.</p>';
    } else {
      echo '<p tabindex="0">This article has been liked ' . $likes . ' times.</p>';
    }
  } else {
    echo '<p tabindex="0">This article has not yet been liked.</p>';
  }
  ?>

</div>

<?php //include __DIR__ .  "/content/_latest-article.php"; ?>

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$('article').readingTime();
$(document).ready(on_index_load());
</script>
