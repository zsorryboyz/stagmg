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

  public function delete(){

$this->db->delete('product', array('idProduct' =>  $this->input->post('id')));
return print("success");



  }

public function view_Editproduct(){



$query = $this->db->get_where('product', array('idProduct' => $this->input->get('id')));

foreach ($query->result() as $row)
{
      $data["id"] = $row->idProduct;
      $data["name_product"] = $row->name_product;
      $data["product_type"] = $row->idProduct_type;
      $data["Product_Image"] = $row->image_product;
      $data["product_price"] = $row->price;
      $data["product_amount"] = $row->amount_product;
      $data["product_desc"] = $row->detail_product;

}


  	$this->load->view('Editproduct',$data );

}

public function Edit_product(){


$target_dir = "product_images/";

if(isset($_FILES["img"]["name"])){
  $target_file = $target_dir . basename($_FILES["img"]["name"]);
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    $data = array(
            'name_product' => $this->input->post('product_title'),
            'price' => $this->input->post('product_price'),
            'image_product' => $target_file,
            'amount_product' => $this->input->post('product_amount'),
            'detail_product' => $this->input->post('product_desc'),
            'idProduct_type' =>   $this->input->post('product_cat'),
            'idMember' =>   $_SESSION['userId'],
    );

  }else{

    echo "Sorry, there was an error uploading your file.";
    return print("fail");
  }

}else{

  $data = array(

          'name_product' => $this->input->post('product_title'),
          'price' => $this->input->post('product_price'),
          'amount_product' => $this->input->post('product_amount'),
          'detail_product' => $this->input->post('product_desc'),
          'idProduct_type' =>   $this->input->post('product_cat'),
          'idMember' =>   $_SESSION['userId'],
  );
}




  $this->db->where('idProduct', $this->input->post('idProduct'));
  $this->db->update('product', $data);
  return print("success");

   }


   public function Product_store(){


     $data  = array(

       'amount_product' => $this->input->post('sum'),

     );

    $this->db->where('idProduct',$this->input->post('id'));
    $this->db->update('product', $data);
    return print("success");
   }

   public function  insert_order(){


     date_default_timezone_set('asia/bangkok');
     $data  = array(
       'orderdate' => date("Y-m-d H:i:s"),
       'name_customer' => $this->input->post('name'),
       'Tel_customer' => $this->input->post('no'),
       'address_customer' => $this->input->post('address'),
       'idDelivery_company' => $this->input->post('procat'),
       'idMember' => $_SESSION['userId'],
       'Price_all' => $this->input->post('sumall'),
       'status_order' => "ยังไม่จ่าย",

     );


$this->db->insert('order', $data);
$insert_id = $this->db->insert_id();


foreach ($this->input->post('data') as $key => $value) {
  // code...
  $data  = array(
     'idProduct' => $value['id'],
     'amount' => $value['amount'],
     'price' => $value['price'],
     'idOrder' => $insert_id,
);
$this->db->insert('order_detail', $data);

}

return print("เปิดรายการสั่งซื้อเสร็จสิ้น");

   }

   public function  update_order(){

foreach ($this->input->post('data') as $key => $value) {

     if($value['status']=="ยังไม่จ่าย"){


       $query = $this->db->get_where('order_detail', array('idOrder' => $value['orderid']));


       foreach ($query->result() as $row)
       {
               $amount =  $row->amount;
               $idProduct = $row->idProduct;

               $query2 = $this->db->get_where('product', array('idProduct' => $idProduct));

               foreach ($query2->result() as $row2)
               {
                    $amount =  $row2->amount_product-$amount;
               }

               $data = array(

                 'amount_product' => $amount,
               );


               $this->db->where('idProduct',$row->idProduct);
               $this->db->update('product', $data);

       }



       $data = array(


         'status_order' => "โอนแล้ว",
       );

     }else if($value['status']=="โอนแล้ว"){

       date_default_timezone_set('asia/bangkok');
       $data = array(


         'shippedDate' => date("Y-m-d H:i:s"),
         'status_order' => "ส่งแล้ว",
       );


     }

     $this->db->where('idOrder',$value['orderid']);
     $this->db->update('order', $data);
   }


      return print("success");
   }

   public function  delete_order(){


    $this->db->delete('order', array('idOrder' => $this->input->post('id')));
     return print("ลบรายการสั่งซื้อเสร็จสิ้น!");

    }

   

}
