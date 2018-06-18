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
    echo '<p tabindex="0" id="content-article-like">Select the <a href="content-page.php?article=' . $article->id . '&like=' . $article->id . '"><i tabindex="0" class="far fa-thumbs-up"></i></a> to like article.</p>';
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

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$('article').readingTime();
</script>
