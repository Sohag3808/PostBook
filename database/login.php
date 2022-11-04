<?php
include('connection.php');

session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM `user` WHERE `email`='$email' ";

$user = mysqli_query($conn, $sql);

if ($selectUser = mysqli_fetch_assoc($user)) {

    if ($password === $selectUser['password']) {
        
        $_SESSION['name'] = $selectUser['name'];
        $_SESSION['email'] = $selectUser['email'];
        $_SESSION['id'] = $selectUser['id'];

        header('location: ../');

        return;
    }
}

header('location: ../login.php');
