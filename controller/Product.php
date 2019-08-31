<?php
$con = mysqli_connect("localhost","root","","project");
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
mysqli_set_charset($con,"utf8");



$name_product = $_POST['product_title'];
$image_product =  $_FILES['img'];
$price = $_POST['product_price'];
$amount_product = $_POST['product_amount'];
$detail_product = $_POST['product_desc'];
$idProduct_type = $_POST['product_cat'];

$product_img = $_FILES['img']['name'];

$temp_name = $_FILES['img']['tmp_name'];

move_uploaded_file($temp_name,"../product_images/$product_img");

$sql = "INSERT INTO `product`( `name_product`, `image_product`, `price`, `amount_product`, `detail_product`, `idProduct_type`, `idMember`)
 VALUES ('$name_product', 'product_images/$product_img', '$price','$amount_product','$detail_product','$idProduct_type',1) ";
 mysqli_query($con,$sql);


?>
