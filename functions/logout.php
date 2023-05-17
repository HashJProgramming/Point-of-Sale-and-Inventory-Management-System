<?php
// Start a session
session_start();

$username = $_SESSION['username'];
$level = $_SESSION['level'];


if ($level == 0) {
$type = 'Admin';
} else if ($level == 1) {
$type = 'Cashier';
}

$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');
$stmt = $db->prepare('UPDATE user_logs SET sign_out = NOW() WHERE username = :username AND sign_out = "0000-00-00 00:00:00"');
$stmt->bindParam(':username', $username);

// Execute the statement
$stmt->execute();

// Destroy the session
session_destroy();
// Redirect the user to the login page
header('Location: ../index.php');

?>