<?php 
    include 'header.php'; 
    include '../../process/db_connect.php';
    
    $sql = "SELECT * FROM roles";
    $roles = mysqli_query($conn, $sql);
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
                                    <h4 class="page-title">Manage Pages</h4>
                                </div>
                            </div>

                        <div class="col-12 mb-3">
                            <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Add Page
                            </button>
                        </div>
                        </div>
                        <!-- end page title -->

                        <div class="row mt-3">
                        <div class="col-12">
                            Pages
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