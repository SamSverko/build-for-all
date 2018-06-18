<?php
$pageTitle = "Home";
$active = '#nav-contact';
require_once "_header.php";

if ($p) {
  if ($g['action'] == "send") {
    if (!$p['contact-subject']) $e[] = "Subject empty";
    if (!$p['contact-email']) $e[] = "Email empty";
    if (!$p['contact-text']) $e[] = "Text empty";
    if (!$e) {
      if (send_to_database($p)) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="contact-alert">
        <strong>Success!</strong> Contact form sent.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
      } else {
        pre_out("Error sending form. Please try again", "Error");
      }
    } else {
      pre_out($e, "Error");
    }
  }
}


?>

<div class="container-fluid contain-to-1000 contact-section-1">
  <h1 tabindex="0" class="font-bold">Contact us</h1>
  <p tabindex="0">We want your input: questions, errors, complaints, praise, content requests - every little bit helps. Let us know what we can do to improve.</p>
</div>

<div class="container-fluid contact-section-2">
  <form action="contact.php?action=send" method="post">
    <div class="form-group">
      <label for="contact-form-subject" class="font-bold">Subject</label>
      <input type="text" class="form-control" id="contact-form-subject" aria-describedby="emailHelp" name="contact-subject" placeholder="Enter subject" required>
    </div>
    <div class="form-group">
      <label for="contact-form-email" class="font-bold">Your email</label>
      <input type="email" class="form-control" id="contact-form-email" aria-describedby="emailHelp" name="contact-email" placeholder="Enter email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="contact-form-text" class="font-bold">How can we help?</label>
      <textarea class="form-control" id="contact-form-text" rows="3" name="contact-text" placeholder="Enter text" required></textarea>
    </div>
    <div class="text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>


<?php
require_once "_footer.php";
?>
