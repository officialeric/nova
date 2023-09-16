<?php

$server = 'localhost';
$username = 'xnova';
$password = '#Xnova2023';
$db = 'blog';

#CREATING A DATABASE CONNECTION
$conn = new mysqli(
    $server,
    $username,
    $password , 
    $db
);
