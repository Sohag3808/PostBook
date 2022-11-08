<?php
session_start();
include('connection.php');

$profile_photo = $_FILES['profile_photo']['name'];
$fileExtention = pathinfo($profile_photo,PATHINFO_EXTENSION);
$newPhotoName = date('d-m-Y') . time(). rand(0000000000,9999999999). '.' .$fileExtention;
$file_tmp_name = $_FILES['profile_photo']['tmp_name'];
move_uploaded_file($file_tmp_name,'../uploads/'.$newPhotoName);


$id = $_SESSION['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$post_code = $_POST['post_code'];
$about_us = $_POST['about_us'];

$_SESSION["name"] = $_POST['name'];
$_SESSION['email'] = $email;

$sql = "UPDATE `user` SET `name`='$name',`email`='$email',`address`='$address',`city`='$city',`country`='$country',`post_code`='$post_code',`about_us`='$about_us',profile_photo='$newPhotoName' WHERE id = $id";

$query = mysqli_query($conn,$sql);

if ($query) {
   header('location: ../profile.php');
}