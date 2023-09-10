<?php
include('../db_connect.php');

if(isset($_POST['comment'])){
    $user_id = $_POST['user_id'];
    $post_id = $_POST['post_id'];
    $comment = $_POST['message'];

   $sql = mysqli_query($conn,"INSERT INTO comments(commented_by,post_id,type,content) 
                              VALUES($user_id,$post_id,'post','$comment')");
   if($sql){
    header('location:../../post-details.php?user_id='.$user_id.'&post_id='.$post_id.'&info=a comment added!');
    exit();
   }else{
    header('location:../../post-details.php?user_id='.$user_id.'&post_id='.$post_id.'&erro=failed to add a comment!');
    exit();
   }
}