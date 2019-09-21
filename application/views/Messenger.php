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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/MultiStep.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/MultiStep-theme.min.css'); ?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

#bodytable2{

    text-align: center;

}

.tbtext{

    text-align: center;s

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
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v4.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100245044713165"
  theme_color="#0084ff">
      </div>
<!-- <div class="fb-customerchat" page_id="100245044713165"></div>
<! <div class="fb-messengermessageus"
  messenger_app_id="639497196533705"
  page_id="100245044713165"
  color="<blue | white>"
  size="<standard | large | xlarge>">
</div> -->
<!-- <br> -->

    <div class="nav nav-pills justify-content-end" role="group" aria-label="First group" style="margin-right:70px;">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submitModal" id="btnmodal">
        <i class="material-icons" style="font-size:15px">monetization_on</i> เปิดรายการสั่งซื้อ</button>
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

  function check()
  	{
  		var elem = document.getElementById('test_txt').value;
  		if(!elem.match(/^([0-9])+$/i))
  		{
  			alert("กรอกได้เฉพาะตัวเลขเท่านั้น");
  			document.getElementById('test_txt').value = "";
  		}
  	}

    function check()
    	{
    		var elem = document.getElementById('inputName').value;
    		if(!elem.match(/^([A-Za-zก-ฮ])+$/i))
    		{
    			alert("กรอกได้เฉพาะตัวอักษรเท่านั้น");
    			document.getElementById('inputName').value = "";
    		}
    	}




  $(document).ready(function() {
var pages = 0;


$(document).on('click','#btnmodal',function(){
   pages = 0;


})


    $(document).on('click','.btndel',function(){
        let id =  $(this).data('id');
let s=   $('input[class=chboxselect][id=ch_'+id+']').prop('checked', false);
temp= {};

$('input[class=chboxselect]').each(function () {
  if(this.checked){
    temp[$(this).val()] = {id:$(this).val(),
    img:$(this).data('img'),
    name:$(this).data('name'),
    price:$(this).data('price')};
  }
});
$('#bodytable').empty();

$.each(temp, function(index, value) {
var td = "";
 td += '<tr>';
 td += "<td><img  src='../"+value.img+"' alt='Card image' width='50px' ></td>";

 td += '<td>'+value.name+'</td>';
 td += '<td>'+value.price+'฿</td>';
 td += '<td><input type="text" class="form-control number_input" data-price="'+value.price+'" data-id="'+value.id+'" required></td>';
 td += '<td id="sum_'+value.id+'"></td>';
 td += '<td><button data-id="'+value.id+'" class="btndel btn btn-danger btn-xs">ลบ</button></td>';
 td += '</tr>';
 $('#bodytable').append(td);
});



    });





    $(document).on('change','.number_input',function(){


     let price =  $(this).data('price');
     price = price*$(this).val();
    $('#sum_'+$(this).data('id')).html(price)

    });
    $(document).on('click',".btn-prev",function(){
      pages = pages-1;


})

  var temp = {};
    $(document).on('click',".btn-next",function(){

      if($(this).html()==="Finish"){
        $('#pages4').empty();

        temp2= {};
      $('input[class=chboxselect]').each(function () {

        if(this.checked){
          temp2[$(this).val()] = {id:$(this).val(),
          img:$(this).data('img'),
          name:$(this).data('name'),
          price:$(this).data('price')};
        }
      });
    var text = "";
    text += `<table class="table table-sm table-warning tbtext">
    <thead>
    <tr>
    <th scope="col"></th>
    <th scope="col">ชื่อสินค้า</th>
    <th scope="col">จำนวนสินค้า</th>
    <th scope="col">ราคา</th>
    <th scope="col">ราคารวม</th>
    </tr>
    </thead>
    <tbody id='bodytable2'>  </tbody>
    </table>`;

  $('#pages4').empty();
  $('#pages4').append(text);

  var allsum = 0;


$.each(temp2, function(index, value) {

  allsum = allsum + parseInt($('#sum_'+value.id+'').html());

  text = '';

  text += '<tr>';
  text += "<td>  <img  src='../"+value.img+"' alt='Card image' width='50px'class='img-o' >  </td>";
  text += '<td>'  +value.name+  '</td>';
  text += '<td>'  +$('#amount_'+value.id+'').val()+  '</td>';
  text += '<td>'  +value.price+'</td>';
  text += '<td>'  +$('#sum_'+value.id+'').html()+  '</td>';
  text += '</tr>';


  $('#bodytable2').append(text);





})
text = '';

text += '<tr>';
text += "<td></td>";
text += '<td></td>';
text += '<td></td>';
text += '<td>รวม</td>';
text += '<td id="sumall">'+allsum+'</td>';
text += '</tr>';






$('#bodytable2').append(text);
var name = `${$('#inputName').val()}`;

text = '';

text += `<form class='form-inline'>
            <div class='form-group mb-2'>
              <lable for='staticname' style='margin-left:20px;'>ชื่อ-นามสกุล(ลูกค้า): </lable>
              <input type='text' class='form-control'value='${$('#inputName').val()}' disabled>
            </div>
            <div class='form-group mb-2'>
              <lable for='staticno' style='margin-left:20px;'>เบอร์โทรศัพท์: </lable>
              <input type='text' class='form-control'value='${$('#inputNo').val()}' disabled>
            </div>
            <div class='form-group'>
              <lable for='staticship' style='margin-left:20px;'>ที่อยู่ในการจัดส่ง: </lable>
              <textarea class='form-control' row='3' style='margin-left:22px;'  disabled>${$('#inputAddress').val()}</textarea>
            </div>
            <div class='form-group'>
              <lable for='staticship' style='margin-left:40px;'>บริษัทที่จัดส่ง: </lable>
              <input type='text' class='form-control'value='${$( "#product_cat option:selected" ).text()}' disabled>
            </div>
        </form>`
// text += "<p class='txt-no' style='margin-left:20px;'>เบอร์โทรศัพท์</p>"

// text += `${$('#inputName').val()}`;

// text += `${$('#inputName').val()}<br>`;
// text +=  `${$( "#product_cat option:selected" ).text()}<br>`;
// text += `${$('#inputAddress').val()}<br>`
// text += `${$('#inputNo').val()}<br>`

$('#pages4').append(text);



          // $('#pages4').html(text);

          }


if($(this).html()==="Next"){
  pages = pages+1;

if(pages==1){
  alert(1)

  temp= {};
$('input[class=chboxselect]').each(function () {

  if(this.checked){
    temp[$(this).val()] = {id:$(this).val(),
    img:$(this).data('img'),
    name:$(this).data('name'),
    price:$(this).data('price')};
  }
});
$('#bodytable').empty();

$.each(temp, function(index, value) {
var td = "";
 td += '<tr>';
 td += "<td><img  src='../"+value.img+"' alt='Card image' width='50px' ></td>";

 td += '<td>'+value.name+'</td>';
 td += '<td>'+value.price+'฿</td>';
 td += '<td><input type="text" id="amount_'+value.id+'" class="form-control number_input"  data-price="'+value.price+'" data-id="'+value.id+'" required></td>';
 td += '<td id="sum_'+value.id+'"></td>';
 td += '<td><button data-id="'+value.id+'" class="btndel  btn btn-danger btn-xs">ลบ</button></td>';
 td += '</tr>';
 $('#bodytable').append(td);
});

}else if(pages==2){

  alert(2)
}else if(pages==3){

  var name =  $('#inputName').val();
  var no =  $('#inputNo').val();
  var address = $('#inputAddress').val();
  var procat = $( "#product_cat option:selected" ).val();


  var temp3= {};
      var data = [];
  $('input[class=chboxselect]').each(function () {

    if(this.checked){
      // temp3[$(this).val()] = {
      // id:$(this).val(),
      // amount:$('#amount_'+$(this).val()+'').val(),
      // price:$('#sum_'+$(this).val()+'').html(),
      // }

      data.push(
        {
      id:$(this).val(),
      amount:$('#amount_'+$(this).val()+'').val(),
      price:$('#sum_'+$(this).val()+'').html(),
      });

    }



  });


  $.ajax({
         url: '<?php echo base_url('Product/insert_order'); ?>',
         type: 'post',
         dataType: 'html',
         data: {
           name:name,
           no:no,
           address:address,
           procat:procat,
           sumall:$('#sumall').html(),
           data:data
         },
       }).done(function(response) {
         if(response=="เปิดรายการสั่งซื้อเสร็จสิ้น"){

         window.location.href = "<?php echo base_url('Main/Messenger'); ?>";

         }
          alert(response);

       });




}




}

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
                                 <p><input type='checkbox' class='chboxselect' id='ch_$idProduct' value='$idProduct' data-name='$name_product' data-price='$price' data-img='$image_product' />
                                 <br>$name_product
                                 </p>


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
           <th scope="col" style='margin-left:5px;'>ลบรายการ</th>
         </tr>
       </thead>
       <tbody id='bodytable'>  </tbody>
       </table>`,


                label:'รายการสินค้า'

           },{
                 content:`<form>
  <div class='form-row'>
    <div class='form-group col-md-6'>
      <label for='inputName'>ชื่อ-นามสกุล(ลูกค้า)</label>
      <input type='text' class='form-control' name="inputName" id="inputName" value=""/  placeholder='ชื่อ-นามสกุล'>
    </div>
    <div class='form-group col-md-6'>
    <label for='inputShip'>บริษัทจัดส่ง</label>
    <select id="product_cat" class="form-control"><!-- form-control Begin -->
      <?php

      $get_p_cats = "select * from delivery_company";
      $run_p_cats = mysqli_query($con,$get_p_cats);

      while ($row_p_cats=mysqli_fetch_array($run_p_cats)){

          $p_cat_id = $row_p_cats['idDelivery_company'];
          $p_cat_title = $row_p_cats['name_company'];

          echo "

          <option value='$p_cat_id'> $p_cat_title </option>

          ";

      }

      ?>

      </select><!-- form-control Finish -->

    </div>
  </div>
  <div class='form-group'>
    <label for='inputAddress'>ที่อยู่ในการจัดส่ง</label>
    <input type='text' class='form-control' id='inputAddress' placeholder='ที่อยู่ในการจัดส่ง'>
  </div>
  <div class='form-row'>
    <div class='form-group col-md-6'>
      <label for='inputNo'>เบอร์ติดต่อ</label>
      <input type='text' class='form-control' id='inputNo' placeholder='เบอร์โทรศัพท์'>
    </div>
  </div>
  </form>`,

  label:'กรอกข้อมูล'

             },],
             final:'<div id="pages4"> </div>',
             modalSize:'lg'
         });
     });

  </script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>


</body>

</html>
