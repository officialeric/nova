<?php

include '../paths.php'; 
include '../../process/db_connect.php';

if(isset($_POST['create-post'])){
    $author_id = $_GET['user_id'];
    $p_title = $_POST['title'];
    $p_category = $_POST['post_category'];
    $p_content = $_POST['post_content'];
    $p_banner = $_FILES['banner'];

    #checking inputs
    if (!$p_title){
        header('location:../layouts/'.$ADD_POST_URL);
        exit();
    }else if(!$p_category){
        header('location:../layouts/'.$ADD_POST_URL);
        exit();
    }else if(!$p_content){
        header('location:../layouts/'.$ADD_POST_URL);
        exit();
    }else{ 
        
        $img_name = $_FILES['banner']['name'];
        $img_type = $_FILES['banner']['type'];
        $img_size = $_FILES['banner']['size'];
        $tmp_name = $_FILES['banner']['tmp_name'];
        $error = $_FILES['banner']['error'];

    if(!$error) {
        if($img_size > 5000000) {
            header('location:../layouts/'.$ADD_POST_URL .'$error=Image is too large');
            exit();
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png');

            if(in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("BANNER-", true) . '.' . $img_ex_lc;
                $img_upload_path = "uploads/".$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // #selecting author
            $select_author = "SELECT * FROM users WHERE id=$author_id";
            $selected = mysqli_query($conn,$select_author);

            if(mysqli_num_rows($selected) == 1){
                $author = mysqli_fetch_assoc($selected);
                $posted_by = $author['fullname'];

                #inserting into database
                $sql = "INSERT INTO posts(title,description,banner,category,posted_by)
                        VALUES('$p_title','$p_content','$new_img_name','$p_category','$posted_by')";
                $stmt = mysqli_query($conn,$sql);

                if($stmt){
                    header('location:../layouts/'.$ADD_POST_URL.'&info=Post submitted successful');
                exit();
                }else{
                    header('location:../layouts/'.$ADD_POST_URL.'&error=Failed to submit post');
                    exit();
                }
                }

            }else {
                header('location:../layouts/'.$ADD_POST_URL);
                exit();          
              }
        }
        
            
    
    }
}

    }
    else if(isset($_POST['edit-post'])){
        $post_id = $_POST   ['post_id'];
        $author_id = $_GET['user_id'];
        $p_title = $_POST['title'];
        $p_category = $_POST['post_category'];
        $p_content = $_POST['post_content'];
        


    #checking inputs
    if (!$p_title){
        header('location:../layouts/'.$ADD_POST_URL);
        exit();
    }else if(!$p_category){
        header('location:../layouts/'.$ADD_POST_URL);
        exit();
    }else if(!$p_content){
        header('location:../layouts/'.$ADD_POST_URL);
        exit();
    }else{ 
      
       
        $img_name = $_FILES['banner']['name'];
        $img_type = $_FILES['banner']['type'];
        $img_size = $_FILES['banner']['size'];
        $tmp_name = $_FILES['banner']['tmp_name'];
        $error = $_FILES['banner']['error'];
       

    if(!$error) {
        if($img_size > 5000000) {
            header('location:../layouts/'.$ADD_POST_URL .'$error=Image is too large');
            exit();
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png');

            if(in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("BANNER-", true) . '.' . $img_ex_lc;
                $img_upload_path = "uploads/".$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                #selecting author
                $select_author = "SELECT * FROM users WHERE id=$author_id";
                $selected = mysqli_query($conn,$select_author);

                if(mysqli_num_rows($selected) == 1){
                    $author = mysqli_fetch_assoc($selected);
                    $posted_by = $author['fullname'];

                    #inserting into database
                    $sql = "UPDATE posts SET title='$p_title',description='$p_content',banner='$new_img_name',category='$p_category',posted_by='$posted_by' WHERE id=$post_id" ;
                            
                    $stmt = mysqli_query($conn,$sql);

                    if($stmt){
                        header('location:../layouts/'.$ADD_POST_URL);
                    exit();
                    }else{
                        header('location:../layouts/'.$ADD_POST_URL);
                        exit();
                    }
                    }
               
            } 
        }

     }
    }
    }else if(isset($_GET['publish_id'])){
        $post_id = $_GET['publish_id'];
        
        #updating post status 
        $sql = "UPDATE posts SET status='published' WHERE id=$post_id" ;                       
        $stmt = mysqli_query($conn,$sql);

        if($stmt){
            header('location:../layouts/'.$POSTS_URL.'&info=Post published successful');
        exit();
        }else{
            header('location:../layouts/'.$POSTS_URL.'$error=Failed to publish');
            exit();
        }

    }
   
            