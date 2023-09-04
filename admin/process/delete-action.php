<?php
include '../paths.php';
include '../../process/db_connect.php';

if(isset($_GET['del_id'])) {
        $del_id = $_GET['del_id'];
        $user_id = $_GET['user_id'];
        $page = $_GET['page'];

        if($page == 'category') {
            $cat_del = "DELETE FROM category WHERE  id=$del_id";
            $deleted = mysqli_query($conn, $cat_del);

            if($deleted) {
                header("location: ../layouts/". $CATEGORIES_URL ."&msg=Data deleted!");
            }else{
                header("location: ../layouts/". $CATEGORIES_URL ."&error=Failed to delete!");
            }
        } else if ($page == 'users') {
            $del = "DELETE FROM users WHERE  id=$del_id";
            $deleted = mysqli_query($conn, $del);

            if($deleted) {
                header("location: ../layouts/". $USERS_URL ."&msg=Data deleted!");
            }else{
                header("location: ../layouts/". $USERS_URL ."&error=Failed to delete!");
            }
        } else if ($page == 'roles') {
            $del = "DELETE FROM roles WHERE  id=$del_id";
            $deleted = mysqli_query($conn, $del);

            if($deleted) {
                header("location: ../layouts/". $ROLES_URL ."&msg=Role deleted!");
            }else{
                header("location: ../layouts/". $ROLES_URL ."&error=Failed to delete role!");
            }
        }
    }