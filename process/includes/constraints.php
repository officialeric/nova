<?php
session_start();

(isset($_SESSION['id']) ? $BASE_URL = 'index.php?user_id='.$_SESSION['id']  
                        :$BASE_URL = 'index.php' 
);