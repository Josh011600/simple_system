<?php
//Configuration for database. visit localhost/phpmyadmin
include("config.php");
session_start();
	$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {

   // username and password sent from form 
$username = mysqli_real_escape_string($db,$_POST['username']);
$password = mysqli_real_escape_string($db,$_POST['password']); 
      
$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
      
$result = mysqli_query($db,$sql);
$row = mysqli_num_rows($result);

$result = mysqli_query($db,$sql);      
$row = mysqli_num_rows($result);      
$count = mysqli_num_rows($result);

if($count == 1) {

   // session_register("myusername");
   $_SESSION['login_user'] = $myusername;
   header("location: dashboard.php");
} else {
   
   header("location: index.php");
   echo "<script>alert('Hello');</script>";
}
}
?>