<!DOCTYPE html>

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
<html lang="en">



<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STAQMG</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/scrolling-nav.css'); ?>" rel="stylesheet">

  <style>
  * {
    box-sizing: border-box;
  }

  #myInput {
    background-image: url('/css/searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }

  #myTable {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    font-size: 18px;
  }

  #myTable th, #myTable td {
    text-align: left;
    padding: 12px;
  }

  #myTable tr {
    border-bottom: 1px solid #ddd;
  }

  #myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
  }
  </style>

</head>

<body id="page-top">

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
<br>
    <br>

    <div class="nav nav-pills justify-content-end" role="group" aria-label="First group">
      <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal" style="margin-right:20px;">
        <i class="material-icons" style="font-size:15px">monetization_on</i> ยืนยันชำระเงิน</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal11" style="margin-right:95px;">
          <i class="material-icons"  style="font-size:15px">monetization_on</i> ลบรายการ</button>
    </div>

    <!-- Modal Confirm -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ยืนยันการชำระเงิน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">คุณต้องการยืนยันการชำระเงินหรือไม่?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" id="sumbmit" class="btn btn-primary">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal delete_order -->
<div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ลบรายการสั่งซื้อสินค้า</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h5 class="text-center">คุณต้องการลบรายการสั่งซื้อหรือไม่?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" id="sumbmitdel" class="btn btn-primary">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>





    <br>

<!-- search -->
  <form class="form-inline">
    <input class="form-control mr-sm-2 search-order" id="search-order"  placeholder="่เลขที่ออเดอร์..." aria-label="Search"style="margin-left: 190px;">

    <div class="btn-group mr-2" role="group" aria-label="First group" style="margin-left: 690px;">
      <button type="button" class="btn btn-info"style="margin-left: 10px;">ทั้งหมด</button>
      <button type="button" class="btn btn-warning text-light"style="margin-left: 10px;">ยังไม่จ่าย</button>
      <button type="button" class="btn btn-danger"style="margin-left: 10px;">โอนแล้ว</button>
      <button type="button" class="btn btn-success"style="margin-left: 10px;">ส่งแล้ว</button>
    </div>


<!-- table -->
<div class="container">

    <div ="col-md-12">

  <br>
  <table  id="tableorder" class="table table-hover table-striped table-sm">
    <thead>
      <tr class='bg-info text-light text-center'>
        <th></th>
        <th>เลขที่ออเดอร์</th>
        <th>วันเปิดออเดอร์</th>
        <th>ชื่อผู้สั่งสินค้า</th>
        <th>จำนวนเงินทั้งหมด</th>
        <th>สถานะ</th>
        <th>ลบรายการ</th>        
      </tr>
    </thead>
    <tbody id = "table-order">
      <?php

          $getOrder = "select * from `order`";
          $runOrder = mysqli_query($con,$getOrder);
          while ($rowOrder=mysqli_fetch_array($runOrder)){

              $Orderid = $rowOrder['idOrder'];
              $DateOrder = $rowOrder['orderdate'];
              $nameCus = $rowOrder['name_customer'];
              $Priceall  = $rowOrder['Price_all'];
              $status  = $rowOrder['status_order'];

              echo "

              <tr>

                <td scope='row' class='text-center'><input type='checkbox' class='orderch' id='cho_$Orderid' value='$Orderid' data-status='$status' data-id='$Orderid'  /></td>
                <td class='text-center numorder'>$Orderid</td>
                <td class='text-center'>$DateOrder</td>
                <td class='text-center'>$nameCus</td>
                <td class='text-center'>$Priceall .00 บาท</td>
                

                ";


                if($status=="ยังไม่จ่าย"){

                  echo "<td class='text-warning text-center'>$status</td>";
                
                }else if($status=="โอนแล้ว"){

                  echo "<td class='text-danger text-center'>$status</td>";

                }else if($status=="ส่งแล้ว"){

                  echo "<td class='text-success text-center'>$status</td>";

                }

                echo "<td class='text-center'><a><span data-id='$Orderid' class='btn btn-danger mx-auto  Delor'>ลบ</span></a></td></tr>";

            }




       ?>

    </tbody>
  </table>

</div>
</div>

</form>









<script>

  $(document).ready(function(){


    $("#search-order").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table-order tr").filter(function() {
     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

    });
    });


    $("#sumbmit").click(function(){



      var or1 = [];

      $('input[class=orderch]').each(function () {

        if(this.checked){
          or1.push({

            orderid:$(this).data('id'),
            status:$(this).data('status'),




          });
            
        }
        
        });

        
        $.ajax({
               url: '<?php echo base_url('Product/update_order'); ?>',
               type: 'post',
               dataType: 'html',
               data: {data:or1},
             }).done(function(response) {
               if(response=="success"){

               window.location.href = "<?php echo base_url('Main/order'); ?>";

               }
                alert(response);

             });


      });


      $(".Delor").click(function(){


        // alert($(this).data('id'))

        $.ajax({
               url: '<?php echo base_url('Product/delete_order'); ?>',
               type: 'post',
               dataType: 'html',
               data: {id:$(this).data('id')},
             }).done(function(response) {
               if(response=="ลบรายการสั่งซื้อเสร็จสิ้น!"){

               window.location.href = "<?php echo base_url('Main/order'); ?>";

               }
                alert(response);

             });


      });



    });










</script>




  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php echo base_url('assets/js/scrolling-nav.js'); ?>"></script>

</body>

</html>
