<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the form data
$product_name = $_POST['product_name'];
$size = $_POST['size'];
$qty = $_POST['qty'];
$price = $_POST['price'];

$stmt = $db->prepare('INSERT INTO products (product_name, size, qty, price, created) VALUES (:product_name, :size, :qty, :price, NOW())');

// Bind the values from the form
$stmt->bindParam(':product_name', $product_name);
$stmt->bindParam(':size', $size);
$stmt->bindParam(':qty', $qty);
$stmt->bindParam(':price', $price);

// Execute the statement
$stmt->execute();

// Check if the statement was successful
if ($stmt->rowCount() > 0) {
    header('Location: ../inventory.php');
} else {
    echo 'An error occurred.';
}

?>