<?php
session_start();

//home page
(isset($_SESSION['id']) ? $BASE_URL = 'index.php?user_id='.$_SESSION['id'] :$BASE_URL = 'index.php');
