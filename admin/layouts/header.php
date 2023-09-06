<?php
include '../paths.php';
include '../../process/db_connect.php';

if(isset($_SESSION['id'])){
$id = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE id=$id";
$datas = mysqli_query($conn, $sql);

    if(mysqli_num_rows($datas) == 1) {
        $user_data =  mysqli_fetch_assoc($datas);
    }
    if(isset($_GET['msg'])) {
        $message = $_GET['msg'];
    }
    if(isset($_GET['error'])) {
        $error = $_GET['error'];
    }
}

$query = "SELECT * FROM category";
$results = mysqli_query($conn, $query);

$cate_query = "SELECT * FROM category";
$categories = mysqli_query($conn, $cate_query);

$selected_post_query = "SELECT * FROM posts";
$posts = mysqli_query($conn, $selected_post_query);

if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $selected_query = "SELECT * FROM posts WHERE id=$post_id";
    $edit_posts = mysqli_query($conn, $selected_query);
    
    if(mysqli_num_rows($edit_posts)){
        $edited_post = mysqli_fetch_assoc($edit_posts);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Xcole</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
        <meta content="Xcole" name="author" />

        <!-- sample -->
            <!-- Add these lines to your HTML file -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- sample end -->

        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
        <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

        <!-- Theme Config Js -->
        <script src="assets/js/config.js"></script>

        <!-- App css -->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <style>
            #container {
                width: 100%;
                margin: 10px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 500px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }
        </style>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.png" alt="logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="small logo">
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="dark logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="small logo">
                                </span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                        <span class="material-symbols-outlined">
menu
</span>                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                        <!-- Topbar Search Form -->
                        <div class="app-search d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search...">
                                    <!-- <span class="ri-search-line search-icon text-muted"></span> -->
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        <li class="dropdown d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="index.html#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line fs-22"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="index.html#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                                <span class="align-middle d-none d-lg-inline-block">English</span>
                                 <!-- <i
                                    class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="index.html#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="material-symbols-outlined">
notifications
</span>
                                <span class="noti-icon-badge badge text-bg-pink">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div style="max-height: 300px;" data-simplebar>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary-subtle">
                                            <i class="mdi mdi-comment-account-outline text-primary"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="noti-time">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning-subtle">
                                            <i class="mdi mdi-account-plus text-warning"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="noti-time">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger-subtle">
                                            <i class="mdi mdi-heart text-danger"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <small class="noti-time">3 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-pink-subtle">
                                            <i class="mdi mdi-comment-account-outline text-pink"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admi
                                            <small class="noti-time">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-purple-subtle">
                                            <i class="mdi mdi-account-plus text-purple"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="noti-time">7 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success-subtle">
                                            <i class="mdi mdi-heart text-success"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b>.
                                            <small class="noti-time">Carlos Crouch liked</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <!-- <li class="d-none d-sm-inline-block">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="index.html#theme-settings-offcanvas">
                            <i class="bi bi-list"></i>
                            </a>
                        </li> -->

                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link" id="light-dark-mode">
                            <span class="material-symbols-outlined">
contrast
</span>                        </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="index.php#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="../process/uploads/<?=$user_data['profile_img']?>" alt="user-image" width="32" class="avatar-sm rounded-circle">
                                </span>
                                <span class="d-lg-block d-none">
                                    <h5 class="my-0 fw-normal">
                                        <?=$user_data['username'];?> 
                                        <!-- <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i> -->
                                    </h5>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <!-- <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div> -->

                                <!-- item-->
                                <a href="<?=$PROFILE_URL;?>" class="dropdown-item">
                                <span class="material-symbols-outlined">
account_circle
</span>                                    <span class='ml-3'>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="<?=$PROFILE_URL;?>" class="dropdown-item">
                                <span class="material-symbols-outlined">
settings
</span>                                    <span class='ml-3'>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="<?=$FAQ_URL;?>" class="dropdown-item">
                                <span class="material-symbols-outlined">
info
</span>                                    <span class='ml-3'>Support</span>
                                </a>

                                <!-- item-->
                                <!-- <a href="auth-lock-screen.php" class="dropdown-item">
                                    <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                                    <span>Lock Screen</span>
                                </a> -->

                                <!-- item-->
                                <a href="../process/logout.php" class="dropdown-item">
                                <span class="material-symbols-outlined">
logout
</span>                                    <span class='ml-3'>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->
            

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Brand Logo Light -->
                <i class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </i>

                <!-- Brand Logo Dark -->
                <i class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </i>