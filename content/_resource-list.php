<?php
include __DIR__ .  "/../inc/config.php";

$showResources = "";
if ($g['category'] == 'resources_auditing') {
  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://chrome.google.com/webstore/detail/axe/lhdoppojpmngadmnindnejefpokejbdd?hl=en" target="_blank"><p class="font-bold">aXe</p></a>';
  $showResources .= '<p class="color-grey">Google Chrome Browser Extension</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://addons.mozilla.org/en-US/firefox/addon/axe-devtools/" target="_blank"><p class="font-bold">aXe Developer Tools</p></a>';
  $showResources .= '<p class="color-grey">Firefox Browser Add-on</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://chrome.google.com/webstore/detail/chromevox/kgejglhpjiefppelpmljglcjbhoiplfn?hl=en" target="_blank"><p class="font-bold">ChromeVox</p></a>';
  $showResources .= '<p class="color-grey">Google Chrome Browser Extension</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://www.w3.org/WAI/ER/tools/" target="_blank"><p class="font-bold">Web Accessibility Evaluation Tools List</p></a>';
  $showResources .= '<p class="color-grey">W3C - Web Accessibility Initiative</p>';
  $showResources .= '</div>';

} else if ($g['category'] == 'resources_ceo') {
  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://www.w3.org/WAI/policies/" target="_blank"><p class="font-bold">Web Accessibility Laws & Policies</p></a>';
  $showResources .= '<p class="color-grey">W3C - Web Accessibility Initiative</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://dr6j45jk9xcmk.cloudfront.net/documents/4845/guidelines-to-iasr-english.pdf" target="_blank"><p class="font-bold">A Guide to the Integrated Accessibility Standards Regulation</p></a>';
  $showResources .= '<p class="color-grey">AccessON</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://www.ontario.ca/page/benefiting-accessible-e-business-practices" target="_blank"><p class="font-bold">Benefiting from accessible e-business practices</p></a>';
  $showResources .= '<p class="color-grey">Government of Ontario</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://www.ontario.ca/page/how-create-accessibility-plan-and-policy" target="_blank"><p class="font-bold">How to create an accessibility plan and policy</p></a>';
  $showResources .= '<p class="color-grey">Government of Ontario</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="http://www.conferenceboard.ca/e-library/abstract.aspx?did=7159&AspxAutoDetectCookieSupport=1" target="_blank"><p class="font-bold">Employers’ Toolkit: Making Ontario Workplaces Accessible to People With Disabilities, 2nd Edition</p></a>';
  $showResources .= '<p class="color-grey">The Conference Board of Canada</p>';
  $showResources .= '</div>';
} else {
  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://webaim.org/resources/contrastchecker/" target="_blank"><p class="font-bold">Color Contrast Checker</p></a>';
  $showResources .= '<p class="color-grey">WebAIM</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="https://contrastchecker.com/" target="_blank"><p class="font-bold">Contrast Checker</p></a>';
  $showResources .= '<p class="color-grey">Acart Communications</p>';
  $showResources .= '</div>';

  $showResources .= '<div tabindex="0" class="resources-section-3-row">';
  $showResources .= '<a href="WebpageFX" target="_blank"><p class="font-bold">Readability Test Tool</p></a>';
  $showResources .= '<p class="color-grey">https://www.webpagefx.com/tools/read-able/</p>';
  $showResources .= '</div>';
}

echo $showResources;


// <div class="resources-section-3-row">
//   <a href="https://www.w3.org/WAI/policies/" target="_blank"><p class="font-bold">Web Accessibility Laws & Policies</p></a>
//   <p class="color-grey">W3C - Web Accessibility Initiative</p>
// </div>
