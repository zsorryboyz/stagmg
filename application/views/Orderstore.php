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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



  <style>




   .card-img {
      width: 80px !important;
      height:80px;
      margin: auto auto;
  }
    .img-prostore{
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 150px;


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
        
        <a href="#" class="list-group-item list-group-item-action bg-light">การจัดส่งสินค้า</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">ประวัติการส่ง</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->




    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <h5 class="mt-4" style="margin-left: 10px;">สินค้าคงคลัง</h5>
      </div>

      <form class="form-inline">
        <input class="form-control mr-sm-2 search-order" id="search-order"  placeholder="ชื่อสินค้า..." aria-label="Search"style="margin-left:70px; margin-top:10px">
      </form>


      <!-- Page Content -->
      <div class="container">
          <br>
          <div class="col-lg-9">

            <div class="row">
              <table  class="table table-borderless">
  <thead style="background-color: #1de9b6;">
    <tr>
      <th scope="col" class="text-center"></th>
      <th scope="col" class="text-center">ชื่อสินค้า</th>
      <th scope="col" class="text-center">ขายแล้ว</th>
      <th scope="col" class="text-center">สต็อก</th>
      <th scope="col" class="text-center">เพิ่มสินค้า</th>
    </tr>
  </thead>
  <tbody id="table-order">
    <?php

    $get_p_cats = "SELECT * ,(SELECT SUM(amount) FROM order_detail ,`order` WHERE order.idOrder = order_detail.idOrder AND order_detail.idProduct = product.idProduct AND ( order.status_order = 'โอนแล้ว' OR order.status_order = 'ส่งแล้ว' )) AS SUM FROM `product`";
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
        <!-- /.row -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">สินค้าคงคลัง</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4">
                        <img class="img-prostore" id="img-store" src="" width="100" height="100" >
                      </div>
                        <div class="col-md-3 ml-auto text-warning">
                        <h4>ขายแล้ว</h4>
                          <div class="col-md-4 text-info">
                            <h5 > </h5>
                          </div>
                        </div>
                      <div class="col-md-4 ml-auto text-warning">
                        <h4>สต็อก</h4>
                        <div class="col-md-4 text-info  ">
                          <h5 id="num-store"></h5>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                    </div>
                    <div class="row">
                      <div class="col-sm-9">
                        <br>
                        <h5>เพิ่มสต็อก</h5>
                        <div class="row">
                          <div class="col-8 col-sm-6">
                             <input id="getnum" type="text" name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ class="form-control form-num" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

                          </div>
                          <div class="col-4 col-sm-6">
                            <input id="getidstore" hidden>
                            <button type="button"  id="but-sto" class=" btn btn-info button-store"><i class="material-icons" style="font-size:15px">star</i> เพิ่มจำนวน</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">เสร็จสิ้น</button>
              </div>
            </div>
          </div>
        </div>

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


          $("#search-order").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#table-order tr").filter(function() {
           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

          });
          });





      $(".store-product").click(function(){

      $('#exampleModalLong').modal('show')


    $('#num-store').html($(this).data('amount'));
    $("#img-store").attr("src",'  ../'+$(this).data('img'));
    $('#getidstore').val($(this).data('id'));


      });

      $(".button-store").click(function(){




        let sum = parseInt( $('#num-store').html())+  parseInt($('#getnum').val())

        $.ajax({
               url: '<?php echo base_url('Product/Product_store'); ?>',
               type: 'post',
               dataType: 'html',
               data: {id:$('#getidstore').val(),sum:sum},
             }).done(function(response) {
               if(response=="success"){

               window.location.href = "<?php echo base_url('Main/orderstore'); ?>";

               }
                alert(response);

             });


      });

      var button = $('#but-sto');
      $(button).attr('disabled','disabled');


      $('.form-num').change(function() {
        if ($(button).attr('disabled'))
        $(button).removeAttr('disabled');
        else
        $(button).attr('disabled', 'disabled');
         });

    });







    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
