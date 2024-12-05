<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Including database connection (optional if not needed here) -->
    
    

</head>
<body>
    <form class="login" action="connection2.php" method="post"> 
    <div class="error-message">
        <?php
        if (isset($_GET['error'])) {
            $err = htmlspecialchars($_GET['error']);
            echo "<p style='color: red;'>$err</p>";
        }
        ?>
    </div>
        
        <h1 class="welcome">Login Form</h1><br>
        
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Enter your username"><br>
        
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br>
        
        <button type="submit">Login</button><br>
        
        <label for="signup">Not registered yet?</label><br>
        <button type="button" onclick="window.location.href='Signup_page.php'">Signup</button>
    </form>
</body>
</html>
