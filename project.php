<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_project WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$project_title = mysqli_real_escape_string($conn, $_POST['project_title']);
$role = mysqli_real_escape_string($conn, $_POST['role']);
$project_description = mysqli_real_escape_string($conn, $_POST['project_description']);




// echo $project_title;
// exit();

$insert_query = mysqli_query($conn, "insert into tbl_project set project_title='$project_title', 
 role='$role',
 project_description='$project_description',
 user_id='$user_id'
");


if ($insert_query > 0) {
    echo "professional_exp Information is save successfull!";
} else {
    echo "Error!";
}
