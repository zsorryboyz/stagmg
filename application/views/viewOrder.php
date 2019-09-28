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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
        
        <a href="viewOrder" class="list-group-item list-group-item-action bg-light">ประวัติการขาย</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">ประวัติการส่ง</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->

    <div id="page-content-wrapper">

    <div class="container-fluid">
        <h5 class="mt-4" style="margin-left: 10px;">ประวัติการขาย</h5>
      </div>

      <form class="form-inline">
        <input class="form-control mr-sm-2 search-order" id="search-order"  placeholder="ชื่อสินค้า..." aria-label="Search"style="margin-left:70px; margin-top:10px">
      </form>


      <div class="container">
          <br>
          <div class="col-lg-9">

            <div class="row">
              <table  class="table table-borderless">
  <thead style="background-color: #1de9b6;">
    <tr>
      <th scope="col" class="text-center"></th>
      <th scope="col" class="text-center">วันที่ขาย</th>
      <th scope="col" class="text-center">ชื่อลูกค้า</th>
      <th scope="col" class="text-center">ชื่อสินค้า</th>
      <th scope="col" class="text-center">จำนวนชิ้น</th>
      <th scope="col" class="text-center">ราคาทั้งหมด</th>
    </tr>
  </thead>
  <tbody id="table-order">
    <?php
      $get_p_cats = "SELECT *  FROM order_detail ,`order` WHERE order.idOrder = order_detail.idOrder AND order_detail.idProduct = product.idProduct AND ( order.status_order = 'โอนแล้ว' OR order.status_order = 'ส่งแล้ว' )) AS SUM FROM `product`";
      $run_p_cats = mysqli_query($con,$get_p_cats);

      while ($row=mysqli_fetch_array($run_p_cats)){

          $name_product = $row['name_product'];
          $idProduct = $row['idProduct'];
          $image_product = $row['image_product'];
          $price = $row['price'];
          $amount_product = $row['amount_product'];
          $detail_product = $row['detail_product'];
          $idProduct_type = $row['idProduct_type'];
          $SUM = $row['SUM'];

          echo " <tr>
                  <th><img class='card-img' src='../$image_product' alt='Card image'></th>
                  <td class='text-center'>$name_product</td>
                  <td class='text-center'>$SUM</td>
                  <td class='text-center'>$amount_product ชิ้น</td>
                  <td class='text-center'><span class='btn btn-info  store-product' data-id='$idProduct' data-img='$image_product' data-amount='$amount_product' >เพิ่มสินค้า</span></td>
                </tr>

            ";


      }

    ?>








  </tbody>





            </div>
            <!-- /.row -->

          </div>
          <!-- /.col-lg-9 -->

        </div>


    </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>


  <!-- Menu Toggle Script -->
    <script>

  

   </script>

</body>

</html>
