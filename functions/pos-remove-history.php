<?php

// Get the history ID from the form
$history_id = $_POST['history_id'];

// Get the product ID from the form
$product_id = $_POST['product_id'];

// Get the quantity from the POST request
$qty = $_POST['product_qty'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Delete the product
$sql = 'DELETE FROM history WHERE id = :history_id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':history_id', $history_id);
$stmt->execute();

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

// Check if the product was deleted successfully
if ($stmt->rowCount() > 0) {
    header('Location: ../point-of-sale.php');
} else {
    echo 'An error occurred.';
}

?>