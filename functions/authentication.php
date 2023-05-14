<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // The user is not logged in, redirect to the login page
    header('Location: ./index.php');
    exit;
}

?>