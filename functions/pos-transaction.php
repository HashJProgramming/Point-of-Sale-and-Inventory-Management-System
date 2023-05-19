<?php
session_start();
// Get the user ID
$user_id = $_SESSION['id'];

// Get the total sales
$sales = $_POST['total_sales'];

// Get the amount
$amount = $_POST['amount'];

// Get the discount
$discount = $_POST['discount'];

if ($discount == null) {
    $discount = 0;
}

if ($amount == null) {
    $amount = 0;
}

// Calculate the discounted sales
$discounted_sales = $sales - $discount ;
$payment = $amount + $discount;
if ($payment < $_POST['total_sales']) {
    header('Location: ../insufficient.php?discount='.$discount.'&amount='.$amount.'&sales='.$sales.'&payment='.$payment);
    exit;
}


// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Insert a new row into the transaction table
$sql = "INSERT INTO transaction (user_id, sales, discounted_sales, amount, created) VALUES (:user_id, :sales, :discounted_sales, :amount, NOW())";
$stmt = $db->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':sales', $sales);
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':discounted_sales', $discounted_sales);
$stmt->execute();

$sql = "UPDATE history SET status = 'success' WHERE user_id = :user_id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();


// Check if the insert was successful
if ($stmt->rowCount() > 0) {
    // The insert was successful, redirect to the success page
    header('Location: ../success.php?sales='.$sales.'&discount='.$discount.'&amount='.$amount.'&discounted_sales='.$discounted_sales);
    exit;
} else {
    // The insert was not successful, display an error message
    echo 'There was an error saving the transaction.';
}

?>