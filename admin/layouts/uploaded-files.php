<?php include 'header.php';
$dir_name = "../process/uploads/";
$jpgs = glob($dir_name."*.jpg");
$jpegs = glob($dir_name."*.jpeg");
$pngs = glob($dir_name."*.png");


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
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Uploaded Files</h3>
                            </div>
                            <div class="card-body">
                            <div class="row">
                            <?php foreach ($jpgs as $jpg) { ?>
                                <div class="col">
                                    <?='<img src="' . $jpg . '" alt="Image" width="100%">'?>
                                </div> 
                                
                             <?php }  ?>
                            </div>
                            <div class="row">

                             <?php foreach ($jpegs as $jpeg) { ?>
                                
                                <div class="col">
                                    <?='<img src="' . $jpeg . '" alt="Image" width="100%">'?>
                                </div> 
                                
                             <?php }  ?>
                             </div>
                             <div class="row mt-3">

                             <?php foreach ($pngs as $png) { ?>
                                
                                <div class="col">
                                    <?='<img src="' . $png . '" alt="Image" width="100%">'?>
                                </div> 
                                
                             <?php }  ?>
                             </div>
                            </div>
                        </div>

                    </div>
                </div>
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