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
  <meta http-equiv="Content-Type"
    content="text/html; charset=utf-8"
    />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STAQMG</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

<script>

function validate() {
  var element = document.getElementById('product_title');
  element.value = element.value.replace(/[^_a-zA-Z]+/, '');
};

</script>


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


  <div class="d-flex" id="wrapper" >

    <!-- Sidebar -->

    <div class="border-right" id="sidebar-wrapper" style="margin-top:10px">
      <div class="list-group list-group-flush">
        <!-- <a class="top text-center">สินค้า</a> -->
        <a href="Product" class="list-group-item list-group-item-action ">อัลบัมสินค้า</a>
        <a href="orderstore" class="list-group-item list-group-item-action ">สินค้าคงคลัง</a>
        <!-- <a class="top text-center">การส่งสินค้า</a> -->
        <a href="#" class="list-group-item list-group-item-action ">การจัดส่งสินค้า</a>
        <a href="#" class="list-group-item list-group-item-action ">ประวัติการส่ง</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" >
      <div class="container-fluid">
        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <ol class="breadcrumb" style="margin-top:10px"><!-- breadcrumb Begin -->

                    <li class="active"><!-- active Begin -->

                        <i class="fa fa-dashboard"></i>/ เพิ่มสินค้า

                    </li><!-- active Finish -->

                </ol><!-- breadcrumb Finish -->

            </div><!-- col-lg-12 Finish -->

        </div><!-- row Finish -->

        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <div class="panel panel-default"><!-- panel panel-default Begin -->

                   <div class="panel-heading"><!-- panel-heading Begin -->

                       <h3 class="panel-title"><!-- panel-title Begin -->

                           <i class="fa fa-money fa-fw"></i> เพิ่มสินค้า

                       </h3><!-- panel-title Finish -->

                   </div> <!-- panel-heading Finish -->

                   <div class="panel-body"><!-- panel-body Begin -->

                       <form method="post" class="needs-validation" enctype="multipart/form-data" novalidate><!-- form-horizontal Begin -->

                           <div class="form-group"><!-- form-group Begin -->

                              <label class="col-md-3 control-label"> ชื่อสินค้า </label>

                              <div class="col-md-6"><!-- col-md-6 Begin -->

                                  <input name="product_title" type="text" name="text_key" onkeyup="validate();"
                                   id="product_title" class="form-control" required>
                                   <div class="invalid-feedback">
                                      กรุณากรอกชื่อสินค้า!
                                   </div>

                              </div><!-- col-md-6 Finish -->

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                              <label class="col-md-3 control-label"> ประเภทสินค้า </label>

                              <div class="col-md-6"><!-- col-md-6 Begin -->

                                  <select id="product_cat" class="form-control"><!-- form-control Begin -->
                                    <?php

                                    $get_p_cats = "select * from product_type";
                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                    while ($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                        $p_cat_id = $row_p_cats['idProduct_type'];
                                        $p_cat_title = $row_p_cats['name_type'];

                                        echo "

                                        <option value='$p_cat_id'> $p_cat_title </option>

                                        ";

                                    }

                                    ?>

                                    </select><!-- form-control Finish -->

                                  </div><!-- col-md-6 Finish -->

                               </div><!-- form-group Finish -->

                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"> รูปสินค้า </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <input id="product_img1" type="file" class="form-control" required>
                                        <div class="invalid-feedback">
                                            กรุณาเพิ่มรูปสินค้า!
                                        </div>
                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->

                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"> ราคาสินค้า </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <input id="product_price" type="text" name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/
                                        class="form-control" required>
                                        <div class="invalid-feedback">
                                            กรุณากรอกราคาสินค้า!
                                        </div>

                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->
                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"> จำนวนสินค้า </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <input id="product_Amount" type="text " name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/
                                        class="form-control" required>
                                        <div class="invalid-feedback">
                                            กรุณากรอกกรอกจำนวนสินค้า!
                                        </div>

                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->

                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"> รายละเอียดสินค้า </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <textarea id="product_desc" cols="19" rows="6" class="form-control" required></textarea>
                                        <div class="invalid-feedback">
                                            กรุณากรอกรายละเอียดสินค้า!
                                        </div>
                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->
                                 <div class="form-group"><!-- form-group Begin -->

                                  

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <button name="submit" value="Insert Product" id="button_insert" type="submit" class="btn btn-primary form-control">เพิ่มสินค้า</button>

                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->

                             </form><!-- form-horizontal Finish -->

                         </div><!-- panel-body Finish -->

                      </div><!-- canel panel-default Finish -->

                  </div><!-- col-lg-12 Finish -->
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Menu Toggle Script -->
  <script>

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();






  $(document).ready(function(){
    $("#button_insert").click(function(){

      var formData = new FormData();
      var img = $('#product_img1');

      formData.append('img', img[0].files[0]);
      formData.append('product_title', $('#product_title').val());
      formData.append('product_price', $('#product_price').val());
      formData.append('product_desc', $('#product_desc').val());
      formData.append('product_cat', $('#product_cat').val());
      formData.append('product_amount', $('#product_Amount').val());




      $.ajax({
             url: '<?php echo base_url('Product/insert'); ?>',
             enctype: 'multipart/form-data',
             type: 'post',
             dataType: 'text',
             data: formData,
              processData: false,
               contentType: false,
           }).done(function(response) {
             if(response=="success"){

             window.location.href = "<?php echo base_url('Main/product'); ?>";
             }

               alert(response);
           });


     });

});


    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

</body>

</html>
