<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM inventory';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();



// Loop through the results and add them to the table
foreach ($results as $row) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <?php
        get_username($row['user_id']);
        get_product_name($row['product_code']);
        ?>
        <td><?php echo $row['stock_in']; ?></td>
        <td><?php echo $row['stock_out']; ?></td>
        <td><?php echo $row['created']; ?></td>
    </tr>
<?php
}

function get_username($user_id){
    $db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');
    $sql = 'SELECT * FROM users WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach ($results as $row) {
        ?>
        <td><?php echo $row['username']; ?></td>
        <?php
    }
}


function get_product_name($product_id){
    $db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');
    $sql = 'SELECT * FROM products WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $product_id);
    $stmt->execute();
    $results = $stmt->fetchAll();
    foreach ($results as $row) {
        ?>
        <td><?php echo $row['product_name']; ?></td>
        <?php
    }
}