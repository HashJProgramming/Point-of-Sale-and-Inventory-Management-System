<?php

// Get the user ID from the hidden input field.
$user_id = $_POST['userid'];

// Connect to the database.
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the current password from the database.
$sql = "SELECT password FROM users WHERE id = :user_id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$row = $stmt->fetch();
$current_password = $row['password'];

// Check if the current password is correct.
if (password_verify($_POST['password'], $current_password)) {

  // Hash the new password.
  $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

  // Update the password in the database.
  $sql = "UPDATE users SET password = :new_password WHERE ID = :user_id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':new_password', $new_password);
  $stmt->bindParam(':user_id', $user_id);
  $stmt->execute();

  // Redirect the user to the main page.
  header('Location: ../users.php');

} else {

  // Display an error message.
  echo "The current password is incorrect.";

}