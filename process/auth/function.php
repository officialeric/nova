<?php

function validate($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    
    return $data;
}

function registerNewUser($user,$email,$pass){
    include '../db_connect.php';

    $username = validate($user);
    $email  = validate($email);
    $password = validate($pass);
 
    $hashed_password = md5($password);

    $sql = "INSERT INTO users(username,email,password) 
            VALUES('$username','$email','$hashed_password')";
    $result = mysqli_query($conn,$sql);

    if($result){
        return 'data inserted';
    }
    return 'error';
}

function selectAllUser(){
    include '../db_connect.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);

    return $result;
}

function loginExistedUser($email,$pass) {
    include '../db_connect.php';

    $email  = validate($email);
    $password = validate($pass);
    $hashed_password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashed_password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) === 1){
        $logged_user = mysqli_fetch_assoc($result);
        header('location:../../index.html?user_id='.$logged_user['id']);
    }
}