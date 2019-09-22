<!DOCTYPE html>

<?php
// error_reporting(0);
if(!isset($_SESSION))
 {
     session_start();
header('Access-Control-Allow-Origin: *');
$url = parse_url(getenv("DEPLOY"));
echo $url;
 }
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STAQMG</title>
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
  <!--==========================
  Header
  ============================-->
  <header id="header">



    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="Main/home" class="scrollto"><span>STAQMG</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="navbar navbar-light">
        <ul class="nav nav-pills justify-content-end" style="margin-left:950px">
          <?php

      if(isset($_SESSION["type"])){
      print($_SESSION["first_name"]);

      }else{
        echo "<fb:login-button class='login-button' scope='public_profile,email,user_photos,pages_messaging' onlogin='checkLoginState();'>
              </fb:login-button>";
      }
      ?>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h3>ยินดีต้อนรับเข้าสู่...</h3><h2><span>ระบบจัดการร้านค้าออนไลน์!</span></h2>

          <div>

          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="<?php echo base_url('assets/test/img/intro-img.svg'); ?>" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <script>


$(document).ready(function(){
  function postAjax(url, data, success) {
      var params = typeof data == 'string' ? data : Object.keys(data).map(
              function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
          ).join('&');

      var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
      xhr.open('POST', url);
      xhr.onreadystatechange = function() {
          if (xhr.readyState>3 && xhr.status==200) { success(xhr.responseText); }
      };
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(params);
      return xhr;
  }
    function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
      console.log('statusChangeCallback');
      console.log(response);                   // The current login status of the person.
      if (response.status === 'connected') {   // Logged into your webpage and Facebook.
        testAPI();


      } else {                                 // Not logged into your webpage or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log ' +
          'into this webpage.';
      }
    }


     window.checkLoginState  = function() {               // Called when a person is finished with the Login Button.
      FB.getLoginStatus(function(response) {   // See the onlogin handler
        statusChangeCallback(response);
         console.log(response.authResponse.accessToken);
      });
      FB.login(function(response) {
      }, {scope: 'email,user_photos,public_profile,pages_messaging'});

    }


    window.fbAsyncInit = function() {
      FB.init({
        appId      : '639497196533705',
        cookie     : true,                     // Enable cookies to allow the server to access the session.
        xfbml      : true,                     // Parse social plugins on this webpage.
        version    : 'v4.0.'           // Use this Graph API version for this call.
      });


      FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
        statusChangeCallback(response);        // Returns the login status.
      });
    };


    (function(d, s, id) {                      // Load the SDK asynchronously
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
      console.log('Welcome!  Fetching your information.... ');
      FB.api('/me',{ fields: 'first_name,last_name,name, email,id,picture.height(300).width(300)' }, function(response) {
        console.log(JSON.stringify(response))
        dataresponse = response;

        $.ajax({
               url: '<?php echo base_url('Users/Login'); ?>',
               type: 'post',
               data: {
                        first_name:response.first_name,
                         last_name:response.last_name,
                         name:response.name,
                         email:response.email,
                         id:response.id,
                         picture:response.picture.data.url},

             }).done(function(response) {
                 // alert(response);

                 if(response=="success"){
                   window.location.href = "<?php echo base_url('Main/home'); ?>";
                 }
             });
      // postAjax('controller/Login.php', {
      // first_name:response.first_name,
      // last_name:response.last_name,
      // name:response.name,
      // email:response.email,
      // id:response.id,
      // picture:response.picture.data.url }, function(data){ console.log(data); });
      });
    }
});
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
