<?php
include '../paths.php';
include '../../process/db_connect.php';

if(isset($_GET['del_id'])) {
        $del_id = $_GET['del_id'];
        $user_id = $_GET['user_id'];
    
        $del = "DELETE FROM users WHERE  id=$del_id";
        $deleted = mysqli_query($conn, $del);
    
        if($deleted) {
            header("location: ../layouts/". $USERS_URL ."&msg=Data deleted!");
        }else{
            header("location: ../layouts/". $USERS_URL ."&msg=Failed to delete!");
        }
    }