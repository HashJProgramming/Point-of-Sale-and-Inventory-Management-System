<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM products ORDER BY product_name ASC';
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
        <td><?php echo $row['created']; ?></td>
        <td>
            <button class="btn btn-success btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#stock-in" data-bs-toggle="modal" data-product-id="<?php echo $row['id']; ?>"><span class="text-white-50 icon"><i class="fas fa-arrow-up"></i></span><span class="text-white text">Stock In</span></button>
            <button class="btn btn-info btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#stock-out" data-bs-toggle="modal" data-product-id="<?php echo $row['id']; ?>"><span class="text-white-50 icon"><i class="fas fa-arrow-down"></i></span><span class="text-white text">Stock Out</span></button>
            <button class="btn btn-warning btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#update-product" data-bs-toggle="modal" data-product-id="<?php echo $row['id']; ?>"><span class="text-white-50 icon"><i class="fas fa-exclamation-triangle"></i></span><span class="text-white text">Update</span></button>
            <button class="btn btn-danger btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#confirmation" data-bs-toggle="modal" data-product-id="<?php echo $row['id']; ?>"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button>
        </td>
    </tr>
<?php
}

?>