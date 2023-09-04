<?php
include '../../process/db_connect.php';
include '../paths.php';

if(isset($_POST['add_cat'])) {
    $category = $_POST['category'];

    $sql = "INSERT INTO category (category_name) VALUES ('$category')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: ../layouts/".$CATEGORIES_URL."&msg=Added category!");
    } else {
        header("location: ../layouts/".$CATEGORIES_URL."&error=Failed to add category!");
    }
}

if(isset($_POST['add_role'])) {
    $role = $_POST['role'];

    $sql = "INSERT INTO roles (role_name) VALUES ('$role')";
    $roles = mysqli_query($conn, $sql);

    if($roles) {
        header("location: ../layouts/".$ROLES_URL."&msg=Added new role!");
    } else {
        header("location: ../layouts/".$ROLES_URL."&error=Failed to add new role!");
    }
}