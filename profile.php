<?php
session_start();
$user_id = $_SESSION['user_id'];
require_once('connection.php');

$check_query = mysqli_query($conn, "SELECT * FROM tbl_profile WHERE user_id='$user_id'");
if (mysqli_num_rows($check_query) > 0) {
    echo "Personal information already exists!";
    exit();
}

$profile = mysqli_real_escape_string($conn, $_POST['profile']);

// Handle file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image_path"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image_path"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["image_path"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image_path"]["tmp_name"], $target_file)) {
        // Insert into database
        $image_path = $target_file;
        $insert_query = mysqli_query($conn, "INSERT INTO tbl_profile (user_id, profile, image_path) VALUES ('$user_id', '$profile', '$image_path')");

        if ($insert_query) {
            echo "Profile saved successfully!";
        } else {
            echo "Error!";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
