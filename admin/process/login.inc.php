<?php
session_start();
include '../../process/db_connect.php';

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $hashed_password = md5($password);

    #SELECT EMAIL FROM TABLE TO SEE IF IT EXISTS
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashed_password'";
    $data = mysqli_query($conn,$sql);

    #CHECK IF THE EMAIL EXISTS 
    if(mysqli_num_rows($data) > 0) { 
        $user = mysqli_fetch_assoc($data);
        if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 3 ){
            $_SESSION['id'] = $user['id'];  
            $_SESSION['username'] = $user['username'];
            $_SESSION['role_id'] = $user['role_id'];  

            header('location:../layouts/index.php?user_id='. $_SESSION['id'] .'&role='.$_SESSION['role_id']);
        }else{
            header('location:../index.php?error=You are not allowed!');
        }
    } 
    else {
        header('location:../index.php?error=You are not recognized!');
    }
    
}