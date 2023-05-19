<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM transaction';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
    <tr>
        <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;<?php echo $row['id']; ?></td>
        <?php get_username($row['user_id']);?>
        <td><?php echo $row['sales']; ?></td>
        <td><?php echo $row['discounted_sales'] - $row['sales']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['discounted_sales']; ?></td>
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
?>