
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "simple_system";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

