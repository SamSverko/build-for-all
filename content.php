<?php
$pageTitle = "Content";
require_once "_header.php";

include "content/_latest-article.php"; // content-section-1
?>

<hr class="contain-to-1000">

<div class="container-fluid contain-to-1000 content-section-2">
  <div class="row">
    <div class="col-sm-3">
      <a href="#" target="_self"><p>BUSINESS</p></a>
    </div>
    <div class="col-sm-3">
      <a href="#" target="_self"><p>DESIGN</p></a>
    </div>
    <div class="col-sm-3">
      <a href="#" target="_self"><p>DEVELOPMENT</p></a>
    </div>
    <div class="col-sm-3">
      <a href="#" target="_self"><p>STORIES</p></a>
    </div>
  </div>
</div>

<hr class="contain-to-1000" style="margin-top: 30px;">

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_content_load());
</script>
