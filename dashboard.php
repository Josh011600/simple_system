<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
	
table
{
	border-style: 10px solid #fff; 
	border-width: 10px 5px;
}
</style>
</head>

<body>
	<?php
$conn = new mysqli("localhost", "root", "", "simple_system");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select query
$sql = "SELECT id, username, email FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) 
    {	
    	echo "<table class='tbl_admin'>";
        echo "ID: " . $row["id"] . " - Name: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
        echo "</table>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
</body>

</html>