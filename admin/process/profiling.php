<?php
// include '../paths.php'; 
include '../../process/db_connect.php';

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
    $uname = validate($_POST['uname']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $user_id = $_POST['logged_user_id'];

    $hashed_pwd = md5($password);

    if( strlen($password) == strlen($hashed_pwd) ) {
        $sql = "UPDATE users SET username='$uname',email='$email',password='$password', fullname='$full_name', website='$website', about='$about', phone='$phone' WHERE id='$user_id'";
        $results = mysqli_query($conn, $sql);   
    }else  {
        $sql = "UPDATE users SET username='$uname',email='$email',password='$hashed_pwd', fullname='$full_name', website='$website', about='$about', phone='$phone' WHERE id='$user_id'";
        $results = mysqli_query($conn, $sql);
    }

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


// image input

if(isset($_POST['img_submit']) && isset($_FILES['image'])) {
    $id = $_POST['user_id'];

    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if(!$error) {
        if($img_size > 5000000) {
            header("location: ../layouts/pages-profile.php?user_id=".$id."&error=Image is too large!!!!");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png');

            if(in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG(".$id.")-", true) . '.' . $img_ex_lc;
                $img_upload_path = "uploads/".$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // upadating to database
                $sql = "UPDATE users SET profile_img = '$new_img_name' WHERE id=$id";
                $result = mysqli_query($conn, $sql);

                $img_query = "SELECT profile_img FROM users WHERE id=$id";
                $img_result = mysqli_query($conn, $img_query);

                if(mysqli_num_rows($img_result) == 1) {
                    $img_display = mysqli_fetch_assoc($img_result);
                }

                if($result) {
                    header("location: ../layouts/pages-profile.php?user_id=".$id."&msg=Image uploaded successfully!");
                }else {
                    header("location: ../layouts/pages-profile.php?user_id=".$id."&error=Image failed to upload!");
                }

            }else {
                header("location: ../layouts/pages.php?user_id=".$id."&error=Image format not supported!");
            }
        }
    }
}else {
    header("location: user-profile.php?user_id=".$id."&error=Unknown error occured!");
}
