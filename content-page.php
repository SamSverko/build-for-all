<?php
require_once "inc/config.php";

$article = get_article($g['article']);
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
  <h1 class="content-article-title"><?php echo $article->title; ?></h1>
  <!-- banner img -->
  <div class="container-fluid content-article-img">
    <img src="<?php echo $banner->img_src ?>" alt="<?php echo $banner->alt_text ?>" class="content-article-img">
  </div>
  <!-- article content -->
  <?php include "content/content." . $article->id . ".php"; ?>
  <!-- article signoff -->
  <p>If you found this article helpful, give us a like to let us know.</p>
</div>

<?php
require_once "_footer.php";
?>
