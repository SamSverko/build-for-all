<?php
$pageTitle = "Content";
require_once "_header.php";

include "content/latest-article.php"; // content-section-1
?>

<hr class="contain-to-1000">

<div class="container-fluid contain-to-1000 content-section-2">
  <div class="row">
    <div class="col-sm-3">
      <p>BUSINESS</p>
    </div>
    <div class="col-sm-3">
      <p>DESIGN</p>
    </div>
    <div class="col-sm-3">
      <p>DEVELOPMENT</p>
    </div>
    <div class="col-sm-3">
      <p>STORIES</p>
    </div>
  </div>
</div>

<hr class="contain-to-1000" style="margin-top: 30px;">

<div class="container-fluid" style="max-width: 700px;">
  <?php include "content/content.1.php"; ?>
</div>

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_content_load());
</script>
