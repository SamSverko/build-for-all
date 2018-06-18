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

<?php include __DIR__ .  "/content/_latest-article.php"; ?>

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_index_load());
</script>
