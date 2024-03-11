<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_skill WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$skills = mysqli_real_escape_string($conn, $_POST['skills']);
$sub_skills = mysqli_real_escape_string($conn, $_POST['sub_skills']);


$insert_query = mysqli_query($conn, "insert into tbl_skill set skills='$skills', 
 sub_skills='$sub_skills',
 user_id='$user_id'
");


if ($insert_query > 0) {
    echo "professional_exp Information is save successfull!";
} else {
    echo "Error!";
}
