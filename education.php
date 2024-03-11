<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_education WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$degree = mysqli_real_escape_string($conn, $_POST['degree']);
$school = mysqli_real_escape_string($conn, $_POST['school']);
$start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
$education_description = mysqli_real_escape_string($conn, $_POST['education_description']);



// echo $degree;
// exit();

$insert_query = mysqli_query($conn, "insert into tbl_education set degree='$degree', 
 school='$school',
 start_date='$start_date',
 education_description='$education_description',
 user_id='$user_id'
");


if ($insert_query > 0) {
    echo "professional_exp Information is save successfull!";
} else {
    echo "Error!";
}
