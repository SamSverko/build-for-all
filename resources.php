<?php
$pageTitle = "About";
$active = '#nav-resources';
require_once "_header.php";
?>

<div class="container-fluid contain-to-1000 resources-section-1">
  <h1 tabindex="0" class="font-bold">Making startups more accessible</h1>
  <p tabindex="0">Build for All aims to surface the best resources for developing accessible and inclusive products and services.</p>
</div>

<hr class="contain-to-1000">

<div class="container-fluid contain-to-1000 resources-section-2">
  <div tabindex="0" role="group" aria-label="resources categories" class="row">
    <div class="col-sm-4">
      <p tabindex="0" class="resources-category-button" id="resources_auditing">AUDITING</p>
    </div>
    <div class="col-sm-4">
      <p tabindex="0" class="resources-category-button" id="resources_ceo">CEO</p>
    </div>
    <div class="col-sm-4">
      <p tabindex="0" class="resources-category-button" id="resources_marketing">MARKETING & DESIGN</p>
    </div>
  </div>
</div>

<hr class="contain-to-1000" style="margin-top: 30px;">

<div class="container-fluid resources-section-3 resources-list">
</div>



<!-- </div> -->

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_resources_load());
</script>
