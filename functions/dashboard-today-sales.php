<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

$today = new DateTime();
$today_string = $today->format('Y-m-d');

// Get the sales for today
$sql = "SELECT SUM(discounted_sales) AS total_sales FROM transaction WHERE created >= :today";
$stmt = $db->prepare($sql);
$stmt->bindParam(':today', $today_string);
$stmt->execute();

// Get the total sales
$total_sales = $stmt->fetchColumn();


// Display the total sales
echo $total_sales;


?>