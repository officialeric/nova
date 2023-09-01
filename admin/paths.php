<?php
session_start();

// home page
(isset($_SESSION['id']) ? $BASE_URL = 'index.php?user_id='.$_SESSION['id'] :$BASE_URL = 'index.php');


// user management
(isset($_SESSION['id']) ? $USERS_URL = 'manage-user.php?user_id='.$_SESSION['id'] :$USERS_URL = 'manage-user.php');

// roles management
(isset($_SESSION['id']) ? $ROLES_URL = 'manage-roles.php?user_id='.$_SESSION['id'] :$ROLES_URL = 'manage-roles.php');

// categories management
(isset($_SESSION['id']) ? $CATEGORIES_URL = 'manage-categories.php?user_id='.$_SESSION['id'] :$CATEGORIES_URL = 'manage-categories.php');

// subscribers
(isset($_SESSION['id']) ? $SUBSCRIBERS_URL = 'subscribers.php?user_id='.$_SESSION['id'] :$SUBSCRIBERS_URL = 'subscribers.php');

// post management
(isset($_SESSION['id']) ? $POSTS_URL = 'manage-posts.php?user_id='.$_SESSION['id'] :$POSTS_URL = 'manage-posts.php');

// profile management
(isset($_SESSION['id']) ? $PROFILE_URL = 'pages-profile.php?user_id='.$_SESSION['id'] :$PROFILE_URL = 'pages-profile.php');