<?php
$pageTitle = "About";
require_once "_header.php";
?>

<div class="container-fluid contain-to-1000 about-section-1">
  <h1 tabindex="0" class="font-bold">Making startups more accessible</h1>
  <p tabindex="0">At Build for All, we're building a platform that connects startups with resources they need to develop accessible and inclusive products and services. People around the world are joining the movement to begin their ventures with accessibility in mind right from the very beginning, creating with everyone in mind.</p>
  <img src="img/graphic_more_accessible.png" alt="two happy people reading books" id="about-section-1-img">
</div>

<div class="container-fluid contain-to-1000 about-section-2 text-center">
  <h1 tabindex="0" class="font-bold">Creating with everyone in mind</h1>
  <div class="row">
    <div tabindex="0" class="col-sm-4">
      <p class="font-bold">$<span class="about-section-2-lg">25</span></p>
      <p class="color-grey">billion annual buying power of people with disabilities in Canada</p>
    </div>
    <div tabindex="0" class="col-sm-4">
      <p class="font-bold"><span class="about-section-2-lg">816</span></p>
      <p class="color-grey">thousand Canadians live with limited vision</p>
    </div>
    <div tabindex="0" class="col-sm-4">
      <p class="font-bold"><span class="about-section-2-lg">14</span>%</p>
      <p class="color-grey">of the Canadian population has a disability</p>
    </div>
  </div>
</div>

<hr class="contain-to-1000">

<div class="container-fluid contain-to-1000 about-section-3">
  <div class="row">
    <div class="col-sm-6">
      <h1 tabindex="0" class="font-bold">Developing an inclusive way of thinking</h1>
      <p tabindex="0" class="color-grey">Our goal is to provide the community with education and processes on how to successfully implement accessible options, while addressing the fact that startups are already overburdened and are being pulled in many different directions. Everyone deserves access to technology, and everyone deserves access on equal terms.</p>
    </div>
    <div class="col-sm-6">
      <div class="background-light-blue"></div>
      <img src="img/graphic_inclusive_building.png" alt="two happy people building a structure together" id="about-section-3-img">
    </div>
  </div>
</div>

<hr class="contain-to-1000">

<div class="container-fluid contain-to-1000 about-section-4">
  <h1 tabindex="0" class="font-bold">Meet the team</h1>
  <div class="row color-grey">
    <div class="col-sm-6">
      <img tabindex="0" src="img/author/image_katlynn.jpg" class="rounded-circle" alt="Katlynn Sverko headshot">
      <p tabindex="0" class="font-bold">Katlynn Sverko</p>
      <p tabindex="0">Project Lead</p>
    </div>
    <div class="col-sm-6">
      <img tabindex="0" src="img/author/image_sam.jpg" class="rounded-circle" alt="Sam Legros headshot">
      <p tabindex="0" class="font-bold">Sam Legros</p>
      <p tabindex="0">Developer</p>
    </div>
  </div>
</div>

<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_about_load());
</script>
