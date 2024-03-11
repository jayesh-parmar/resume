<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_professional_exp WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) >0) {
    echo "Personal information already exists!";
    exit();
}

$job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
$comapany_name = mysqli_real_escape_string($conn, $_POST['comapany_name']);
$start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
$job_description = mysqli_real_escape_string($conn, $_POST['job_description']);



// echo $job_title;
// exit();

$insert_query = mysqli_query($conn, "insert into tbl_professional_exp set job_title='$job_title', 
 comapany_name='$comapany_name',
 start_date='$start_date',
 job_description='$job_description',
 user_id='$user_id'
");
print_r($insert_query);

if ($insert_query > 0) {
    echo "professional_exp Information is save successfull!";
} else {
    echo "Error!";
}
