<?php
include '../db_connect.php';

if(isset($_POST['request'])){

    $email = $_POST['email'];
    
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://192.168.1.102/blog-php/forgottenpwd/create-new-pwd.php?selector=" . $selector ."&validator=" . bin2hex($token);
    $expire_time = date("U") + 1800;
    
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Error";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt , "s" ,$email);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) 
            VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Error";
        exit();
    }else{
        $hashedToken = password_hash($token,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt , "ssss" ,$email,$selector ,$hashedToken , $expire_time);
        mysqli_stmt_execute($stmt);
    }


    // mysqli_stmt_close($stmt);
    // mysqli_close();

    $to = $email;
    $subject = "Reset Your Password for Xcole";
    $message = '<p>we received a password reset request, the link to reset your passwordis down below</p>';
    $message .= '<p>Here is your password reset link :<br>';
    $message .= '<a href="' .$url.'">' . $url . '</a></p>';
    $headers = "From: Xcole <officialeric994@gmail.com>\r\n";
    $headers .= "Reply-To: officialeric994@gmail.com\r\n";
    $headers = "Content-type: text-html\r\n";

    mail($to,$subject,$message,$headers);

    header('location:../../login.php?message=Password reset!');

}else {
        header('location:../../login.php?error=Unknown rrro!');
    }









#SELECT EMAIL FROM TABLE TO SEE IF IT EXISTS
    // $sql = "SELECT * FROM users WHERE email='$email'";
    // $data = mysqli_query($conn,$sql);

    // #CHECK IF THE EMAIL EXISTS 
    // if(mysqli_num_rows($data) > 0) { 
    //     $user = mysqli_fetch_assoc($data);
        
    // } 
    // else {
    //     header('location:../../login.php?error=Email address does not recognized!');
    // }