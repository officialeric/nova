<?php
include 'process/includes/config.php';
include('process/auth/auth-guest.php');
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Application</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->
    <!-- App css -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/base.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <div class="main-wrapper">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Start Header -->
        <header class="header axil-header  header-light header-sticky ">
            <div class="header-wrap">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                        <div class="logo">
                            <a href="<?=$BASE_URL?>">
                                <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Blogar logo">
                                <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Blogar logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="mainmenu-wrapper">
                            <nav class="mainmenu-nav">
                                <!-- Start Mainmanu Nav -->
                                <ul class="mainmenu">
                                    <li class="menu-item-has-children"><a href="<?=$BASE_URL?>">Home</a>
                                    <li class="menu-item-has-children"><a href="<?=$POST_LIST_URL?>">Post List</a>

                                        
                                    <li class="menu-item-has-children"><a href="<?=$ABOUT_PAGE_URL?>">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="<?=$CONTACT_PAGE_URL?>">Contact Us</a></li>

                                    <!-- <li class="menu-item-has-children"><a href="<?=$BASE_URL?>">Pages</a>
                                        <ul class="axil-submenu">
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="post-list.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post List">Post List</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="archive.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Post Archive">Post Archive</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Author Page">Author Page</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="about.html">
                                                    <span class="hover-flip-item">
                        <span data-text="About Page">About Page</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="contact.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Contact Us">Contact Us</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="404.html">
                                                    <span class="hover-flip-item">
                        <span data-text="404 Page">404 Page</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="maintenance.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Maintenance">Maintenance</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="hover-flip-item-wrapper" href="privacy-policy.html">
                                                    <span class="hover-flip-item">
                        <span data-text="Privacy Policy">Privacy Policy</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="home-lifestyle-blog.html">Lifestyle</a></li>
                                    <li><a href="home-tech-blog.html">Gadgets</a></li> -->
                                </ul>
                                <!-- End Mainmanu Nav -->
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                        <div class="header-search text-end d-flex align-items-center">
                            <form class="header-search-form d-sm-block d-none">
                                <div class="axil-search form-group">
                                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                            <div class="mobile-search-wrapper d-sm-none d-block">
                                <button class="search-button-toggle"><i class="fal fa-search"></i></button>
                                <form class="header-search-form">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </div>
                            <?php
                               if(isset($_SESSION['id'])) {?>
                                <ul class="metabar-block">
                                <!-- <li class="icon"><a href=""><i class="fas fa-bookmark"></i></a></li> -->
                                <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>
                                
                                <li><a href="<?=$PROFILE_URL?>"><img src="process/auth/uploads/<?=$user_data['profile_img'];?>" alt="User Image"></a></li>
                            </ul>
                            <?php }else{?>
                                <a href="login.php"><button class="axil-button button-rounded" type="submit" name="submit">Sign in</button></a>
                            <?php  } ?>
                            
                            <!-- Start Hamburger Menu  -->
                            <div class="hamburger-menu d-block d-xl-none">
                                <div class="hamburger-inner">
                                    <div class="icon"><i class="fal fa-bars"></i></div>
                                </div>
                            </div>
                            <!-- End Hamburger Menu  -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start Header -->

        <!-- Start Mobile Menu Area  -->
        <div class="popup-mobilemenu-area">
            <div class="inner">
                <div class="mobile-menu-top">
                    <div class="logo">
                        <a href="<?=$BASE_URL?>">
                            <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                            <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                        </a>
                    </div>
                    <div class="mobile-close">
                        <div class="icon">
                            <i class="fal fa-times"></i>
                        </div>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="menu-item-has-children"><a href="<?=$BASE_URL?>">Home</a>
                        <!-- <ul class="axil-submenu">
                            <li><a href="index.html">Home Default</a></li>
                            <li><a href="home-creative-blog.html">Home Creative Blog</a></li>
                            <li><a href="home-seo-blog.html">Home Seo Blog</a></li>
                            <li><a href="home-tech-blog.html">Home Tech Blog</a></li>
                            <li><a href="home-lifestyle-blog.html">Home Lifestyle Blog</a></li>
                        </ul> -->
                    </li>
                    <li class="menu-item-has-children"><a href="#">Categories</a>
                        <ul class="axil-submenu">
                            <li><a href="<?=$$CATEGORY_PAGE_URL?>">Accessibility</a></li>
                            <li><a href="<?=$$CATEGORY_PAGE_URL?>">Android Dev</a></li>
                            <li><a href="<?=$$CATEGORY_PAGE_URL?>">Accessibility</a></li>
                            <li><a href="<?=$$CATEGORY_PAGE_URL?>">Android Dev</a></li>
                        </ul>
                    </li>
                    <!-- <li class="menu-item-has-children"><a href="<?=$BASE_URL?>">Post Format</a>
                        <ul class="axil-submenu">
                            <li><a href="post-format-standard.html">Post Format Standard</a></li>
                            <li><a href="post-format-video.html">Post Format Video</a></li>
                            <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                            <li><a href="post-format-text.html">Post Format Text Only</a></li>
                            <li><a href="post-layout-1.html">Post Layout One</a></li>
                            <li><a href="post-layout-2.html">Post Layout Two</a></li>
                            <li><a href="post-layout-3.html">Post Layout Three</a></li>
                            <li><a href="post-layout-4.html">Post Layout Four</a></li>
                            <li><a href="post-layout-5.html">Post Layout Five</a></li>
                        </ul>
                    </li> 
                    <li class="menu-item-has-children"><a href="<?=$BASE_URL?>">Pages</a>
                        <ul class="axil-submenu">
                            <li><a href="post-list.html">Post List</a></li>
                            <li><a href="archive.html">Post Archive</a></li>
                            <li><a href="author.html">Author Page</a></li>
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="404.html">404 Page</a></li>-->
                    <li><a href="<?=$ABOUT_PAGE_URL?>">About Us</a></li>
                    <li><a href="<?=$CONTACT_PAGE_URL?>">Contact Us</a></li>
                </ul>
                <div class="buy-now-btn">
                    <a href="<?=$BASE_URL?>">Buy Now <span class="badge">$15</span></a>
                </div>
            </div>
        </div>
        <!-- End Mobile Menu Area  -->