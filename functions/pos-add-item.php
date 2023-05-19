<?php
session_start();

// Get the product ID and quantity from the POST request
$product_id = $_POST['product_id'];
$qty = $_POST['item_qty'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');
$user_id = $_SESSION['id'];

// Get the product information from the database
$sql = "SELECT product_name, size, price, qty FROM products WHERE id = :product_id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':product_id', $product_id);
$stmt->execute();
$row = $stmt->fetch();
$product_name = $row['product_name'];
$size = $row['size'];
$price = $row['price'];
$current_qty = $row['qty'];

// Check if the quantity is greater than the current quantity
if ($current_qty < $qty) {
    header('Location: ../point-of-sale.php');
    exit;
}

// Check if the product already exists in the history table
$sql = "SELECT * FROM history WHERE user_id = :user_id AND product_id = :product_id AND status = ''";
$stmt = $db->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':product_id', $product_id);
$stmt->execute();
$results = $stmt->fetchAll();

// If the product does not exist in the history table, insert it
if (count($results) == 0) {
    $new_qty = $current_qty - $qty;
    $sql = "UPDATE products SET qty = :new_qty WHERE id = :product_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':new_qty', $new_qty);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();

    // Insert a new row into the history table
    $sql = "INSERT INTO history (user_id, product_id, product_name, size, qty, price, created) VALUES (:user_id, :product_id, :product_name, :size, :qty, :price, NOW())";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':qty', $qty);
    $stmt->bindParam(':price', $price);
    $stmt->execute();
} else {
    // The product already exists in the history table, update the quantity
    $sql = "UPDATE history SET qty = qty + :qty WHERE user_id = :user_id AND product_id = :product_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':qty', $qty);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();
}

// Check if the update was successful
if ($stmt->rowCount() > 0) {
    // The update was successful, redirect to the history page
    header('Location: ../point-of-sale.php');
    exit;
} else {
    // The update was not successful, display an error message
    echo 'There was an error updating the item in the history.';
}

?>