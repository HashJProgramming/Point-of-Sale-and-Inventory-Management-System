<?php

// Get the product ID from the form
$product_id = $_POST['product_id'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Delete the product
$sql = 'DELETE FROM products WHERE id = :product_id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':product_id', $product_id);
$stmt->execute();

// Check if the product was deleted successfully
if ($stmt->rowCount() > 0) {
    header('Location: ../inventory.php');
} else {
    echo 'An error occurred.';
}

?>