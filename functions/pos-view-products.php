<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM products WHERE qty > 0 ORDER BY product_name ASC';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
    <tr>
        <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;<?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['size']; ?></td>
        <td><?php echo $row['qty']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td>
            <button class="btn btn-success btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#add-item" data-bs-toggle="modal" data-product-id="<?php echo $row['id']; ?>"><span class="text-white-50 icon"><i class="fas fa-arrow-up"></i></span><span class="text-white text">Add</span></button>
        
        </td>
    </tr>
<?php
}

?>