<?php
$hostname = "";
$username = "";
$password = "";
$database = "";

try {
    $connection = new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
    // PDO error Mode
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // You can use this $connection variable to interact with database
    echo "Database connection successfully";
} catch(PDOException $e) {
    echo "Database connection failed : " . $e->getMessage();
}
// Delete the echo message or replace with logging function when your project is in production
