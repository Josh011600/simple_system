<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
	
table, th,td
{
	border: solid;
	border-collapse: collapse;
	padding: 5px;
	margin: 10px;
	align-items: center;
	margin-left: auto;
	margin-right: auto;
	position: inherit;
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
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // Output data for each row
    while ($row = $result->fetch_assoc()) 
    {	
    	echo "<table class='tbl_admin'>";
        echo "<tr><th>ADMIN ID</th><th>NAME</th><th>EMAIL</th><th>PHONE</th></tr>";
        echo "<tr><td><center>".$row["id"] . "</center></td><td>" . $row["username"] ."</td><td>". $row["email"] . "</td><td>" . $row["phone"] ."</td></tr>";
        echo "</table>";
    }
} 
else 
{
    echo "No results found.";
}

$conn->close();




?>
</body>

</html>