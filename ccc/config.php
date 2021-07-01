<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "id11105620_hasindu";
$dbPassword = "xk3uTC+vzk%z1r6H";
$dbName     = "id11105620_miracles";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>