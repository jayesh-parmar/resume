<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');
 // Adjust this based on your authentication mechanism

$new_pwd = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_pwd = mysqli_real_escape_string($conn, $_POST['confirm_password']);

// Check if the new password and confirm password match
if ($new_pwd !== $confirm_pwd) {
    echo json_encode(array("status" => "error", "msg" => "New password and confirm password do not match"));
    exit();
}

// Hash the new password
$new_pwd_hash = md5($new_pwd);

// Update the password
$update_query = mysqli_query($conn, "UPDATE tbl_user SET password='$new_pwd_hash' WHERE user_id=$user_id");

if ($update_query) {
    echo json_encode(array("status" => 200, "msg" => "Password updated successfully!"));
} else {
    echo json_encode(array("status" => "error", "msg" => "Error updating password"));
}
