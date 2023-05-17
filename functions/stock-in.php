<?php
session_start();
// Get the product ID from the POST request
$product_id = $_POST['product_id'];
$id = $_SESSION['id'];

// Get the quantity from the POST request
$qty = $_POST['qty'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the current quantity of the product
$sql = "SELECT qty FROM products WHERE id = :product_id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':product_id', $product_id);
$stmt->execute();
$row = $stmt->fetch();
$current_qty = $row['qty'];

// Update the quantity of the product
$new_qty = $current_qty + $qty;
$sql = "UPDATE products SET qty = :new_qty WHERE id = :product_id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':new_qty', $new_qty);
$stmt->bindParam(':product_id', $product_id);
$stmt->execute();

// Insert the stock in to the inventory table
$stmt = $db->prepare('INSERT INTO inventory (user_id, product_code, stock_in, created) VALUES (:user_id, :product_code, :stock_in, NOW())');
$stmt->bindParam(':user_id', $id);
$stmt->bindParam(':product_code', $product_id);
$stmt->bindParam(':stock_in', $qty);
$stmt->execute();


// Check if the update was successful
if ($stmt->rowCount() > 0) {
    // The update was successful, redirect to the product list page
    header('Location: ../inventory.php');
    exit;
} else {
    // The update was not successful, display an error message
    echo 'There was an error updating the product quantity.';
}
