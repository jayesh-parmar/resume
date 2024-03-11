<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_language WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$language = mysqli_real_escape_string($conn, $_POST['language']);


$insert_query = mysqli_query($conn, "insert into tbl_language set language='$language', 
 user_id='$user_id'
");


if ($insert_query > 0) {
    echo "language is save successfull!";
} else {
    echo "Error!";
}
