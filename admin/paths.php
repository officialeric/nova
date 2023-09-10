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

// post adding
(isset($_SESSION['id']) ? $ADD_POST_URL = 'add-posts.php?user_id='.$_SESSION['id'] :$ADD_POST_URL = 'add-posts.php');

// profile management
(isset($_SESSION['id']) ? $PROFILE_URL = 'pages-profile.php?user_id='.$_SESSION['id'] :$PROFILE_URL = 'pages-profile.php');

// faq management
(isset($_SESSION['id']) ? $FAQ_URL = 'pages-faq.php?user_id='.$_SESSION['id'] :$FAQ_URL = 'pages-faq.php');

// setting header
(isset($_SESSION['id']) ? $SET_HEADER_URL = 'setting-header.php?user_id='.$_SESSION['id'] :$SET_HEADER_URL = 'setting-header.php');

// posting process
(isset($_SESSION['id']) ? $PROCESS_POST_URL = '../process/posting.php?user_id='.$_SESSION['id'] :$PROCESS_POST_URL = '../process/posting.php');

// uploaded files
(isset($_SESSION['id']) ? $UPLOADED_URL = 'uploaded-files.php?user_id='.$_SESSION['id'] :$UPLOADED_URL = 'uploaded-files.php');

// staff management
(isset($_SESSION['id']) ? $STAFF_URL = 'manage-staff.php?user_id='.$_SESSION['id'] :$STAFF_URL = 'manage-staff.php');

// staff management
(isset($_SESSION['id']) ? $ADD_STAFF_URL = 'add-staff.php?user_id='.$_SESSION['id'] :$ADD_STAFF_URL = 'add-staff.php');

// page management
(isset($_SESSION['id']) ? $PAGES_URL = 'pages.php?user_id='.$_SESSION['id'] :$PAGES_URL = 'pages.php');
