<?php 
include 'header.php'; 

include '../../process/db_connect.php';
    $id = $_GET['user_id'];
    $sql2 = "SELECT * FROM users WHERE id=$id";
    $datas = mysqli_query($conn, $sql2);

    if(mysqli_num_rows($datas) == 1) {
        $user_data =  mysqli_fetch_assoc($datas);
    }
?>

<?php include 'sidebar.php'; ?>

<div class="clearfix"></div>
</div>
</div>
<!-- ========== Left Sidebar End ========== -->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="profile-bg-picture" style="background-image:url('assets/images/bg-profile.jpg')">
                        <span class="picture-bg-overlay"></span>
                        <!-- overlay -->
                    </div>
                    <!-- meta -->
                    <div class="profile-user-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="profile-user-img">
                                    <img src="../process/uploads/<?=$user_data['profile_img']?>" alt=""
                                        class="avatar-lg rounded-circle"></div>
                                <div class="">
                                    <h4 class="mt-4 fs-17 ellipsis"><?=$user_data['fullname'];?></h4>
                                    <p class="font-13">Admin</p>
                                    <p class="text-muted mb-0"><small><?=$user_data['email']?></small></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-end align-items-center gap-2">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Edit Profile Photo
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Upload Image</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../process/profiling.php" method="post" id='form'
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="user_id"
                                                            value='<?=$user_data['id']?>'>
                                                        <label for="inputGroupFile04">Choose Image File</label>
                                                        <div class="input-group">
                                                            <input type="file" name="image" class="form-control"
                                                                id="inputGroupFile04"
                                                                aria-describedby="inputGroupFileAddon04"
                                                                aria-label="Upload">
                                                            <!-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button> -->
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-soft-danger"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" name="img_submit" class="btn btn-primary"
                                                        form='form'>Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card p-0">
                        <div class="card-body p-0">
                            <div class="profile-content">
                                <ul class="nav nav-underline nav-justified gap-0">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#aboutme" type="button" role="tab" aria-controls="home"
                                            aria-selected="true" href="pages-profile.php#aboutme">About</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#user-activities" type="button" role="tab"
                                            aria-controls="home" aria-selected="true"
                                            href="pages-profile.php#user-activities">Activities</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#edit-profile" type="button" role="tab" aria-controls="home"
                                            aria-selected="true" href="pages-profile.php#edit-profile">Settings</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#projects" type="button" role="tab" aria-controls="home"
                                            aria-selected="true" href="pages-profile.php#projects">Projects</a></li>
                                </ul>

                                <div class="tab-content m-0 p-4">
                                    <div class="tab-pane active" id="aboutme" role="tabpanel" aria-labelledby="home-tab"
                                        tabindex="0">
                                        <div class="profile-desk">
                                            <h5 class="text-uppercase fs-17 text-dark"><?=$user_data['username']?></h5>
                                            <div class="designation mb-4">Admin</div>
                                            <p class="text-muted fs-16">
                                                <?=$user_data['about']?>
                                            </p>

                                            <h5 class="mt-4 fs-17 text-dark">Contact Information</h5>
                                            <table class="table table-condensed mb-0 border-top">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Url</th>
                                                        <td>
                                                            <a href="<?=$user_data['website']?>" target='_blank'
                                                                class="ng-binding">
                                                                <?=$user_data['website']?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td>
                                                            <a href="mailto:<?=$user_data['email']?>"
                                                                class="ng-binding">
                                                                <?=$user_data['email']?>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Phone</th>
                                                        <td class="ng-binding">
                                                            <a href="tel:+<?=$user_data['phone']?>" class="ng-binding">
                                                                <?=$user_data['phone']?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                                                <th scope="row">Skype</th>
                                                                <td>
                                                                    <a href="pages-profile.php#" class="ng-binding">
                                                                        jonathandeo123
                                                                    </a>
                                                                </td>
                                                            </tr> -->

                                                </tbody>
                                            </table>
                                        </div> <!-- end profile-desk -->
                                    </div> <!-- about-me -->

                                    <!-- Activities -->
                                    <div id="user-activities" class="tab-pane">
                                        <div class="timeline-2">
                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">5 minutes ago</div>
                                                    <p><strong><a href="pages-profile.php#" class="text-info">John
                                                                Doe</a></strong>Uploaded a photo</p>
                                                    <img src="assets/images/small/small-3.jpg" alt="" height="40"
                                                        width="60" class="rounded-1">
                                                    <img src="assets/images/small/small-4.jpg" alt="" height="40"
                                                        width="60" class="rounded-1">
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">30 minutes ago</div>
                                                    <p><a href="pages-profile.php" class="text-info">Lorem</a> commented
                                                        your
                                                        post.
                                                    </p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">59 minutes ago</div>
                                                    <p><a href="pages-profile.php" class="text-info">Jessi</a> attended
                                                        a meeting
                                                        with<a href="pages-profile.php#" class="text-success">John
                                                            Doe</a>.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">5 minutes ago</div>
                                                    <p><strong><a href="pages-profile.php#" class="text-info">John
                                                                Doe</a></strong> Uploaded 2 new photos</p>
                                                    <img src="assets/images/small/small-2.jpg" alt="" height="40"
                                                        width="60" class="rounded-1">
                                                    <img src="assets/images/small/small-1.jpg" alt="" height="40"
                                                        width="60" class="rounded-1">
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">30 minutes ago</div>
                                                    <p><a href="pages-profile.php" class="text-info">Lorem</a> commented
                                                        your
                                                        post.
                                                    </p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">59 minutes ago</div>
                                                    <p><a href="pages-profile.php" class="text-info">Jessi</a> attended
                                                        a meeting
                                                        with<a href="pages-profile.php#" class="text-success">John
                                                            Doe</a>.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- settings -->
                                    <div id="edit-profile" class="tab-pane">
                                        <div class="user-profile-content">
                                            <form action="../process/profiling.php" method="post">
                                                <input type="hidden" name="logged_user_id"
                                                    value='<?=$_GET['user_id']?>'>
                                                <div class="row row-cols-sm-2 row-cols-1">
                                                    <div class="mb-2">
                                                        <label class="form-label" for="FullName">Full
                                                            Name</label>
                                                        <input type="text" value="<?=$user_data['fullname']?>"
                                                            id="FullName" class="form-control" name="fname">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="Email">Email</label>
                                                        <input type="email" value="<?=$user_data['email']?>" id="Email"
                                                            class="form-control" name="email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="web-url">Website</label>
                                                        <input type="text" value="<?=$user_data['website']?>"
                                                            id="web-url" class="form-control" name="website">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="phone">Phone</label>
                                                        <input type="tel" placeholder="+255 625-290-997"
                                                            value='<?=$user_data['phone']?>' id="phone"
                                                            class="form-control" name="phone">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="Password">Password</label><br>
                                                        <small class='text-primary'> Your password is encrypted for
                                                            security, But it's still the same!
                                                            You may change it only if you want to edit it.
                                                        </small>
                                                        <input type="password" placeholder="6 - 15 Characters"
                                                            value='<?=$user_data['password']?>' id="Password"
                                                            class="form-control" name="password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Username">Username</label>
                                                        <input type="text" value="<?=$user_data['username']?>"
                                                            id="Username" class="form-control" name="uname">
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="form-label" for="AboutMe">About Me</label>
                                                        <textarea style="height: 125px;" id="AboutMe" name="about"
                                                            class="form-control">
                                                                    <?=$user_data['about']?>
                                                                </textarea>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit" name="submit">
                                                <!-- <span class="material-symbols-outlined">
                                                    save   
                                                </span> -->
                                                    Save
                                                </button>

                                            </form>
                                        </div>
                                    </div>

                                    <!-- profile -->
                                    <div id="projects" class="tab-pane">
                                        <div class="row m-t-10">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Project Name</th>
                                                                <th>Start Date</th>
                                                                <th>Due Date</th>
                                                                <th>Status</th>
                                                                <th>Assign</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Velonic Admin</td>
                                                                <td>01/01/2015</td>
                                                                <td>07/05/2015</td>
                                                                <td><span class="badge bg-info">Work
                                                                        in Progress</span></td>
                                                                <td>Techzaa</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Velonic Frontend</td>
                                                                <td>01/01/2015</td>
                                                                <td>07/05/2015</td>
                                                                <td><span class="badge bg-success">Pending</span>
                                                                </td>
                                                                <td>Techzaa</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Velonic Admin</td>
                                                                <td>01/01/2015</td>
                                                                <td>07/05/2015</td>
                                                                <td><span class="badge bg-pink">Done</span>
                                                                </td>
                                                                <td>Techzaa</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Velonic Frontend</td>
                                                                <td>01/01/2015</td>
                                                                <td>07/05/2015</td>
                                                                <td><span class="badge bg-purple">Work
                                                                        in Progress</span></td>
                                                                <td>Techzaa</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Velonic Admin</td>
                                                                <td>01/01/2015</td>
                                                                <td>07/05/2015</td>
                                                                <td><span class="badge bg-warning">Coming
                                                                        soon</span></td>
                                                                <td>Techzaa</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

        </div>
        <!-- end row -->

    </div>
    <!-- container -->

</div>
<!-- content -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <script>
                    document.write(new Date().getFullYear())
                </script> © <b>Xcole Corp</b>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
        <h5 class="text-white m-0">Theme Settings</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>

    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="p-3">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light"
                                value="light">
                            <label class="form-check-label" for="layout-color-light">
                                <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark"
                                value="dark">
                            <label class="form-check-label" for="layout-color-dark">
                                <img src="assets/images/layouts/dark.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div id="layout-width">
                    <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                    id="layout-mode-fluid" value="fluid">
                                <label class="form-check-label" for="layout-mode-fluid">
                                    <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4">
                            <div id="layout-boxed">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                        id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label" for="layout-mode-boxed">
                                        <img src="assets/images/layouts/boxed.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                id="topbar-color-light" value="light">
                            <label class="form-check-label" for="topbar-color-light">
                                <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                id="topbar-color-dark" value="dark">
                            <label class="form-check-label" for="topbar-color-dark">
                                <img src="assets/images/layouts/topbar-dark.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div>
                    <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color"
                                    id="leftbar-color-light" value="light">
                                <label class="form-check-label" for="leftbar-color-light">
                                    <img src="assets/images/layouts/sidebar-light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color"
                                    id="leftbar-color-dark" value="dark">
                                <label class="form-check-label" for="leftbar-color-dark">
                                    <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-size">
                    <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-default" value="default">
                                <label class="form-check-label" for="leftbar-size-default">
                                    <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-compact" value="compact">
                                <label class="form-check-label" for="leftbar-size-compact">
                                    <img src="assets/images/layouts/compact.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-small" value="condensed">
                                <label class="form-check-label" for="leftbar-size-small">
                                    <img src="assets/images/layouts/sm.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                        </div>


                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-full" value="full">
                                <label class="form-check-label" for="leftbar-size-full">
                                    <img src="assets/images/layouts/full.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-position">
                    <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                    <div class="btn-group checkbox" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                            value="fixed">
                        <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-soft-primary w-sm ms-0"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
            <div class="col-6">
                <a href="https://1.envato.market/velonic" target="_blank" role="button"
                    class="btn btn-primary w-100">Buy Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Chart.js -->
<script src="assets/vendor/chart.js/chart.min.js"></script>

<!-- Profile Demo App js -->
<script src="assets/js/pages/profile.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

</html>