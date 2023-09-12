<?php
include '../paths.php';
include '../../process/db_connect.php';

#getting logged staff
if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$datas = mysqli_query($conn, $sql);

    if(mysqli_num_rows($datas) == 1) {
        $user_data =  mysqli_fetch_assoc($datas);
    }
}

#selecting all category
$query = "SELECT * FROM category";
$results = mysqli_query($conn, $query);

#selecting all roles
$roles_query = "SELECT * FROM roles WHERE NOT id=4";
$roles = mysqli_query($conn, $roles_query);

#selecting all category
$cate_query = "SELECT * FROM category";
$categories = mysqli_query($conn, $cate_query);

#selecting all posts
$selected_post_query = "SELECT * FROM posts";
$posts = mysqli_query($conn, $selected_post_query);

#getting targeted post
if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $selected_query = "SELECT * FROM posts WHERE id=$post_id";
    $edit_posts = mysqli_query($conn, $selected_query);
    
    if(mysqli_num_rows($edit_posts)){
        $edited_post = mysqli_fetch_assoc($edit_posts);
    }
}

#getting targeted staff
if(isset($_GET['staff_id'])){
    $roles_query = "SELECT * FROM roles";
    $roles = mysqli_query($conn, $roles_query);

    $staff_id = $_GET['staff_id'];
    $staff_sql = "SELECT * FROM users WHERE id=$staff_id";
    $selected_staff = mysqli_query($conn,$staff_sql);

    if(mysqli_num_rows($selected_staff) === 1){
        $edited_staff = mysqli_fetch_assoc($selected_staff);
    }
}