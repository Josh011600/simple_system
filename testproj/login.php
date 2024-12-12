<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<h1>Hello</h1>
<form method="post">
	<h1>login form</h1>
	<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
</form>
</body>
</html>
<?php

include 'connection.php';

?>