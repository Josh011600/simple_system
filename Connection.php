<?php
require_once 'config.php';
$query = 'SELECT * FROM user WHERE username = ?';
$stmt = $conn->prepare($query);

if (!$stmt) {
    header('Location: index.php?error=Database error');
    exit;
}

// Bind the `username` parameter instead of `password`
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows == 0) {
    header('Location: index.php?error=Account does not exist');
    exit;
}

$user = $result->fetch_assoc();

// Verify the password
if (!password_verify($password, $user['password'])) {
    header('Location: index.php?error=Incorrect password');
    exit;
}

// Successful login
session_start();
session_regenerate_id(true); // Prevent session fixation attacks
$_SESSION['logged_in'] = true;
$_SESSION['username'] = $user['username'];

header('Location: dashboard.php');
exit;
?>
