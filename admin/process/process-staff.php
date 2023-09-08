<?php
include '../paths.php'; 
include '../../process/db_connect.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['staff_role'];

    if(!$username){
        header('location:../layouts/'.$ADD_STAFF_URL .'&error=Username must be filled!');
        exit();
    }else if(!$email){
        header('location:../layouts/'.$ADD_STAFF_URL .'&error=Email must be filled!');
        exit();
    }else if(!$password){
        header('location:../layouts/'.$ADD_STAFF_URL .'&error=Password must be filled!');
        exit();
    }else{
        #hashing password
        $hashed_pwd = md5($password);
       #inserting into db
       $sql = "INSERT INTO users(username,email,password,role_id)
                          VALUES('$username','$email','$hashed_pwd',$role)";
        $stmt = mysqli_query($conn,$sql);

        if($stmt){
            header('location:../layouts/'.$STAFF_URL .'&info=New staff added!');
            exit();
        }else{
            header('location:../layouts/'.$ADD_STAFF_URL .'&error=Failed to add new staff!');
           exit();
        }
    }
}else if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['staff_role'];
    $staff_id = $_POST['staff_id'];

    if(!$username){
        header('location:../layouts/'.$ADD_STAFF_URL .'&error=Username must be filled!');
        exit();
    }else if(!$email){
        header('location:../layouts/'.$ADD_STAFF_URL .'&error=Email must be filled!');
        exit();
    }else if(!$password){
        header('location:../layouts/'.$ADD_STAFF_URL .'&error=Password must be filled!');
        exit();
    }else{
        #hashing password
        $hashed_pwd = md5($password);

        #update staff 
        $sql = "UPDATE users SET username='$username',email='$email',password='$hashed_pwd', role_id=$role WHERE id=$staff_id";
        $stmt = mysqli_query($conn,$sql);

        if($stmt){
            header('location:../layouts/'.$STAFF_URL .'&info=Selected staff updated successful!');
            exit();
        }else{
            header('location:../layouts/'.$STAFF_URL .'&error=Failed to update selected staff!');
           exit();
        }
    }
}