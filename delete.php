<?php

require_once('connection.php');

$user_id = $_GET['id'];

// Fetch personal information for the current user
$result = mysqli_query($conn, "DELETE FROM `tbl_user` WHERE `user_id` = $user_id");
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

if ($result) {
    $response = array(
        'status' => 200,
        'message' => 'Record deleted successfully'
    );
} else {
    $response = array(
        'status' => 500,
        'message' => 'Error deleting record'
    );
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
