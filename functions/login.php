<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];


// Check if the user exists
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if the password is correct
if ($user && password_verify($password, $user['password'])) {
    // Login the user
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $user['level'];
    $_SESSION['id'] = $user['id'];
    // Check user level
    if ($user['level'] == 0) {
        header('location: ../dashboard.php');
    } else if ($user['level'] == 1) {
        header('location: ../point-of-sale.php');
    }
} else {
    // Show an error message
    header('location: ../index.php');
}
