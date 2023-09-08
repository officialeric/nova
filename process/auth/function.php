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

    // if(preg_match('(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}', $password)) {
    //     $hashed_password = md5($password);

        #SELECT EMAIL FROM TABLE TO SEE IF IT EXISTS
        $sql2 = "SELECT * FROM users WHERE email='$email'";
        $data = mysqli_query($conn,$sql2);
    
        #CHECK IF THE EMAIL EXISTS 
        if(mysqli_num_rows($data) > 0) { 
            header('location:../../signup.php?error=Email already exists!');
        } 
        else {
            $sql = "INSERT INTO users(username,email,password,fullname,website,about,phone) 
                    VALUES('$username','$email','$hashed_password','Your Full name','example.com','Hello there',255)";
            $result = $conn->query($sql);
            header('location:../../login.php?message=Signup successfull login to continue');
        }    
    // } else {
    //     header('location:../../signup.php?error=Password should contain at least 1 uppercase , 1 lowercase , symbol and 6-12 characters!');
    //     exit();
    //     }
 
    
}

function selectAllUser(){
    include '../db_connect.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);

    return $result;
}

