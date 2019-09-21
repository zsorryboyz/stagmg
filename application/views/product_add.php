<!DOCTYPE html>

<?php

$con = mysqli_connect("localhost","root","","project");
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
  element.value = element.value.replace(/[^a-zA-Z]+/, '');
};

</script>


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
        <a href="orderstore" class="list-group-item list-group-item-action bg-light">สินค้าคงคลัง</a>
        <a class="top text-center">การส่งสินค้า</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">การจัดส่งสินค้า</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">ประวัติการส่ง</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" >
      <div class="container-fluid">
        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <ol class="breadcrumb"><!-- breadcrumb Begin -->

                    <li class="active"><!-- active Begin -->

                        <i class="fa fa-dashboard"></i>/ Insert Products

                    </li><!-- active Finish -->

                </ol><!-- breadcrumb Finish -->

            </div><!-- col-lg-12 Finish -->

        </div><!-- row Finish -->

        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <div class="panel panel-default"><!-- panel panel-default Begin -->

                   <div class="panel-heading"><!-- panel-heading Begin -->

                       <h3 class="panel-title"><!-- panel-title Begin -->

                           <i class="fa fa-money fa-fw"></i> Insert Product

                       </h3><!-- panel-title Finish -->

                   </div> <!-- panel-heading Finish -->

                   <div class="panel-body"><!-- panel-body Begin -->

                       <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                           <div class="form-group"><!-- form-group Begin -->

                              <label class="col-md-3 control-label"> Product Name </label>

                              <div class="col-md-6"><!-- col-md-6 Begin -->

                                  <input name="product_title" type="text" name="text_key" onkeyup="validate();"
                                   id="product_title" class="form-control" required>

                              </div><!-- col-md-6 Finish -->

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                              <label class="col-md-3 control-label"> Product Type </label>

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

                                    <label class="col-md-3 control-label"> Product Image </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <input id="product_img1" type="file" class="form-control" required>

                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->

                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"> Product Price </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <input id="product_price" type="text" name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/
                                        class="form-control" required>

                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->
                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"> Product Amount </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <input id="product_Amount" type="text " name="text_plain" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/
                                        class="form-control" required>

                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->

                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"> Product Details </label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <textarea id="product_desc" cols="19" rows="6" class="form-control"></textarea>

                                    </div><!-- col-md-6 Finish -->

                                 </div><!-- form-group Finish -->
                                 <div class="form-group"><!-- form-group Begin -->

                                    <label class="col-md-3 control-label"></label>

                                    <div class="col-md-6"><!-- col-md-6 Begin -->

                                        <input name="submit" value="Insert Product" id="button_insert" type="button" class="btn btn-primary form-control">

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
