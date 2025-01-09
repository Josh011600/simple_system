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
        
    <h1 class="welcome">Login Form</h1><br>
    <label for="username">username</label><br>
    <!-- name=username is for login.php if(isset username etc.)-->
    <input type="text" name="username" placeholder="username"required></input><br>
    <label for="password" >password</label><br>
     <!-- name=password is for login.php if(isset password etc.)-->
    <input type="password " name="password" placeholder="password" required></input><br>
    <button type="submit">Login</button><br>
    <label for="signup">not registered yet?</label><br>
    <button><a href="register.php">signup</a></button>
</form>
<<<<<<< HEAD

</body>
=======
<!--COMMENT AFTER INDEX GOES TO LOGIN.PHP-->
>>>>>>> 30665c9c6039f39b9409c9bf56d751622e94e014
<?php 
    include 'loginfunction/Connection.php';
    ?>
</html>

