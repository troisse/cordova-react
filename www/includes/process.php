<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
require('../dbh.inc.php');

// Query to fetch images from the database
$sql = "SELECT id, images FROM destination"; // Adjust table/fields according to your DB schema
$stmt = $pdo->query($sql);
$imagesData = [];

// Process each image row
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $base64Image = base64_encode($row['images']);
  $imagesData[$row['id']] = ["image" => 'data:image/jpeg;base64,' . $base64Image];
}

// Return images as JSON
header('Content-Type: application/json');
echo json_encode($imagesData);

if (!$stmt) {
  // Error handling
  echo json_encode(['error' => 'Query failed']);
  exit;
}
?>
