<?php

include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$password_confirmation = md5($_POST['password_confirmation']);

if ($password !== $password_confirmation) {
    header('location: ../sign-up.php');
}

$sql = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

$query = mysqli_query($conn,$sql);

if ($query) {
    header('location: ../login.php');
}