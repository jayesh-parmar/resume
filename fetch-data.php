<?php
session_start();
require_once('connection.php');
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = md5(mysqli_real_escape_string($conn, $_POST['password']));

$select_query = mysqli_query($conn, "select * from tbl_user where email='$email' and password='$password'");
$row = mysqli_num_rows($select_query);
if ($row > 0) {
    $fetch_data = mysqli_fetch_assoc($select_query);
   
    $id =  $fetch_data['user_id'];
    $_SESSION['user_id'] = $id;
    $name = $fetch_data['user_name'];
    $_SESSION['user_name'] = $name;
    echo json_encode(array("status" => 1, "msg" => "Login Successful!"));
} else {
    echo json_encode(array("status" => 0, "msg" => "Wrong Credentials!"));
}
