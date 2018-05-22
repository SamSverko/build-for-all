<?php
$pageTitle = "Home";
require_once "_header.php";
?>

<div class="index-section-1 color-white text-center">
  <div class="row">
    <div class="col-md-6 background-dark-blue">
      <h1>What is your role?</h1>
      <ul class="text-left">
        <li class="background-light-blue">CEO</li>
        <li class="background-light-blue">Designer</li>
        <li class="background-light-blue">Developer</li>
        <li class="background-light-blue">Marketer</li>
      </ul>
    </div>
    <div class="col-md-6 background-light-blue">
      <h1>We can help you with:</h1>
      <ul class="text-left">
        <li class="background-dark-blue">Auditing</li>
        <li class="background-dark-blue">Designer</li>
        <li class="background-dark-blue">Developer</li>
        <li class="background-dark-blue">Marketer</li>
      </ul>
    </div>
  </div>
</div>

<div class="index-section-2">
  <h1 class="font-bold text-center">Latest article</h1>
  <div class="row">
    <div class="col-sm-6 background-light-blue">
    </div>
    <div class="col-sm-6">
      <p class="font-bold">A new article about accessible SEO</p>
      <p class="color-grey">Easily configure your website for top rankings, among other best practices that make your website more accessible.</p>
      <div class="row">
        <div class="col-3 text-center">
          <img class="rounded-circle" src="img/image_katlynn.jpg" alt="Katlynn Sverko headshot">
        </div>
        <div class="col-9 index-section-2-author">
          <p class="color-grey">Katlynn Sverko</p>
          <p class="color-grey">May 21, 2018</p>
        </div>
      </div>
    </div>
  </div>
</div>

<hr style="background-color: var(--border-color-light-grey);">

<div class="index-section-3 text-center">
  <h1 class="font-bold">You're in good company</h1>
  <p class="color-grey">Many influencial companies have already made their businesses accessible.</p>
  <div class="row align-items-center">
    <div class="col-sm-4" id="index-section-3-top-left">
      <img src="img/logo_ryerson_grey.png" alt="Ryerson University logo">
    </div>
    <div class="col-sm-4" id="index-section-3-top-middle">
      <img src="img/logo_chang_school_grey.png" alt="The Chang School of Continuing Education logo">
    </div>
    <div class="col-sm-4" id="index-section-3-top-right">
      <img src="img/logo_dmz_grey.png" alt="DMZ logo">
    </div>
  </div>
</div>

<hr style="background-color: var(--border-color-light-grey);">

<?php
require_once "_footer.php";
?>
