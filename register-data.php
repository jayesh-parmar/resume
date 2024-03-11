<?php
require_once('connection.php');
$name = mysqli_real_escape_string($conn, $_POST['user_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = md5(mysqli_real_escape_string($conn, $_POST['password']));

// echo $name;
// exit();

$insert_query = mysqli_query($conn, "insert into tbl_user set user_name='$name', email='$email', password='$pwd'");


if ($insert_query) {
    echo json_encode(array("status" => 200, "msg" => "Personal Information is saved successfully!", "redirect" => "new_page.php"));
} else {
    echo json_encode(array("status" => "error", "msg" => "Error saving personal information"));
}
