<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
$hostName = 'localhost';
$useName = 'root';
$password = 'password';
$databaseName = 'postbook';

$conn = mysqli_connect($hostName,$useName,$password,$databaseName);
