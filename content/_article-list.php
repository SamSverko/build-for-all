<?php
include __DIR__ .  "/../inc/config.php";

$articles_by_category = get_articles_by_category($g['category']);

if (!$articles_by_category || count($articles_by_category) == 0) {
  Echo "No articles yet written in this category";
} else {
  for ($i = 0; $i < count($articles_by_category[0]); $i++) {
    $single_article = '<div class="row content-article-list">';
    $single_article .= '<div class="col-md-6 text-center">';
    $single_article .= '<img tabindex="0" src="img/banner_img/' . $articles_by_category[2][$i]->id .'.jpg" alt="' . $banner->alt_text . '" class="content-section-1-banner">';
    $single_article .= '</div>';
    $single_article .= '<div class="col-md-6 align-middle">';
    $single_article .= '<a href="content-page.php?article=' . $articles_by_category[0][$i]->id . '" target="_self"><p tabindex="0" class="font-bold">' . $articles_by_category[0][$i]->title . '</p></a>';
    $single_article .= '<p tabindex="0" class="color-grey">' . $articles_by_category[0][$i]->summary . '</p>';
    $single_article .= '<div class="row content-section-1-author-img-p">';
    $single_article .= '<div class="col-3 text-center">';
    $single_article .= '<img tabindex="0" class="rounded-circle content-section-1-author" src="' . $articles_by_category[1][$i]->img_src . '" alt="' . $articles_by_category[1][$i]->img_alt . '">';
    $single_article .= '</div>';
    $single_article .= '<div class="col-9">';
    $single_article .= '<p tabindex="0" class="color-grey">' . $articles_by_category[1][$i]->firstname . " " . $articles_by_category[1][$i]->lastname . '<br>' . $articles_by_category[0][$i]->created_at . '</p>';
    $single_article .= '</div>';
    $single_article .= '</div>';
    $single_article .= '</div>';
    $single_article .= '</div>';
    $single_article .= '<hr class="contain-to-1000" style="margin-bottom: 60px;">';

    echo $single_article;
  }
}
?>
