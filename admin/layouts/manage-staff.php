<?php 
    include 'header.php'; 
    include '../../process/db_connect.php';
    
    $sql = "SELECT users.*,roles.role_name as role_name from users 
            INNER JOIN roles ON users.role_id = roles.id WHERE role_id IN(2,3) ";
    $staffs = mysqli_query($conn, $sql);
    
?>


                <!-- Sidebar -left -->
                <?php include 'sidebar.php'; ?>
                    <!--- End Sidemenu -->

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
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <!--  -->
                                    </div>
                                    <h4 class="page-title">Manage Staffs</h4>
                                </div>
                                <div class="col-12 mb-3">
                                <a href="<?=$ADD_STAFF_URL?>&page=staff">
                                    <button class='btn btn-primary rounded'>Add Staff</button>
                                </a>
                            </div>
                            </div>
                        </div>
                        <!-- end page title -->           

       

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Search input should be here</h4>
                                    <!-- <p class="text-muted mb-0">
                                        This example shows the multi option. Note how a click on a row will toggle its
                                        selected state without effecting other rows,
                                        unlike the os and single options shown in other examples.
                                    </p> -->
                                </div>
                                <div class="card-body">
                                <table id="selection-datatable"
                                        class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Profile</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                        <?php 
                                            $i = 0;
                                            foreach($staffs as $staff):  $i++;  
                                        ?>    
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><img src="../../process/auth/uploads/<?=$staff['profile_img']?>" width="10%" class="avatar-sm rounded-circle"></td>
                                                <td><?= $staff['username'] ?></td>
                                                <td><?= $staff['email'] ?></td>
                                                <td><?= $staff['password'] ?></td>
                                                <td><?=$staff['role_name']?></td>
                                                <td>
                                                    <a class="text-soft-danger" href="<?=$ADD_STAFF_URL?>&page=staff&staff_id=<?=$staff['id']?>">
                                                        <button type="button" class="btn btn-soft-primary">
                                                            Edit
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach;  ?>
                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->


                    



                    
                
 
                        
            
        </div>        
        
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Daterangepicker js -->
        <script src="assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
        
        <!-- Apex Charts js -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

        <!-- Vector Map js -->
        <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard App js -->
        <script src="assets/js/pages/dashboard.js"></script>


        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html> 