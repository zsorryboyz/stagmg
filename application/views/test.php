<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rapid Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">




  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php  echo base_url ('assets/test/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php  echo base_url ('assets/test/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php  echo base_url ('assets/test/lib/animate/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php  echo base_url ('assets/test/lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php  echo base_url ('assets/test/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url ('assets/test/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/vendor/jquery/jquery.slim.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url ('assets/test/css/style1.css'); ?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v4.0&appId=639497196533705&autoLogAppEvents=1"></script>


</head>

<body>

<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="1">First name</label>
      <input type="text" class="form-control" id="1" placeholder="First name" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="2">Last name</label>
      <input type="text" class="form-control" id="2" placeholder="Last name" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="3">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.slim.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/jquery/jquery-migrate.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/easing/easing.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/mobile-nav/mobile-nav.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/wow/wow.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/waypoints/waypoints.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/counterup/counterup.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url ('assets/test/lib/lightbox/js/lightbox.min.js'); ?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url ('assets/test/contactform/contactform.js'); ?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url ('assets/test/js/main.js'); ?>"></script>

</body>
</html>
