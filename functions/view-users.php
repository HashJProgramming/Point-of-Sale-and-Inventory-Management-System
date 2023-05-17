<?php
// Connect to the database
$db = new mysqli("localhost", "root", "", "db_hash");

// Check if the connection was successful
if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}

// Get all the rows from the `users` table
$sql = "SELECT * FROM users";
$result = $db->query($sql);

// Check if there are any rows in the result set
if ($result->num_rows > 0) {
// Loop through the result set and print each row
while ($row = $result->fetch_assoc()) {
    if ($row["level"] == 0){
        $type = "Admin";
    } else {
        $type = "Cashier";
    }
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td>" . $type . "</td>";
    echo "<td>" . $row["created"] . "</td>";
    

    // If the user level is 0, don't add the remove button.
    if ($row["level"] == 0) {
    echo "<td>
    <button class=\"btn btn-warning btn-icon-split\" type=\"button\" style=\"margin: 2px;\" data-bs-target=\"#update\" data-bs-toggle=\"modal\" data-user-id=\"{$row['id']}\"><span class=\"text-white-50 icon\"><i class=\"fas fa-exclamation-triangle\"></i></span><span class=\"text-white text\">Change Password</span></button>
    <a class=\"btn btn-info btn-icon-split\" role=\"button\" style=\"margin: 2px;\" href=\"logs.php?id={$row['id']}\"><span class=\"text-white-50 icon\"><i class=\"fas fa-info-circle\"></i></span><span class=\"text-white text\">Logs</span></a></td>";
    } else {
    echo "<td>
    <button class=\"btn btn-warning btn-icon-split\" type=\"button\" style=\"margin: 2px;\" data-bs-target=\"#update\" data-bs-toggle=\"modal\" data-user-id=\"{$row['id']}\"><span class=\"text-white-50 icon\"><i class=\"fas fa-exclamation-triangle\"></i></span><span class=\"text-white text\">Change Password</span></button>
    <button class=\"btn btn-danger btn-icon-split\" type=\"button\" style=\"margin: 2px;\" data-bs-target=\"#confirmation\" data-bs-toggle=\"modal\" data-user-id=\"{$row['id']}\"><span class=\"text-white-50 icon\"><i class=\"fas fa-trash\"></i></span><span class=\"text-white text\">Remove</span></button>
    <a class=\"btn btn-info btn-icon-split\" role=\"button\" style=\"margin: 2px;\" href=\"logs.php?id={$row['id']}\"><span class=\"text-white-50 icon\"><i class=\"fas fa-info-circle\"></i></span><span class=\"text-white text\">Logs</span></a></td>";
    }

    echo "</tr>";
}
} else {
echo "No rows found";
}

// Close the database connection
$db->close();
?>