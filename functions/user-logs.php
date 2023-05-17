<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get all data from the products table
$sql = 'SELECT * FROM user_logs';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and add them to the table
foreach ($results as $row) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><?php echo $row['sign_in']; ?></td>
        <td><?php echo $row['sign_out']; ?></td>
        <td><?php echo $row['created']; ?></td>
    </tr>
<?php
}

?>