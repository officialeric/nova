<?php
include '../includes/constraints.php';
include 'function.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    registerNewUser($username,$email,$password);
}

if(isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashed_password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) === 1){
        $logged_user = mysqli_fetch_assoc($result);
        
        $_SESSION['id'] = $logged_user['id'];
        $_SESSION['profile_img'] = $logged_user['profile_img'];

        header('location:../../index.php?user_id='.$_SESSION['id']);
    } else {
        header("location: ../../login.php?error=Wrong email or password! Try again or signup");
    }
    
   
}