<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action = "" method = "post">
               <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
               <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
               <input type = "submit" value = " Submit "/><br />
            </form>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px">
			<?php echo $error; ?>
		</div>
</body>
</html>
<script>
	


</script>
<?php
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
   header("location: welcome.php");
} else {
   $error = "Your Login Name or Password is invalid";
}
}
?>