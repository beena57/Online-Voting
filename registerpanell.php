<?php
include("connection.php");
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Register Panell</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<body>
  <center><div class="register-box">
    <h1>Register Panel</h1>
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" placeholder="Name" name="name" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-phone" aria-hidden="true"></i>
      <input type="text" placeholder="Contact no." name="contactno" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-phone" aria-hidden="true"></i>
      <input type="text" placeholder="Aadhar no." name="aadharno" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" placeholder="Email-id" name="email" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-hand-o-up" aria-hidden="true"></i>
      <input type="text" placeholder="Voter-id" name="voterid" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="text" placeholder="Password" name="password" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="text" placeholder="Confirm Password" name="conpassword" value="">
    </div>
<input type="submit" id="button" name="register"></a>
<br>Already have an account?<a href="login.php"><b>Login Here</b></a>
</center>
  <style>
  @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(img/user.jpg) no-repeat;
    background-size: cover;
  }
  .register-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: white;
  }
  .register-box h1{
    float:left;
    font-size: 40px;
    border-bottom: 6px solid #ffffff;
    margin-bottom: 50px;
    padding: 13px 0
  }
  .textbox{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #ffffff;
  }
  .textbox i{
    width: 26px;
    float:left;
    text-align: center;
  }
  .textbox input{
    border: none;
    outline: none;
    background: none;
    color: white;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0  10px;
  }
  .btn{
    width: 100%;
    background: none;
    border: 2px solid #ffffff;
    color: white;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
  }
  </style>
<?php
$na=$_GET['name'];
$cn=$_GET['contactno'];
$an=$_GET['aadharno'];
$em=$_GET['email'];
$vi=$_GET['voterid'];
$pwd=$_GET['password'];
$conpwd=$_GET['conpassword'];

//$f_name = $_POST["f_name"];
//$l_name = $_POST["l_name"];
//$email = $_POST['email'];
//$password = $_POST['password'];
//$repassword = $_POST['repassword'];
//$mobile = $_POST['mobile'];
//$address1 = $_POST['address1'];
//$address2 = $_POST['address2'];


$query="insert into user_info values ('$na','$cn','$an','$em','$vi','$pwd','$conpwd')";


//$query = "INSERT INTO `user_info`
//		(`user_id`, `first_name`, `last_name`, `email`,
//		`password`, `mobile`, `address1`, `address2`)
//		VALUES (NULL, '$f_name', '$l_name', '$email',
//		'$password', '$mobile', '$address1', '$address2')";


$data =mysqli_query($conn,$query);
if($data){
  echo "Data inserted into Databse";
}
else{
  echo "Failed to inserted Data into Databse";
}
?>
