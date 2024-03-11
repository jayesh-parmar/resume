<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_parsonal_info WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$linkdn = mysqli_real_escape_string($conn, $_POST['linkdn']);
$github = mysqli_real_escape_string($conn, $_POST['github']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$country = mysqli_real_escape_string($conn, $_POST['country']);


// echo $name;
// exit();

$insert_query = mysqli_query($conn, "insert into tbl_parsonal_info set name='$name', 
 email='$email',
 city='$city',
 linkdn='$linkdn',
 github='$github',
 address='$address',
 mobile='$mobile',
 country='$country',
 user_id='$user_id'
");

if ($insert_query > 0) {
    echo "Porsonal Information is save successfull!";
} else {
    echo "Error!";
}
