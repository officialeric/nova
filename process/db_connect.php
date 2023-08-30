<?php

$server = 'localhost';
$username = 'xcole';
$password = '#Xcole2023';
$db = 'blog';

#CREATING A DATABASE CONNECTION
$conn = new mysqli(
    $server,
    $username,
    $password , 
    $db
);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
