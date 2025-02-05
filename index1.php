<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Addition</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Addition Form</h2>
        <form method="post">
            <label for="num1">Num1:</label>
            <input type="text" id="num1" name="num1" placeholder="Enter first number">
            
            <label for="num2">Num2:</label>
            <input type="text" id="num2" name="num2" placeholder="Enter second number">
            
            <button type="submit" name="calculate">ADD</button>
             <button type="submit" name="clear">CLEAR</button>
            <label for="result">Result:</label>
            <input type="text" id="result" name="result" value="include testvalue.php;" readonly>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if (is_numeric($num1) && is_numeric($num2)) {
            $sum = $num1 + $num2;
            echo "<script>document.getElementById('result').value = '$sum';</script>";
        } 
        
        else {
            echo "<script>alert('Please enter valid numbers');</script>";
        }
    }
    else
    {
    	$sum = "";
        	echo "<script>document.getElementById('result').value = '$sum';</script>";
    }
    ?>

</body>
</html>
