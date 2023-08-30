<?php
    include '../db_connect.php';

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

    #SELECT EMAIL FROM TABLE TO SEE IF IT EXISTS
    $sql2 = "SELECT * FROM users WHERE email='$email'";
    $data = mysqli_query($conn,$sql2);

    #CHECK IF THE EMAIL EXISTS 
    if(mysqli_num_rows($data) > 0) { 
        header('location:../../signup.php?error=Email already exists!');
    } 
    else {
        $sql = "INSERT INTO users(username,email,password) 
                VALUES('$username','$email','$hashed_password')";
        $result = $conn->query($sql);
        header('location:../../login.php?message=Signup successfull login to continue');
    }
}

function selectAllUser(){
    include '../db_connect.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);

    return $result;
}

