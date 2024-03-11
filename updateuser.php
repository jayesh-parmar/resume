<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php'); // Adjust this based on your authentication mechanism

$name = mysqli_real_escape_string($conn, $_POST['user_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Update the user's information
$update_query = mysqli_query($conn, "UPDATE tbl_user SET user_name='$name', email='$email' WHERE user_id=$user_id");

if ($update_query) {
    echo json_encode(array("status" => 200, "msg" => "Personal Information updated successfully!", "redirect" => "new_page.php"));
} else {
    echo json_encode(array("status" => "error", "msg" => "Error updating personal information"));
}
