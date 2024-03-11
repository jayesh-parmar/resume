<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_achievement WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$achievement_title = mysqli_real_escape_string($conn, $_POST['achievement_title']);
$organization = mysqli_real_escape_string($conn, $_POST['organization']);
$achievement_description = mysqli_real_escape_string($conn, $_POST['achievement_description']);


$insert_query = mysqli_query($conn, "insert into tbl_achievement set achievement_title='$achievement_title', 
 organization='$organization',
 achievement_description='$achievement_description',
 user_id='$user_id'
");


if ($insert_query > 0) {
    echo "professional_exp Information is save successfull!";
} else {
    echo "Error!";
}
