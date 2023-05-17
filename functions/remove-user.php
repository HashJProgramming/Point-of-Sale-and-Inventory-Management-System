<?php

// Get the user ID from the hidden input field.
$user_id = $_POST['userid'];

// Connect to the database.
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Delete the user from the table.
$sql = "DELETE FROM users WHERE id = :user_id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();

// Redirect the user to the main page.
header('Location: ../users.php');
