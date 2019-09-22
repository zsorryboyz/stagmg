<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// $con = mysqli_connect("localhost","root","","project");
// header('Content-Type: text/html; charset=utf-8');
// ini_set('default_charset', 'utf-8');
// mysqli_set_charset($con,"utf8");
header('Access-Control-Allow-Origin: *');

class Users extends CI_Controller {

	public function Login()
	{

 $this->db->select('oauth_uid,idMember');
 $query= $this->db->where(array('oauth_uid' => $this->input->post('id')));
 $query=$this->db->get('member');
 $num_rows=$query->num_rows();
 $result=$query->result();

if($num_rows==0){


  date_default_timezone_set('asia/bangkok');
  $date =  date('d-m-y h:i:s');
  $data = array(
          'oauth_uid' => $this->input->post('id'),
          'first_name' => $this->input->post('first_name'),
          'last_name' => $this->input->post('last_name'),
          'email' => $this->input->post('email'),
          'picture' => $this->input->post('picture'),
          'created' =>   $date,
          'modified' =>   $date,
  );

  $this->db->insert('member', $data);
  $insert_id = $this->db->insert_id();
  $this->saveSession($insert_id);
}else{
  foreach ($query->result() as $row)
  {
          $this->saveSession($row->idMember);
  }
}


return print("success");

	}

  public function Logout()
	{
    $userdata = array('oauth_uid', 'last_name', 'first_name','email','picture','userId','type');
    $this->session->unset_userdata($userdata);
    	$this->load->view('index');
  }

  public function saveSession($id){
    $newdata = array(
      'type' => 'member',
      'oauth_uid' => $this->input->post('id'),
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'email' => $this->input->post('email'),
      'picture' => $this->input->post('picture'),
      'userId' => $id
       );

 $this->session->set_userdata($newdata);
  }

}
