<?php
include '../includes/db_connect.php';

if(isset($_POST['reset-pwd'])) {
    $selector = $_POST['reset-pwd'];
    $validator = $_POST['validator'];
    $password = $_POST['pwd'];
    $new_pass = $_POST['new-pwd'];

   if(empty($password) || empty($new_pass)){
    header('location:../forgottenpwd/create-new-pwd.php?newpwd=empty');
    exit();
   }else if($password != $new_pass) {
    header('location:../forgottenpwd/create-new-pwd.php?newpwd=not the same');
    exit();
   }
}