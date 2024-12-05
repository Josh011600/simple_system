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

if(isset($_POST['username']) && isset($_POST['password'])){
    function validate()
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    header("Location: dashboard.php");
}
else
{
    header("Location: index.php");
    exit();
}

?>