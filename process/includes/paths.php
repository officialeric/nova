<?php
session_start();

//home page
(isset($_SESSION['id']) ? $BASE_URL = 'index.php?user_id='.$_SESSION['id'] :$BASE_URL = 'index.php');

//category page
(isset($_SESSION['id']) ? $CATEGORY_PAGE_URL = 'category.php?user_id='.$_SESSION['id'] :$CATEGORY_PAGE_URL = 'category.php');

// contact page
(isset($_SESSION['id']) ? $CONTACT_PAGE_URL = 'contact.php?user_id='.$_SESSION['id'] :$CONTACT_PAGE_URL = 'contact.php');

// about page
(isset($_SESSION['id']) ? $ABOUT_PAGE_URL = 'about.php?user_id='.$_SESSION['id'] :$ABOUT_PAGE_URL = 'about.php');

// user profile
(isset($_SESSION['id']) ? $PROFILE_URL = 'user-profile.php?user_id='.$_SESSION['id'] :$PROFILE_URL = 'user-profile.php');

// post page
(isset($_SESSION['id']) ? $POSTS_URL = 'post-details.php?user_id='.$_SESSION['id'] :$POSTS_URL = 'post-details.php');

// AUTHOR PAGE
(isset($_SESSION['id']) ? $AUTHOR_URL = 'author.php?user_id='.$_SESSION['id'] :$AUTHOR_URL = 'author.php');
