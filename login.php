<?php
    include 'process/db_connect.php';
    include 'process/auth/auth-middleware.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login || Blogar - Personal Blog Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

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
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forget Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body form-group">
        <form action="process/auth/forget-password.php" method='post' id='pwd'>
            <p>The permission link will sent to the provided email below!    <br>
             Click that link to change your password</p>
        <input type="email" name="email" placeholder="Enter your email" required><br>
        </form>
      </div>
      <div class="modal-footer">
      <button class="axil-button button-rounded" name='request' type='submit' form='pwd'>Request Permission</button>
      </div>
    </div>
  </div>
</div>
    <div class="main-wrapper">
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

        <!-- Start Maintanence Area  -->
        <div class="maintanence-area">
            
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="order-2 order-lg-1 col-lg-6 mt_md--40 mt_sm--40">
                        
                        <div class="content">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                                    <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                                </a>
                            </div>
                            <h1 class="title">Log in</h1>
                            <!-- <h5>Please , Fill the form below</h5> -->
                            <!-- <p>No spam, notifications only about news products, updates.</p> -->
                            <div class="inner d-flex align-items-center flex-wrap">
                                <!-- <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="maintenance.html#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="maintenance.html#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="maintenance.html#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="maintenance.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul> -->
                            </div>
                            <form action="process/auth/signup.inc.php" method='post' class="sign-form">
                                <div class="form-group">
                                            <?php if(isset($_GET['message'])): $msg = $_GET['message']; ?>
                                                    <div>
                                                        <p class="text-success "><?php echo $msg ?></p>
                                                    </div>
                                            <?php endif ?>
                                            <?php if(isset($_GET['error'])): $error = $_GET['error']; ?>
                                                    <div>
                                                        <p class="text-danger"><?php echo $error ?></p>
                                                    </div>
                                            <?php endif ?>
                                        <input type="email" name="email" placeholder="Enter your email" required><br>
                                        <input type="password" name="password" placeholder="Enter your password" required><br>
                                        <div class="forgot mb-5">
                                            <button class="axil-button button-rounded" name='login' type='submit'>Log In</button>
                                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Launch demo modal
                                            </button> -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Forget password?</a>
                                        </div>
                                        Don't have an account? <a href="signup.php">Sign Up</a>
                                        <span>Or</span>
                                        <div class="social">
                                            <button class="axil-button button-rounded" id="google">Login with Google</button>
                                        </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="order-1 order-lg-2 col-lg-5 offset-lg-1">
                        <div class="thumbnail">
                            <img src="assets/images/others/account.png" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Maintanence Area  -->
        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/tweenmax.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>