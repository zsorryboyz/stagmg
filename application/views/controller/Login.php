<?php
$con = mysqli_connect("localhost","root","","project");
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
mysqli_set_charset($con,"utf8");



$first_name = $_POST['first_name'];
$last_name =  $_POST['last_name'];
$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];
$picture = $_POST['picture'];

echo "asdasd";
// $sql = "INSERT INTO `product`( `name_product`, `image_product`, `price`, `amount_product`, `detail_product`, `idProduct_type`, `idMember`)
//  VALUES ('$name_product', 'product_images/$product_img', '$price','$amount_product','$detail_product','$idProduct_type',1) ";
//  mysqli_query($con,$sql);


?>
