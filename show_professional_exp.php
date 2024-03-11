<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

// Fetch personal information for the current user
$result = mysqli_query($conn, "SELECT * FROM tbl_professional_exp WHERE user_id='$user_id'");
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Create an array to store the results
$info_list = array();
while ($row = mysqli_fetch_assoc($result)) {
    $info_list[] = $row;
}

// Return the results as JSON
header('Content-Type: application/json');
echo json_encode(['data' => $info_list]);

// Close the connection
mysqli_close($conn);
