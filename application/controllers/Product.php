<?php

class Product extends CI_Controller {


  public function insert(){
$target_dir = "product_images/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
  $data = array(
          'name_product' => $this->input->post('product_title'),
          'image_product' => $target_file,
          'price' => $this->input->post('product_price'),
          'amount_product' => $this->input->post('product_amount'),
          'detail_product' => $this->input->post('product_desc'),
          'idProduct_type' =>   $this->input->post('product_cat'),
          'idMember' =>   $_SESSION['userId'],
  );

  $this->db->insert('product', $data);
  return print("success");

   } else {
       echo "Sorry, there was an error uploading your file.";
          return print("fail");
   }
   return print("fail");

  }

  
  }
