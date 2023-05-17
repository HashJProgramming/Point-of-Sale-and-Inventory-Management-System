<?php
$total_price = 0;
$user_id = $_SESSION['id'];
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');
// Get all the rows from the history table
$sql = 'SELECT * FROM history WHERE user_id = '.$user_id.' AND status != "success"';
$stmt = $db->prepare($sql);
$stmt->execute();

// Loop through the rows and calculate the total price
while ($row = $stmt->fetch()) {
    $product_id = $row['product_id'];
    $qty = $row['qty'];
    $price = $row['price'];

    $total_price += $qty * $price;
}

// Display the total price
echo "$total_price";