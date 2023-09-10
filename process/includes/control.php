<?php
include('../db_connect.php');

$user_id = $_GET['user_id'];
$post_id = $_GET['post_id'];

$sql = "SELECT * FROM post_like WHERE post_id=$post_id AND liked_by=$user_id";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) === 1){
    header('location:../../post-details.php?user_id='.$user_id.'&post_id='.$post_id);
}else{
    #inserting into database
    $sql2 = "INSERT INTO post_like(post_id,likes,liked_by) VALUES('$post_id',1,'$user_id')";
    $stmt = mysqli_query($conn,$sql2);
    if($stmt){
        $sql3 = "SELECT * FROM post_like WHERE post_id='$post_id'";
        $all_posts = mysqli_query($conn,$sql3);

        if($all_posts){
            $total_likes = mysqli_num_rows($all_posts);
            $sql4 = "UPDATE posts SET likes=$total_likes  WHERE id=$post_id";
            $stmt = mysqli_query($conn,$sql4);

            if($stmt){
                header('location:../../post-details.php?user_id='.$user_id.'&post_id='.$post_id);  
            }
        }
        
    }
}


  