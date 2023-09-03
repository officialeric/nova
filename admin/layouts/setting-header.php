<?php 
    include 'header.php'; 
    include '../../process/db_connect.php';
    
    $sql = "SELECT * FROM users WHERE role_id = 4";
    $users = mysqli_query($conn, $sql);

    
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
                                    </div>
                                </div>
                                <div class="col-12 my-3">
                                <h3>Header setting</h3>

                            </div>
                            </div>
                        </div>
                        <!-- end page title -->           

       

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Upload Logos</h4>
                                    <!-- <p class="text-muted mb-0">
                                        This example shows the multi option. Note how a click on a row will toggle its
                                        selected state without effecting other rows,
                                        unlike the os and single options shown in other examples.
                                    </p> -->
                                </div>
                                <div class="card-body">
                                <form action="">
                                <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Large logo</label>
                                    <input class="form-control" type="file" id="formFile">
                                 </div>                                
                                </div>
                                <div class="col">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Small logo</label>
                                    <input class="form-control" type="file" id="formFile" >
                                 </div>                                
                                </div>
                                </div>
                                <button type='submit' class="btn btn-primary" name='logo-submit'>Submit</button>
                                </form>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col">
                                        <h4 class="header-title">Header Links</h4>

                                        </div>
                                        <div class="col-2   ">
                                            <a href="#">View All Links</a>
                                        </div>
                                    </div>
                                    <!-- <p class="text-muted mb-0">
                                        This example shows the multi option. Note how a click on a row will toggle its
                                        selected state without effecting other rows,
                                        unlike the os and single options shown in other examples.
                                    </p> -->
                                </div>
                                <div class="card-body">
                                <form action="">
                                <div class="row">
                                <div class="col-4">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Link name</label>
                                    <input type="text" class="form-control" placeholder="Name" name='lname'>
                                 </div>                                
                                </div>
                                <div class="col">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Link url</label>
                                    <input type="text" class="form-control" placeholder="https://linkURL" name='lurl'>
                                 </div>                                
                                </div>
                                </div>
                                <button type='submit' class="btn btn-primary" name='link-submit'>Submit</button>
                                </form>

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