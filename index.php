<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
<!--COMMENT -->
<!--START HERE! -->
    <form class="login" action="login.php" method="post"> 
        
    <div class="login-wrap">
  <h2>Login</h2>
  
  <div class="form">
    <input type="text" placeholder="Username" name="un" />
    <input type="password" placeholder="Password" name="pw" />
    <button> Sign in </button>
    <a href="#"> <p> Don't have an account? Register </p></a>
  </div>
</div>
</form>


</body>
<?php 
    include 'loginfunction/Connection.php';
    ?>
</html>

