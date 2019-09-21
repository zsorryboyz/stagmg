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
  <link href="<?php echo base_url('assets/css/scrolling-nav.css'); ?>" rel="stylesheet">



</head>

<body id="page-top" class="">

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

  <!-- <div class="container">
    <div class="row">
      <div class="pic col-md-12 text-center">
        <img src="<?php echo base_url('assets/img/ll.jpg'); ?>" width="100">
        <p class="welcomehome">ยินดีต้อนรับเข้าสู่เว็บไซต์</p>
      </div>
    </div>
  </div> -->


  <div class="black content-wrapper" style="" align="center">
          <div class="card mb-3" style="height:auto; width: auto;margin-top: 10px; margin-right: 5px;margin-left: 5px;"align="center">
          	<div class="card-body" align="center"style="">
          		<div class="row">
          			<div class="bg-light col-md-2" >
          				<div class="row"style="height:auto; width: auto; padding: 5px" >
                  			<div class="col-md-11" align="center">
                  				<img class="rounded-circle" src="<?php echo $_SESSION['picture']; ?>" width="150">
                          <h4><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']  ?></h4>
                  			</div>
                  		</div>
                      <div class="row"style="height:auto; width: auto;padding: 5px">
                  			<div class="col-md-11" >
                  				<a href="<?php echo base_url('Users/Logout'); ?>" class="btn btn-outline-info btn-sm btn-block" role="button" aria-pressed="true">ออกจากระบบ</a>
                          <br>
                  			</div>
                  		</div>
                      <br>
                      <div class="row"style="height:auto; width: auto;padding: 5px">
                  			<div class="col-md-11" >
                          <a class="top-menuras">ทางลัด</a>
                          <div class="dropdown-divider text-left"></div>
                          <a class="dropdown-item text-warning" href="Product">อัลบัมสินค้า</a>
                          <a class="dropdown-item text-danger" href="#">จัดการการส่งสินค้า</a>
                          <a class="dropdown-item" href="#">ประวัติการส่ง</a>
                          <div class="dropdown-divider"></div>
                  			</div>
                  		</div>
                   	</div>
                  	<div class="col-md-8">
                  		<div class="row text-center"style="background height:auto; width: auto;">
                  			<div  class="bg-info  col-md-2"  style="margin-left: 80px;" >
         							       <p><a href="#" class="text-white">สินค้าทั้งหมด   (ชิ้น)</a>
                              <br>
                              <h4>
                                <?php

                                $get_preorder = "SELECT COUNT(idProduct) FROM `product`";
                                $run_preorder = mysqli_query($con,$get_preorder);

                                while ($row=mysqli_fetch_array($run_preorder)){

                                    $COUNTPro = $row['COUNT(idProduct)'];


                                    echo "<h4 class='text-light'>$COUNTPro</h4>";
                                }








                                 ?>
                              </h4>
                             </p>
                  			</div>

                  			<div class="bg-warning col-md-4"  style="margin-left: 80px;" >
                  			     <p><a href="#" class="text-white">รายการที่รอจัดส่ง</a><br>

                               <h4>
                                 <?php

                                 $get_preorder = "SELECT COUNT(idOrder) FROM `order` WHERE status_order = 'โอนแล้ว'";
                                 $run_preorder = mysqli_query($con,$get_preorder);

                                 while ($row=mysqli_fetch_array($run_preorder)){

                                     $COUNT = $row['COUNT(idOrder)'];


                                     echo "<h4 class='text-light'>$COUNT รายการ</h4>";
                                 }








                                  ?>
                               </h4></p>
                  			</div>

                   			<div class="bg-danger col-md-2" style="margin-left: 80px" >
                   		       <p><a href="#" class="text-white">ยอดขาย</a>

                               <h4>
                                 <?php

                                 $get_preorder = "SELECT SUM(`Price_all`) FROM `order`";
                                 $run_preorder = mysqli_query($con,$get_preorder);

                                 while ($row=mysqli_fetch_array($run_preorder)){

                                     $SUMP = $row['SUM(`Price_all`)'];


                                     echo "<h4 class='text-light'>$SUMP ฿</h4>";
                                 }








                                  ?>
                               </h4>




                             </p>

                  			</div>
                  		</div>
                      <br>
                      <br>
                  		<div class="row"style="height:auto; width: auto;" >
                  			<div class=" col-md-12" style="padding: 5px" >
                              <h5 class="text-left" style="margin-left:50px">แจ้งเตือน</h5>

                  			</div>
                  		</div>
                 		</div>
                  	<div class="bg-light col-md-2">
                      <br>
                            <h5>ติดต่อผู้ดูแลระบบ</h5>
                      <br>
                      <form>
                            <div class="form-group text-left">
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">ประเภทคำร้องขอ</label>
                              <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <label for="exampleInputEmail1">เรื่องที่ร้องขอ</label>
                            <input type="email" class="form-control" id="exampleInputext" aria-describedby="emailHelp" placeholder="คำร้องขอ">
                            <small id="TextHelp" class="form-text text-muted">ผู้ดูแลระบบจะทำการแก้ไขอย่างเร่งด่วน ขอบคุณครับ!!</small>
                            </div>
                            <button type="submit" class="btn btn-outline-success">ส่งข้อความ</button>
                      </form>
                            </div>
                        </div>
                  	</div>
            		</div>
              </div>
          </div>

  </div>







  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php echo base_url('assets/js/scrolling-nav.js'); ?>"></script>

</body>

</html>
