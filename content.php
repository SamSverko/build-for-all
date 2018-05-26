<?php
$pageTitle = "Content";
require_once "_header.php";

include_once "content/latest-article.php";
?>

<hr class="contain-to-1000">

<div class="container-fluid" style="max-width: 700px;">
  <?php include "content/content.1.php"; ?>
</div>





<?php
require_once "_footer.php";
?>

<script type="text/javascript">
$(document).ready(on_content_load());
</script>
