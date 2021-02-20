<?php

$severname ="localhost";
$username ="root";
$password ="";
$dbname ="online_voting";

$conn = mysqli_connect($severname,$username,$password,$dbname);
if($conn){
  //echo "Connection OK";
}
else{
  echo "Connection Failed".mysqli_connect_error();
}
 ?>
