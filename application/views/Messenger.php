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

  <title>Scrolling Nav - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/MultiStep.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/MultiStep-theme.min.css'); ?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/scrolling-nav.css'); ?>" rel="stylesheet">

  <style>
  .product-list{
      text-align: center;
  }

.product-list .card-img {
    width: 80px !important;
    height:80px;
    margin: auto auto;
}

  </style>

</head>

<body id="page-top">

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
<br>

    <div class="nav nav-pills justify-content-end" role="group" aria-label="First group" style="margin-right:70px;">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submitModal">เปิดรายการสั่งซื้อ</button>
    </div>



<div id="submitModal" class="multi-step">

</div>






  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/MultiStep.min.js'); ?>"></script>



  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php echo base_url('assets/js/scrolling-nav.js'); ?>"></script>


  <script>
var td = "";
  $(document).ready(function() {
  var temp = {};
    $(document).on('click','.btn-next',function(){

      $('input[class=chboxselect]').each(function () {
        if(this.checked){
          temp[$(this).val()] = {id:$(this).val(),
          name:$(this).data('name'),
          price:$(this).data('price')};
        }
  });
   td = "";
 $.each(temp, function(index, value) {
       td += '<tr>';
       td += '<td>'+value.name+'</td>';
       td += '<td>'+value.price+'</td>';
       td += '<td><input type="text" class="form-control " required></td>';
       td += '<td></td>';
       td += '<td><button>ลบรายการ</button></td>';
       td += '</tr>';
 });
    });

         $('.modal').MultiStep({
             title:'รายการสั่งซื้อ',
           data:[{
             content:` <h5>อัลบัมสินค้า</h5>
                <div class="container">
                 <br>
                 <div class="col-lg-9">

                   <div class="row">
                     <?php

                     $get_p_cats = "select * from product";
                     $run_p_cats = mysqli_query($con,$get_p_cats);

                     while ($row=mysqli_fetch_array($run_p_cats)){

                         $name_product = $row['name_product'];
                         $idProduct = $row['idProduct'];
                         $image_product = $row['image_product'];
                         $price = $row['price'];
                         $amount_product = $row['amount_product'];
                         $detail_product = $row['detail_product'];
                         $idProduct_type = $row['idProduct_type'];


                         echo "<div class='col-md-3'>
                                 <div class='product-list'>
                                 <a href='#'><img class='card-img' src='../$image_product' alt='Card image'></a>
                                 <p>$name_product</p>
                                  <input type='checkbox' class='chboxselect' value='$idProduct' data-name='$name_product' data-price='$price' />
                               </div>
                               </div>";

                     }

                     ?>

                   </div>
                   <!-- /.row -->

                 </div>
                 <!-- /.col-lg-9 -->

               </div>`,

                 label:'เลือกสิ้นค้า'
           },{
             content:`<table class="table table-borderless">
       <thead>
         <tr>
           <th scope="col"></th>
           <th scope="col">ชื่อสินค้า</th>
           <th scope="col">ราคา</th>
           <th scope="col">จำนวน(ชิ้น)</th>
           <th scope="col">ราคารวม</th>
           <th scope="col">ลบรายการ</th>
         </tr>
       </thead>
       <tbody> `+td+` </tbody>
       </table>`,


                label:'รายการสินค้า'

           },{
                 content:``,

             },],
             final:'You can have your own final message',
             modalSize:'lg'
         });
     });

  </script>



</body>

</html>
