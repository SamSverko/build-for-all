<hr class="contain-to-1000">

<div class="container-fluid contain-to-1000 footer-section-1">
  <div class="row">
    <div class="col-sm-8">
      <h1 tabindex="0" class="font-bold">Startups for a better world</h1>
      <p tabindex="0" class="color-grey">Let's chat.</p>
    </div>
    <div class="col-sm-4 text-right">
      <button type="button" class="btn" name="contact-us-button" onclick="window.location.replace('contact.php');">CONTACT US</button>
    </div>
  </div>
</div>

<hr class="contain-to-1000" style="margin-top: 30px;">

<div class="container-fluid contain-to-1000 footer-section-2 color-grey">
  <div class="row">
    <div class="col-sm-12 footer-section-2-lists">
      <div class="row">
        <div class="col-sm-4">
          <ul>
            <li tabindex="0" class="font-bold" style="margin-bottom: 15px;">SITE</li>
            <a href="about.php" target="_self"><li>About</li></a>
            <a href="contact.php" target="_self"><li>Contact</li></a>
            <a href="sitemap.xml" target="_self"><li>Site Map</li></a>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul>
            <li tabindex="0" class="font-bold" style="margin-bottom: 15px;">CONTENT</li>
            <a href="content.php" target="_self"><li>Business</li></a>
            <a href="content.php?category=content_design" target="_self"><li>Design</li></a>
            <a href="content.php?category=content_development" target="_self"><li>Development</li></a>
            <a href="content-page.php?article=1" target="_self"><li>Definitions</li></a>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul>
            <li tabindex="0" class="font-bold" style="margin-bottom: 15px;">RESOURCES</li>
            <a href="#" target="_self"><li>WCAG 2.0<i class="fas fa-external-link-alt"></i></li></a>
            <a href="#" target="_self"><li>AODA<i class="fas fa-external-link-alt"></i></li></a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="background-lighter-grey">
  <div class="container-fluid contain-to-1000 color-grey footer-section-3">
    <div class="row">
      <div class="col-sm-3">
        <p class="font-bold"><a href="#" target="_self">Privacy & Terms</a></p>
      </div>
      <div class="col-sm-3">
        <p class="font-bold"><a href="contact.php" target="_self">Contact</a></p>
      </div>
      <div class="col-sm-6">
        <p class="font-bold"><i class="far fa-copyright"></i> Build for All 2018</p>
      </div>
    </div>
  </div>
</div>

<!-- CDN jQuery 3.3.1 -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- CDN Reading Time -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/reading-time/2.0.0/readingTime.min.js"></script>
<!-- local JavaScript -->
<script src="js/script.js"></script>
<!-- LiveReload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>

<script type="text/javascript">
<?php if ($active) { ?>
	$('<?=$active?>').addClass('active');
	<?php } ?>
</script>
