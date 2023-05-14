<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

// Check if the passwords match
if ($password !== $password_repeat) {
    echo 'The passwords do not match.';
    exit;
}

// Hash the password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Insert the user into the database
$sql = "INSERT INTO users (username, password, level, created) VALUES (?, ?, 0, NOW())";
$stmt = $db->prepare($sql);
$stmt->execute([$username, $hash]);

// Redirect the user to the login page
header('Location: ../index.php');

?>
