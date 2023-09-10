<?php
include 'paths.php';
include 'process/db_connect.php';

#selecting logged user
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM users WHERE id=$id";
    $datas = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($datas) == 1) {
        $user_data =  mysqli_fetch_assoc($datas);
    }
    else{
        session_unset();
        exit();
    }
}

#selecting all published post from db
    $sql = "SELECT * FROM posts WHERE status='published'";
    $All_posts = mysqli_query($conn, $sql);

#selecting all category
    $category_query = "SELECT * FROM category";
    $fcategories = mysqli_query($conn, $category_query);

#selecting author
    if(isset($_GET['author_id'])){
        $author_id = $_GET['author_id'];
        $sql = "SELECT users.*,roles.role_name as role_name from users 
                INNER JOIN roles ON users.role_id = roles.id WHERE users.id=$author_id";

        $authors = mysqli_query($conn,$sql);

        if(mysqli_num_rows($authors) === 1){
            $author = mysqli_fetch_assoc($authors);
            $author_name = $author['fullname'] ;

            #selecting posts
            $post_sql = "SELECT * FROM posts WHERE posted_by='$author_name' AND status='published'";
            $posts = mysqli_query($conn, $post_sql);

        }
    }

#selecting targeted category
    if(isset($_GET['post_category'])){
        $post_category = $_GET['post_category'];

        $category_query = "SELECT * FROM category WHERE category_name='$post_category'";
        $categories = mysqli_query($conn, $category_query);

        if(mysqli_num_rows($categories) === 1){
            $category = mysqli_fetch_assoc($categories);
            $category_name = $category['category_name'];

            #selecting posts
            $post_sql = "SELECT * FROM posts WHERE category='$category_name'";
            $cposts = mysqli_query($conn, $post_sql);
        }
    }

#selecting targeted post
    if(isset($_GET['post_id'])) {
        $post_id = $_GET['post_id'];

        $post_query = "SELECT * FROM posts WHERE id = $post_id";
        $posts = mysqli_query($conn, $post_query);

        if(mysqli_num_rows($posts) === 1){
            $post = mysqli_fetch_assoc($posts);
            $post_author = $post['posted_by'];
            

            #selecting author of a specific post
            $sql = "SELECT * FROM users WHERE fullname='$post_author'";
            $auhtors = mysqli_query($conn, $sql);
            if(mysqli_num_rows($auhtors) === 1){
                $author = mysqli_fetch_assoc($auhtors);
            }

            #selecting all likes
            $try_likes = "SELECT * FROM post_like WHERE post_id=$post_id";
            $likes = mysqli_query($conn,$try_likes);
            $total_likes = mysqli_num_rows($likes);
        }

           #selecting all comments

            $comment_query = "SELECT * FROM comments WHERE post_id=$post_id ORDER BY commentedAt DESC";
            $comments = mysqli_query($conn, $comment_query);
            $total_comments = mysqli_num_rows($comments);
    }

#selecting recently posts
$try_recent = "SELECT * FROM posts ORDER BY createdAt DESC LIMIT 3";
$recent_posts = mysqli_query($conn,$try_recent);

#selecting trending posts
$try_trending = "SELECT * FROM posts ORDER BY likes DESC LIMIT 2";
$trending_posts = mysqli_query($conn,$try_trending);

#selecting recent category
$category_query = "SELECT * FROM category ORDER BY id DESC LIMIT 6";
$rcategories = mysqli_query($conn, $category_query);





