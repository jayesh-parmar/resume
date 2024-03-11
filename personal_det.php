<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_personal_det WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
$hobbies = mysqli_real_escape_string($conn, $_POST['hobbies']);



// echo $birth_date;
// exit();

$insert_query = mysqli_query($conn, "insert into tbl_personal_det set birth_date='$birth_date', 
 gender='$gender',
 nationality='$nationality',
 hobbies='$hobbies',
 user_id='$user_id'
");


if ($insert_query > 0) {
    echo "professional_exp Information is save successfull!";
} else {
    echo "Error!";
}
