<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

// Fetch user information
$query = mysqli_query($conn, "SELECT user_name, email FROM tbl_user WHERE user_id = $user_id");
$row = mysqli_fetch_assoc($query);

// Return the user information as JSON
echo json_encode($row);
