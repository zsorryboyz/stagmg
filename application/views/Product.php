<?php
$con = mysqli_connect("us-cdbr-iron-east-02.cleardb.net","b1a622bf325640","9008a9dd","heroku_e74b0dc8e642086");
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
mysqli_set_charset($con,"utf8");


if (isset($_SESSION['first_name'])) {
  // code...
}else{
 header( "location: index" );
}


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


<style>

.product:hover .card-img-overlay{
    display: block;
}
.product .card-img-overlay{
    display: none;
   
}

.card-img{

  width: 150px !important;
    height:150px;
    margin: auto auto;

}

</style>



</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6200ea;">
  <a class="navbar-brand text-light" href="home">
    <img src="<?php echo base_url('assets/img/ll.jpg'); ?>" width="50" height="50">
    STAQMG</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" href="Messenger">สนทนา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="order">รายการสั่งสินค้า</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">สถิติ</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="product">จัดการร้านค้า</a>
        </li>
      </ul>
    </div>
</nav>



  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->

    <div class="bg-light border-right" id="sidebar-wrapper" style="margin-top:10px;">
      <div class="list-group list-group-flush">
      
        <a href="Product" class="list-group-item list-group-item-action bg-light">อัลบัมสินค้า</a>
        <a href="orderstore" class="list-group-item list-group-item-action bg-light">สินค้าคงคลัง</a>
        
        <a href="viewOrder" class="list-group-item list-group-item-action bg-light">การจัดส่งสินค้า</a>
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
        <h5 class="mt-4" style="margin-left: 10px;">อัลบัมสินค้า</h5>
      </div>



      <!-- Page Content -->
      <div class="container">
          <br>
          <div class="col-lg-9">

            <div class="row">
              <?php

              $get_p_cats = "select * from product ";
              $run_p_cats = mysqli_query($con,$get_p_cats);

              while ($row=mysqli_fetch_array($run_p_cats)){

                  $name_product = $row['name_product'];
                  $idProduct = $row['idProduct'];
                  $image_product = $row['image_product'];
                  $price = $row['price'];
                  $amount_product = $row['amount_product'];
                  $detail_product = $row['detail_product'];
                  $idProduct_type = $row['idProduct_type'];

                 $urledit = base_url('product/view_Editproduct').'?id='.$idProduct;

                  echo "<div class='col-md-3'>
                          <div class='product'>
                          <div class='c1'>
                          <a href='#'><img class='card-img' src='../$image_product' alt='Card image'></a>
                          <div class='card-img-overlay'>
                        <p class='card-text text-center' style='margin-right:25px'>
                            <a href='$urledit'><span class='btn btn-success mx-auto w-50'>Edit</span></a>
                        </p>
                        <p class='card-text text-center' style='margin-right:25px'>
                            <a><span data-id='$idProduct' class='btn btn-danger mx-auto w-50 DelPro'>Delete</span></a>
                        </p>
                          </div>
                      </div>
                      <div class='title text-center' style='margin-right:20px'>
                      <h5>$name_product</h5>
                      <p class='card-text'>$price บาท</p>
                      </div>
                  </div>
                  </div>";


              }

              ?>

            </div>
            <!-- /.row -->

          </div>
          <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

      </div>


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>


  <!-- Menu Toggle Script -->
    <script>


    $(document).ready(function(){
            $('.DelPro').on('click', function(){


                $.ajax({
                       url: '<?php echo base_url('Product/delete'); ?>',
                       type: 'post',
                       dataType: 'html',
                       data: {id:$(this).data('id')},
                     }).done(function(response) {
                       if(response=="success"){

                       window.location.href = "<?php echo base_url('Main/product'); ?>";

                       }

                       alert(response);


                     });

            });







    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
      });
  </script>

</body>

</html>
