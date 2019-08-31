<?php

class Product_model extends CI_Model
{

    function findAll()
    {
        return $this->db->get('product')->result();
    }

    function delete($id)
    {
        $this->db->delete('product', array(
            'idProduct' => $id
        ));
    }

}






 ?>
