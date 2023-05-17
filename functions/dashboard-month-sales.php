<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the current month
$current_month = new DateTime();
$current_month_string = $current_month->format('m');

// Get the sales for the current month
$sql = "SELECT SUM(discounted_sales) AS total_sales FROM transaction WHERE created >= :current_month";
$stmt = $db->prepare($sql);
$stmt->bindParam(':current_month', $current_month_string);
$stmt->execute();

// Get the total sales
$total_sales = $stmt->fetchColumn();

// Display the total sales
echo $total_sales;

?>