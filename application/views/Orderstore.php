<?php
$con = mysqli_connect("localhost","root","","project");
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
mysqli_set_charset($con,"utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STAQMG</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home">
    <img src="<?php echo base_url('assets/img/ll.jpg'); ?>" width="50" height="50">
    STAQMG</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Messenger">สนทนา</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order">รายการสั่งสินค้า</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">สถิติ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product">จัดการร้านค้า</a>
      </li>
    </ul>
  </div>
</nav>



  <div class="d-flex" id="wrapper" style="margin-left: 20px;">

    <!-- Sidebar -->

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a class="top text-center">สินค้า</a>
        <a href="Product" class="list-group-item list-group-item-action bg-light">อัลบัมสินค้า</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">สินค้าคงคลัง</a>
        <a class="top text-center">การส่งสินค้า</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">การจัดส่งสินค้า</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">ประวัติการส่ง</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <br>
            <a href="product_add" class="btn btn-success" role="button" aria-pressed="true" style="margin-right: 50px;">สร้างสินค้า</a>
        </li>
      </ul>
      <div class="container-fluid">
        <h5 class="mt-4" style="margin-left: 10px;">สินค้าคงคลัง</h5>
      </div>



      <!-- Page Content -->

    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
    <script>

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
