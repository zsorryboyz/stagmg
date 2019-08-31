<!DOCTYPE html>
<?php
// error_reporting(0);
if(!isset($_SESSION))
 {
     session_start();
 }
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>SHAQMG</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/cssedit.css'); ?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.slim.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

  <style>
  body  {
  background-image: url("paper.gif");
  background-color: #cccccc;
  }
  </style>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v4.0&appId=639497196533705&autoLogAppEvents=1"></script>
</head>


<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url('assets/img/ll.jpg'); ?>" width="40" height="40" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>

  <ul class="nav nav-pills justify-content-end">
    <!-- <div class="fb-login-button" id="loginbutton" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"></div> -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">เข้าสู่ระบบ</a>
    </li> -->
    <?php

if(isset($_SESSION["type"])){
print($_SESSION["first_name"]);

}else{
  echo "<fb:login-button scope='public_profile,email,user_photos' onlogin='checkLoginState();'>
        </fb:login-button>";
}
?>

    <li class="nav-item">
        <a href="Main/register" class="btn btn-warning" role="button" aria-pressed="true">สมัครใช้งาน!!</a>
    </li>
  </ul>

</nav>

        <!-- Page Content -->

            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="background-page"></h1>
                  <h1 class="mt-5">ยินดีต้อนรับเข้าสู่เว็บไซต์</h1>
                  <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
                  <ul class="list-unstyled">
                    <li>Bootstrap 4.3.1</li>
                    <li>jQuery 3.4.1</li>
                  </ul>
                </div>
              </div>
            </div>



      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">

              <a href="#" class="fb">
                <img src="<?php echo base_url('assets/img/facebooklogin.png'); ?>" width="350" >
              </a>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>


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
          }, {scope: 'email,user_photos,public_profile'});

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

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.slim.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

</body>

</html>
