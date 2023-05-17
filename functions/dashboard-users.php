<?php
// Connect to the database.
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the total number of users.
$sql = "SELECT COUNT(*) FROM users WHERE level = 1";
$stmt = $db->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();
$total_users = $row['COUNT(*)'];
echo $total_users;