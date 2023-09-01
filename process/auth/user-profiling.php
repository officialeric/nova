<?php
// include '../paths.php'; 
include 'process/db_connect.php';

if(isset($_POST['submit'])){
    function validate($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;

    }

    $full_name = validate($_POST['fname']);
    $website = validate($_POST['website']);
    $about = validate($_POST['about']);
    $phone = validate($_POST['phone']);
    $user_id = $_POST['logged_user_id'];


    $sql = "UPDATE users SET fullname='$full_name', website='$website', about='$about', phone='$phone' WHERE id='$user_id'";
    $results = mysqli_query($conn, $sql);   

    $sql2 = "SELECT * FROM users WHERE id=$user_id";
    $datas = mysqli_query($conn, $sql2);

    if(mysqli_num_rows($datas) == 1) {
        $user_data =  mysqli_fetch_assoc($datas);
    }

    if($results) {
        header("location: ../layouts/pages-profile.php?user_id=" . $user_data['id'] . "&msg=Data saved successfully");
    }else {
        header("location: ../layouts/".$PROFILE_URL."?error=Error occured saving data");
    }
}

