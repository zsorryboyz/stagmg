<?php
session_start();
$con = mysqli_connect("localhost","root","","project");
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
mysqli_set_charset($con,"utf8");


$id = $_POST['id'];

$sql = "SELECT * from  `member` WHERE `oauth_uid` = '$id'";
$result = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);

if($rowcount>=1){
  while ($row = mysqli_fetch_assoc($result))
  {
      saveSession($row['idMember']);
  }

  return print "Success";

}else{

  $first_name = $_POST['first_name'];
  $last_name =  $_POST['last_name'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $id = $_POST['id'];
  $picture = $_POST['picture'];

  date_default_timezone_set('asia/bangkok');
  $date =  date('d-m-y h:i:s');

  $sql =  "INSERT INTO `member`( `oauth_uid`, `first_name`, `last_name`, `email`, `picture`, `created`, `modified`)
  VALUES ('$id','$first_name','$last_name','$email','$picture','$date','$date')";

   mysqli_query($con,$sql);
  $last_id = $con->insert_id;
  saveSession($last_id);

  return print "Success";
}


function saveSession(int $iduser){
  $_SESSION["type"] = 'member';
  $_SESSION["firstname"] = $_POST['first_name'];
  $_SESSION["last_name"] = $_POST['last_name'];
  $_SESSION["name"] = $_POST['name'];
  $_SESSION["email"] = $_POST['email'];
  $_SESSION["id"] = $_POST['id'];
  $_SESSION["picture"] = $_POST['picture'];
  $_SESSION["iduser"] = $iduser;

}



?>
