<?php
$pageTitle = "Home";
require_once "_header.php";
?>

<div class="container-fluid contain-to-1000 index-section-1 color-white text-center">
  <div class="row">
    <div class="col-md-6 background-dark-blue">
      <h1 tabindex="0">What is your role?</h1>
      <ul class="text-left">
        <li tabindex="0" class="background-light-blue">CEO</li>
        <li tabindex="0" class="background-light-blue">Designer</li>
        <li tabindex="0" class="background-light-blue">Developer</li>
        <li tabindex="0" class="background-light-blue">Marketer</li>
      </ul>
    </div>
    <div class="col-md-6 background-light-blue">
      <h1 tabindex="0">We can help you with:</h1>
      <ul class="text-left">
        <li tabindex="0" class="background-dark-blue">Auditing</li>
        <li tabindex="0" class="background-dark-blue">Designer</li>
        <li tabindex="0" class="background-dark-blue">Developer</li>
        <li tabindex="0" class="background-dark-blue">Marketer</li>
      </ul>
    </div>
  </div>
</div>

<?php include __DIR__ .  "/content/_latest-article.php"; ?>

<hr class="contain-to-1000">

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

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_index_load());
</script>
