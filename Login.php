<?php


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