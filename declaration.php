<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_declaration WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$declaration_text = mysqli_real_escape_string($conn, $_POST['declaration_text']);


$insert_query = mysqli_query($conn, "insert into tbl_declaration set declaration_text='$declaration_text', 
 user_id='$user_id'
");


if ($insert_query > 0) {
    echo "declaration_text is save successfull!";
} else {
    echo "Error!";
}
