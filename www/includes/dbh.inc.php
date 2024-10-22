<?php
$dsn = "mysql:host=localhost;dbname=karibu";
$dbusername = "root";
$dbpassword = "";

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Uncomment the following line for debugging purposes
    // echo "CONNECTION SUCCESSFUL";
} catch (PDOException $e) {
    // Handle connection errors
    echo "CONNECTION FAILED: " . $e->getMessage();
    exit; // Exit the script if the connection fails
}
?>
