<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');
$user_id = $_SESSION['id'];
// Get all data from the products table
$sql = 'SELECT * FROM history WHERE user_id = '.$user_id.' AND status != "success"';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
    <tr>
        <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;<?php echo $row['product_id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['size']; ?></td>
        <td><?php echo $row['qty']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td>
            <button class="btn btn-danger btn-icon-split" type="button" data-bs-target="#confirmation" data-bs-toggle="modal" data-history-id="<?php echo $row['id']; ?>" data-product-id="<?php echo $row['product_id']; ?>" data-qty="<?php echo $row['qty']; ?>"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button>
        </td>
    </tr>
<?php
}

?>