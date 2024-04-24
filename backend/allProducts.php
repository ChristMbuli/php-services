<?php

// Set error reporting to display all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the database connection file
require __DIR__ . '/connexion.php';

// Prepare the SQL statement to fetch all products
$allProducts = $conn->prepare('SELECT * FROM products');

// Execute the prepared statement
$allProducts->execute();

// Check if the query was successful
if ($allProducts->rowCount() > 0) {
    // Fetch all products
    $products = $allProducts->fetchAll(PDO::FETCH_ASSOC);
} else {
    $products = [];
}