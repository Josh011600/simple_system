<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    
    <form class="login" action="Login.php" method="post"> 
        
    <h1 class="welcome">Login Form</h1><br>
    <label for="username">username</label><br>
    <!-- name=username is for login.php if(isset username etc.)-->
    <input type="text" name="username" placeholder="username"required></input><br>
    <label for="password" >password</label><br>
     <!-- name=password is for login.php if(isset password etc.)-->
    <input type="password " name="password" placeholder="password" required></input><br>
    <button type="submit">Login</button><br>
    <label for="signup">not registered yet?</label><br>
    <button><a href="Signup_page.php">signup</a></button>
</form>
<?php 
    include 'Connection.php';
    
    ?>
</body>
</html>

