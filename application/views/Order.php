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
    <br>
<!-- search -->
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="่เลขที่ออเดอร์..." aria-label="Search"style="margin-left: 75px;">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหารหัสบิล</button>
    <div class="btn-group mr-2" role="group" aria-label="First group" style="margin-left: 700px;">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ทั้งหมด</button>
      <button type="button" class="btn btn-info"style="margin-left: 10px;">ยังไม่จ่าย</button>
      <button type="button" class="btn btn-danger"style="margin-left: 10px;">จ่ายแล้ว</button>
      <button type="button" class="btn btn-warning"style="margin-left: 10px;">ส่งแล้ว</button>
    </div>
  </form>

<!-- table -->
<div class="container">

  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>เลขที่ออเดอร์</th>
        <th>วันเปิดออเดอร์</th>
        <th>ชื่อผู้สั่งสินค้า</th>
        <th>จำนวนเงินทั้งหมด</th>
        <th>สถานะ</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@mail.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@greatstuff.com</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
      </tr>
    </tbody>
  </table>

</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
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
