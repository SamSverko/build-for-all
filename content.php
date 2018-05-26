<?php
$pageTitle = "Content";
require_once "_header.php";

include "content/_latest-article.php"; // content-section-1
?>

<hr class="contain-to-1000">

<div class="container-fluid contain-to-1000 content-section-2">
  <div class="row">
    <div class="col-sm-3">
      <p class="content-category-button" id="content-business">BUSINESS</p>
    </div>
    <div class="col-sm-3">
      <p class="content-category-button" id="content-design">DESIGN</p>
    </div>
    <div class="col-sm-3">
      <p class="content-category-button" id="content-development">DEVELOPMENT</p>
    </div>
    <div class="col-sm-3">
      <p class="content-category-button" id="content-stories">STORIES</p>
    </div>
  </div>
</div>

<hr class="contain-to-1000" style="margin-top: 30px;">

<div class="container-fluid contain-to-1000 content-articles">

</div>

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_content_load());
</script>
