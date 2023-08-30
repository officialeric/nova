<?php
include 'function.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   $result = registerNewUser($username,$email,$password);
   echo $result;
}
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

   loginExistedUser($email,$password);
}